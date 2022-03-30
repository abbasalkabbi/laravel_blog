<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Validator;
use Illuminate\Support\Facades\Auth;

class UseController extends Controller
{
    //
    public function login_page(){
        return view('login');
    }
    public function registered_page(){
        return view('logup');
    }
    public function adduser(Request $request){
        $user = $request->validate([
            'name'=>['required'],
            'username' => ['required'],
            'password' => ['required'],
        ]);
        DB::table('users')->insert([
            'name'=>$request->fullname,
            'username'=>$request->username,
            'password'=>$request->password
        ]);
      

        
    }
    public function loginuser(Request $request){
        $user = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
      
        
    }
    
    

}
