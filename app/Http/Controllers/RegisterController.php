<?php

namespace App\Http\Controllers;
use Sentinel;

use Illuminate\Http\Request;
use App\Role;
class RegisterController extends Controller
{
    //
    public function register(){
        $roles=Role::all();
    	return view('authentication.register',compact('roles'));
    }
    public function registerUser(Request $request){
    	//dd($request->all());
    	
    	$user=Sentinel::registerAndActivate($request->all());
    
    	return redirect('/');
    }

}
