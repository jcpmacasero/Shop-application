<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminReportSalesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function reportSalesIndex() {
    	return view('admin.salesreport');
    }

    public function generateReportDaily(Request $request) {
    	$date = date("Y-m-d", strtotime($request->datepicker2));
    	$str = '';
		$products =  DB::table('shipping_table')
        ->select('products.product_name', 'products.price', DB::raw('Sum(shipping_products.quantity) AS qtysold'), 'shipping_table.sold_date')
        ->join('shipping_products','shipping_table.shipping_id', '=', 'shipping_products.shipping_id')
        ->join('products','products.product_id', '=', 'shipping_products.product_id')
        ->where([[DB::raw("date(shipping_table.sold_date)"),$date], ['shipping_table.shipping_status', '=' ,1]])
        ->groupBy('products.product_name')
        ->paginate(10);

        if(!empty($products))
		{
			$total = 0;
			foreach ($products as  $product) {
				
				$totalsales = 0;
				$childprint = '';
				$totalsales = $product->price * $product->qtysold;
				$str.='<tr><td style="text-transform:capitalize;">'.$product->product_name.'</td>';
				$str.='<td>'.$product->sold_date.'</td>';
				$str.='<td>P '.$product->price.'</td>
				<td>'.$product->qtysold.'</td>
				<td><p style="color:red;font-weight:bold;">P '.$totalsales.'</p></td>
				</tr>';
				$total = $totalsales + $total;
			}
			$str.='<tr><td></td><td></td><td></td<td></td><td></td><td><p style="font-weight:bold;color:red;">'.' P ' .$total.'</p></td></tr>';
			$json['success'] = $str;
			$json['pagi'] = ''.$products->links().'';	
		}
		else
		{
			$json['success'] = '<tr><td colspan="100%">No Record Found!!</td></tr>';
		}
		echo json_encode($json);        
    }
    public function generateReportCustom(Request $request) {
    	$date1 = date("Y-m-d", strtotime($request->datepicker));
    	$date2 = date("Y-m-d", strtotime($request->datepicker1));
    	$str = '';
    	$products =  DB::table('shipping_table')
	    ->select('products.product_name', 'products.price', DB::raw('Sum(shipping_products.quantity) AS qtysold'), 'shipping_table.sold_date')
	    ->join('shipping_products','shipping_table.shipping_id', '=', 'shipping_products.shipping_id')
	    ->join('products','products.product_id', '=', 'shipping_products.product_id')
	    ->where('shipping_table.shipping_status',1)
	    ->whereBetween(DB::raw("date(shipping_table.sold_date)"),[$date1,$date2])
	    ->groupBy('products.product_name')
	    ->paginate(10);   

	    if(!empty($products))
		{
			$total = 0;
			foreach ($products as  $product) {
				
				$totalsales = 0;
				$childprint = '';
				$totalsales = $product->price * $product->qtysold;
				$str.='<tr><td style="text-transform:capitalize;">'.$product->product_name.'</td>';
				$str.='<td>'.$product->sold_date.'</td>';
				$str.='<td>P '.$product->price.'</td>
				<td>'.$product->qtysold.'</td>
				<td><p style="color:red;font-weight:bold;">P '.$totalsales.'</p></td>
				</tr>';
				$total = $totalsales + $total;
			}
			$str.='<tr><td></td><td></td><td></td<td></td><td></td><td><p style="font-weight:bold;color:red;">'.' P ' .$total.'</p></td></tr>';
			$json['success'] = $str;
			$json['pagi'] = ''.$products->links().'';	
		}
		else
		{
			$json['success'] = '<tr><td colspan="100%">No Record Found!!</td></tr>';
		}
		echo json_encode($json);             
    }
}
