<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use DB;
use App\Cart;
use Session;


class CheckoutController extends Controller
{
    
    private $client;
    private $verification;

    public function __construct() {        
        $this->client = app('Nexmo\Client');
    }

    public function checkoutIndex() 
    {
    	$provinces = Province::all(['province_id','province_name']);
        
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        // print_r($cart);

        return view('mycheckout',compact('provinces','cart'));
    }

    public function getmycity($province_id) {
    	$cities = DB::table('cities')
        ->select('cities.city_id','cities.city_name')
        ->where(['cities.province_id' => $province_id])
        ->get();

        $cities = json_decode(json_encode($cities),true);
        return $cities;
    }

    public function getmybarangay($city_id) {
        $barangays = DB::table('barangays')
        ->select('barangays.barangay_id','barangays.barangay_name')
        ->where(['barangays.city_id' => $city_id])
        ->get();        

        $barangays = json_decode(json_encode($barangays),true);
        return $barangays;
    }

    public function mobile_verification(Request $request,$number) {                        
        if(Session::has('verification_id')) {
            Session::forget('verification_id');
        }
        try {
            $this->verification = $this->client->verify()->start([
            'number' => $number,
            'brand'  => 'Shopee'
            ]);
            $request->session()->put('verification_id', $this->verification);
            return json_encode("Success");
        }catch(Exception $e) {
            return json_encode($e->getMessage());
        }
        
    }

    public function check_verify($code) {
        if (!Session::has('verification_id')) {
            return json_encode("Send a verification message first!.");
        } else {
            $id = Session::get('verification_id');                
            try {
                $status_code = $this->client->verify()->check($id, $code);    
                Session::forget('verification_id');
                return json_encode("Verification Success");
            }catch(Exception $e) {             
                return json_encode($e->getMessage());
            }            
        }
    }
}
