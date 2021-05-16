<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Session;
class AdminController extends Controller
{

    public function adminLogIn(){
    	return view('adminlogin');
    }

    public function adminLoged(Request $request){
    	$admin = admin::where('username',$request->username)->where('password',$request->password)->get()->toArray();
    	if($admin){
    		$request->session()->put('admin_session', $admin[0]['id']);
    		// return view('dashboard');
    	}else{
    		session::flash('coc', 'email and password not match');
    		return redirect('/loginpage/')->withInput();
    	}
    }
   public function dashBoard(bool b){
         if (b){
              view('dashboard');
              return redirect('dashboard/')
         }

       }
}
