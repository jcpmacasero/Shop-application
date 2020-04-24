<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Cart;

class BankView extends Controller
{
    function index(){
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
    	 return view('bank',compact('cart'));
    }
}
