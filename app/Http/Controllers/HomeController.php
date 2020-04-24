<?php

namespace App\Http\Controllers;

use Request;
use App\Category;
use App\Product;
use DB;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      return view('home');
    }

    public function getAdd(){
       $categories = DB::table('products')
        ->select('*')
        ->from(
            DB::raw('(select * from products ORDER BY product_id DESC LIMIT 5) as sub')
        )
        ->orderBy('product_id', 'asc')
        
        ->get();
        return $categories;
    }



    public function getCat(){
        $categories = DB::table('categories')
        ->select('categories.name as categoryname','categories.category_id')
        ->orderBy('categories.name', 'asc')
        ->get();
        return $categories;
    }

    public function getCat2(){
        $categories = DB::table('categories')
        ->select('categories.name as categoryname','categories.category_id')
        ->orderBy('categories.name', 'asc')
        ->get();
        return $categories;
    }



    public function getSub(){

        $subcategories = DB::table('sub_categories')
        ->select('*')
        
        ->get();

        return $subcategories;
    }

    public function productsByCategory($category_id) 
    {
        // $categories = DB::table('categories')
        // ->select('categories.name as categoryname','categories.category_id','sub_categories.subcategory_id','sub_categories.name')
        // ->join('sub_categories', 'sub_categories.category_id', '=', 'categories.category_id')
        // ->where(['categories.status' => 'published'])
        // ->get();

        $products = DB::table('sub_categories')
        ->select('products.product_id', 'products.featured_img', 'products.product_name', DB::raw('LEFT(products.description, 20) description'), 
            'products.price', 'products.quantity', 'products.created_at', 'products.updated_at')
        ->join('products', 'sub_categories.subcategory_id', '=', 'products.subcategory_id')
        ->where([['products.status', '=', 'published'], ['products.subcategory_id', '=' ,$category_id], ['products.quantity', '>', '0']])
        ->get();

        return $products;
    }


    public function productsBySearch($productname,$category_id2 ) {
        // $categories = DB::table('categories')
        // ->select('categories.name as categoryname','categories.category_id','sub_categories.subcategory_id','sub_categories.name')
        // ->join('sub_categories', 'sub_categories.category_id', '=', 'categories.category_id')
        // ->where(['categories.status' => 'published'])
        // ->get();

        if ($category_id2 == 'all'){ 
            $products = DB::table('sub_categories')
            ->select('products.product_id', 'products.featured_img', 'products.product_name',  DB::raw('LEFT(products.description, 40) description'), 
                'products.price', 'products.quantity', 'products.created_at', 'products.updated_at')
            ->join('products', 'sub_categories.subcategory_id', '=', 'products.subcategory_id')
            ->where([['products.status', '=', 'published'], ['products.product_name', 'like' ,'%'.$productname.'%'], ['products.quantity', '>', '0']])
            ->get();
        }
        else{
            $products = DB::table('sub_categories')
            ->select('products.product_id', 'products.featured_img', 'products.product_name',  DB::raw('LEFT(products.description, 40) description'), 
                'products.price', 'products.quantity', 'products.created_at', 'products.updated_at')
            ->join('products', 'sub_categories.subcategory_id', '=', 'products.subcategory_id')
            ->join('categories', 'sub_categories.category_id', '=', 'categories.category_id')
             ->where([['products.status', '=', 'published'], ['products.product_name', 'like' ,'%'.$productname.'%'], ['sub_categories.category_id', '=' ,$category_id2], ['products.quantity', '>', '0']])
            //->where([ ['products.subcategory_id', '=' ,$category_id2]])
            ->get();

        }

        return $products;
    }


    

}
