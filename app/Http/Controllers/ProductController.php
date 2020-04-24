<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Province;
use DB;
use Session;
use Response;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\ShippingModel;

class ProductController extends Controller
{    
    public function showProduct($product_id) 
    {
        $categories = DB::table('categories')
        ->select('categories.name as categoryname','categories.category_id','sub_categories.subcategory_id','sub_categories.name')
        ->join('sub_categories', 'sub_categories.category_id', '=', 'categories.category_id')
        ->where(['categories.status' => 'published'])
        ->get();

        $product_images = DB::table('product_images')
        ->select('product_images.product_image')
        ->where(['product_images.product_id' => $product_id])
        ->get();

        $product_info = DB::table('products')
        ->select('products.product_id','products.featured_img','products.product_name','products.description','products.price','products.quantity','products.subcategory_id')
        ->where(['products.product_id' => $product_id, 'products.status' => 'published'])
        ->get();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $sessionQty = $cart->getmaxQty($product_id);

        //return $product_info;
        return Response::json(array('product_info'=>$product_info,'sessionQty'=>$sessionQty,'product_images'=>$product_images));
        //return view('showproduct',compact('categories','product_images','product_info','sessionQty'));
    }

    public function addToCart(Request $request, $product_id, $maxqty,$qty) 
    {
        //$quantity = $request->qty;

        $product = DB::table('products')
        ->select('*')
        ->where(['products.product_id' => $product_id])
        ->first();        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->product_id, $qty, $maxqty);

        $request->session()->put('cart', $cart);
        return Response::json(array('product_info'=>$cart));
        //return view('home');
        //return redirect()->route('productlist',['id' => $product->subcategory_id ]);
        //return view('/home');
    }

    public function removecartItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0) {
            Session::put('cart',$cart);    
        } else {
            Session::forget('cart');
        }
        return view('mycartview', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getAllCart() 
    {
        if (!Session::has('cart')) {
            return view('mycartview');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('mycartview', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function updatenewQty($id,$newqty) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateqty($id,$newqty);
        if(count($cart->items) > 0) {
            Session::put('cart',$cart);    
        }
    }

    public function refreshTable() {
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('mycartview', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);   
    }

    public function getCount(){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        return $cart->totalQty;
    }


    public function storeShip(Request $request){
        
        // $cart = DB::table("shipping_table")->insert([
        //     'user_id'=>Auth::user()->id,
        //     'shipping_date'=>  Carbon::now('Asia/Manila'),
        //     'total_amount' =>$_POST["total_amount"],
        //     'shipping_receiver' =>$_POST["shipping_receiver"],
        //     'shipping_address' =>$_POST["shipping_address"],
        //     'mobile_number' =>$_POST["mobile_number"]
        // ]);


        

        $id = DB::table('shipping_table')-> insertGetId(array(
            'user_id'=>Auth::user()->id,
            'shipping_date'=>  Carbon::now('Asia/Manila'),
            'total_amount' =>$_POST["total_amount"],
            'shipping_receiver' =>$_POST["shipping_receiver"],
            'shipping_address' =>$_POST["shipping_address"],
            'mobile_number' =>$_POST["mobile_number"],
            'paywith' => $_POST["paywith"]
        ));


        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $d = $cart->items; 

        foreach ($d as $it) {
            DB::table("shipping_products")->insert([
                'shipping_id'=>$id,
                'product_id'=>  $it['item']->product_id,
                'quantity' => $it['qty']
            ]);
            
           // return json_encode($it['item']->product_name);
        }

        // DB::table("shipping_product")->insert([
        //     'shipping_id'=>$id,
        //     'product_id'=>  Carbon::now('Asia/Manila'),
        //     'quantity' => 1
        // ]);
            
        //return Response::json(array('success' => true, 'last_insert_id' => $data->id), 200);

        // $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = new Cart($oldCart);

        return json_encode("success");
    }

}
