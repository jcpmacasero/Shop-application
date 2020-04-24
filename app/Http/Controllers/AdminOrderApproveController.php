<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminOrderApproveController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function OrderApproveIndex() {
    $approve = '1';

    	$shippings = DB::table('shipping_table')
        ->select('*')
        ->where(['shipping_table.shipping_status' => $approve])
        ->paginate(8);
        foreach ($shippings as $key => $value) {
        	$shippings[$key]->products=DB::table('shipping_products')->select('products.featured_img','products.product_name',
			'products.price','shipping_products.quantity')
			->join('products', 'shipping_products.product_id', '=', 'products.product_id')
			->where(['shipping_products.shipping_id'=>$value->shipping_id])
			->get();
        }
    	
    	return view('admin.approve_orders',compact('shippings'));
    }
}
