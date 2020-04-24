<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminOrderPendingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function OrderPendingIndex() {
	$pending = '0';

    	$shippings = DB::table('shipping_table')
        ->select('*')
        ->where(['shipping_table.shipping_status' => $pending])
        ->paginate(8);
        foreach ($shippings as $key => $value) {
        	$shippings[$key]->products=DB::table('shipping_products')->select('products.featured_img','products.product_name',
			'products.price','products.quantity as available_qty','products.product_id','shipping_products.quantity')
			->join('products', 'shipping_products.product_id', '=', 'products.product_id')
			->where(['shipping_products.shipping_id'=>$value->shipping_id])
			->get();
        }
    	return view('admin.pending_orders',compact('shippings'));
    }

    public function updateProduct(Request $request) {
        $ids = array();
         foreach ($request->shippings as $ship) {
            $i = 0;            
            foreach ($ship['products'] as $product) {
                 $product_orders = DB::table('shipping_products')->select('shipping_products.product_id','shipping_products.quantity','shipping_products.shipping_id','shipping_table.mobile_number')
                ->join('shipping_table', 'shipping_products.shipping_id', '=', 'shipping_table.shipping_id')
                ->where([['shipping_products.shipping_id', '=',$ship[$i]], ['shipping_products.product_id', '=' ,$product]])
                ->get();
                array_push($ids,$product_orders);
            }
            $i++;
        }
        $checker = $this->CheckProductQty($ids);
        $ship_stat = '1';        
        $concat = array();
        if($checker == "SUCCESS") {                    
            foreach ($ids as $updateprod) { 
                $productname = $this->updateProductQty($updateprod[0]->product_id,$updateprod[0]->quantity);
                if( isset( $concat[$updateprod[0]->shipping_id] ) ) {
                    $concat[$updateprod[0]->shipping_id] .= ', ' . $productname ;
                }else {
                    $concat[$updateprod[0]->shipping_id] = '' . $productname;
                }
            }
            $text_intro = "This is from Shopee, the following is your orders that will be shipped: ";
            $text_end = "Thank you for choosing shopee!";            
            foreach ($concat as $key => $value) {                
                foreach ($ids as $mobile) {
                    if($key == $mobile[0]->shipping_id) {
                       $nexmo = app('Nexmo\Client');
                        $nexmo->message()->send([
                            'to'   => $mobile[0]->mobile_number,
                            'from' => '639432251906',
                            'text' => $text_intro . $value . ". " . $text_end
                        ]);
                    }
                }
            }             
            foreach ($request->shippings as $ship) {                                
                DB::table('shipping_table')
                ->where('shipping_id',$ship[0])
                ->update(array(
                    'shipping_status' => $ship_stat,
                    'sold_date' => \Carbon\Carbon::now(),
                ));
            }
            return redirect()->route('admin.pending')->with('message', 'Orders successfully approved!');
        } else {
            return redirect()->route('admin.pending')->with('Errormessage', 'Error! check quantity.');
        }  
    }

    public function updateProductQty($product_id, $quantity_order) {
        $qty = DB::table('products')->select('quantity','product_name')
            ->where(['products.product_id'=>$product_id])
            ->first();                    
                $updateTotalQty = $qty->quantity - $quantity_order;        
                DB::table('products')
                ->where('product_id', $product_id)
                ->update(array(           
                'quantity' => $updateTotalQty
                ));            
        return $qty->product_name;
    }

    private function CheckProductQty(array $products) {        
        $result = array();
        $temp_id = 0;
        foreach($products as $product) {             
            $temp_id = $product[0]->product_id;
            $result[$temp_id][] = $product[0]->quantity;
        }
        $new = array();
        foreach($result as $key => $value) {
            $new[] = array('temp_id' => $key, 'quanity' => array_sum($value));
        }
        $totalqty = 0;
        $collectedQty = array();
        foreach($new as $product) {                         
            $qty = DB::table('products')->select('quantity')
            ->where(['products.product_id'=>$product['temp_id']])
            ->first();
            $totalqty = $qty->quantity - $product['quanity'];
            array_push($collectedQty, $totalqty);
        }

        foreach($collectedQty as $value) {
            if($value < 0) {
                return "FAIL";
            }
        }
        return "SUCCESS";
    }

}
