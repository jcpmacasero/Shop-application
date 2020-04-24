<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUsersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function showIndex() {
    	$users = User::paginate(8);
    	return view('admin.useraccounts',compact('users'));
    }
}
