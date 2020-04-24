<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Product;
use App\Sub_category;
use Response;
use Illuminate\Support\Facades\Validator;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function productAdminIndex() 
    {
        $categories = Category::all(['category_id','name']);
        $subcategories = Sub_category::all(['subcategory_id','name']);
        $products = DB::table('products')
        ->select('products.product_id', 'sub_categories.name', 'products.featured_img', 'products.product_name', 'products.description', 'products.price', 'products.quantity', 'products.status', 'products.created_at',
            'products.updated_at')
        ->join('sub_categories', 'sub_categories.subcategory_id', '=', 'products.subcategory_id')
        ->paginate(8);
        return view('admin.product', compact('categories', 'products', 'subcategories'));
    }

    public function addSubCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'prodcat' => 'required',
        'subcatname' => 'required|unique:sub_categories,name',
        'subcatdesc' => 'required',
        ], [
            'prodcat.required' => 'Category is required.',
            'subcatname.required' => 'Sub-category is required.',
            'subcatname.unique' => 'Sub-category already exist.',
            'subcatdesc.required' => 'Description is required.'
        ]);

        if ($validator->fails()) {    
            return response()->json(['error'=>$validator->errors()->all()]);
        } else {
            $stat = "published";
            DB::table('sub_categories')->insert([
            'category_id'=>$request->prodcat,
            'name'=>$request->subcatname, 
            'description'=>$request->subcatdesc, 
            'status'=>$stat,
            'created_at' =>  \Carbon\Carbon::now(), # \Datetime()
            'updated_at' => \Carbon\Carbon::now()  # \Datetime()
            ]);
            return response()->json(['success'=>'Added new category.']);  
        }        
    }

    public function addProduct(Request $request)
    {   
        $validator = Validator::make($request->all(), [            
            'prodsubcat' => 'required',
            'prodname' => 'required',
            'prodprice' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'prodqty' => 'required|numeric|min:1',
            'proddesc' => 'required',
            'files.*' => 'image|mimes:jpeg,png,jpg',
            
        ], [
            'prodsubcat.required' => 'Sub-category is required.',
            'prodname.required' => 'Product name is required.',
            'prodprice.required' => 'Price is required.',
            'prodprice.regex' => 'Price must be number and two decimal.',
            'prodqty.required' => 'Quantity is required.',
            'prodqty.numeric' => 'Quantity must a be number.',
            'prodqty.min' => 'Quantity must atleast 1.',
            'proddesc.required' => 'Description is required.',
            'files.*.image' => 'Selected files must be image.',
            'files.*.mimes' => 'Selected files must be jpeg,png,jpg.',
        ]);
        if ($validator->fails()) {    
            return response()->json(['error'=>$validator->errors()->all()]);
        } else {
            $input=$request->all();
            $images=array();
            if($files=$request->file('files')){
            $i = 0;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('image_files',$name);
                $images[]=$name;
                $i++;
                }
            }
            $stat = "published";

            $product_id = DB::table('products')->insertGetId(array(
            'subcategory_id'=>$request->prodsubcat, 
            'product_name'=>$request->prodname,
            'featured_img'=>$images[0],
            'description'=>$request->proddesc,
            'price'=>$request->prodprice,
            'quantity'=>$request->prodqty,
            'status'=>$stat,
            'created_at'=>\Carbon\Carbon::now(), # \Datetime()
            'updated_at'=>\Carbon\Carbon::now()  # \Datetime()
            ));

            for($j=0;$j<$i;$j++) {
            DB::table('product_images')->insert(array(
            'product_image'=> $images[$j],
            'product_id'=>$product_id
            ));    
            }
            return response()->json(['success'=>'Added new product.']);  
        }
    }

    public function editProductDetails(Request $request) {
        $validator = Validator::make($request->all(), [
            'addfiles.*' => 'image|mimes:jpeg,png,jpg',
            'file1' => 'image|mimes:jpeg,png,jpg',
            'editprodsubcat' => 'required',
            'editpub' => 'required',
            'editprodname' => 'required',
            'editprodprice' => 'required',
            'editprodqty' => 'required',
            'editproddesc' => 'required',
            
        ], [
            'editprodsubcat.required' => 'Sub-category is required.',
            'editpub.required' => 'Status is required.',
            'editprodname.required' => 'Product name is required.',
            'editprodprice.required' => 'Price is required.',
            'editprodqty.required' => 'Quantity is required.',
            'editproddesc.required' => 'Description is required.',
            'addfiles.*.image' => 'Selected files must be image.',
            'addfiles.*.mimes' => 'Selected files must be jpeg,png,jpg.',
            'file1.image' => 'Featured image must be image file.',
            'file1.mimes' => 'Featured image file must be jpeg,png,jpg.',
        ]);
        if ($validator->fails()) {    
            return response()->json(['error'=>$validator->errors()->all()]);
        } else {
            DB::table('products')
            ->where('product_id', $request->editprodid)
            ->update(array(
            'subcategory_id' => $request->editprodsubcat,
            'product_name' => $request->editprodname,
            'description' => $request->editproddesc,
            'price' => $request->editprodprice,
            'quantity' => $request->editprodqty,
            'status' => $request->editpub,
            'updated_at' => \Carbon\Carbon::now()  # \Datetime()
            ));

            $input=$request->all();
            $images=array();
            if($files=$request->file('addfiles')){
            $i = 0;
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('image_files',$name);
                $images[]=$name;
                $i++;
                }

            for($j=0;$j<$i;$j++) {
            DB::table('product_images')->insert(array(
            'product_image'=> $images[$j],
            'product_id'=>$request->editprodid
            ));    
            }
            }
            return response()->json(['success'=>'Product successfully edited.']);  
        }  
    }

    public function getProductDetails($product_id) {
        $products = DB::table('products')
        ->select('sub_categories.name','products.featured_img','products.product_name','products.description','products.price',
                'products.quantity','products.status','products.subcategory_id')
        ->join('sub_categories', 'sub_categories.subcategory_id', '=', 'products.subcategory_id')
        ->where(['products.product_id' => $product_id])
        ->get();

        $product_images = DB::table('product_images')
        ->select('product_image','product_img_id')
        ->where(['product_images.product_id' => $product_id])
        ->get();

        return Response::json(array(
            'product' => $products,
            'product_images' => $product_images,
        ));   
    }

    public function deleteProducts(Request $request) {
        Product::destroy($request->products);
        return redirect()->route('admin.product');
    }

    public function deleteImg($product_img_id) {
        DB::table('product_images')->where('product_img_id', $product_img_id)->delete();
        return response(['msg' => 'Image Deleted', 'status' => 'success']);
    }
 
}
