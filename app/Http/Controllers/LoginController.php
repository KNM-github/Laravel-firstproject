<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function login(){
    	return view('authentication.login');
    }
    public function loginPage(Request $request){
       //dd($request);
         $user = Sentinel::authenticate($request->all());
         
            Sentinel::login($user);
            return redirect('/');
            
      

        
    }
    
}