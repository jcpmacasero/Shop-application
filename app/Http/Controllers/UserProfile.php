<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class UserProfile extends Controller
{
	public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

    	return view('userprofile');
    }

    public function dataOrdered(){
    	$products = DB::table('shipping_products')
        ->select('shipping_products.shipping_id',
			'shipping_table.shipping_date',
			'products.product_name',
			'shipping_products.quantity',
			'products.price','shipping_status as  status')
        ->join('shipping_table', 'shipping_products.shipping_id', '=', 'shipping_table.shipping_id')
        ->join('products', 'shipping_products.product_id', '=', 'products.product_id')
        ->where([['shipping_table.user_id', '=', Auth::user()->id]])
        ->orderBy('shipping_table.shipping_date', 'asc')
        
        ->get();
    	return json_encode($products);
        
    }


}
