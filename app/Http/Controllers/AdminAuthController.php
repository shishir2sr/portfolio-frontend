<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Home;
use App\Models\About;
use App\Models\WhatIDo;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;




class AdminAuthController extends Controller
{
    //
    public function getLogin(){
       
        $home = Home::get();
        $about = About::first();
        $whats = WhatIDo::get();
        $des_array = WhatIDo::Select(['description'])->get();
      
        $items = array();
       
            foreach($des_array as $des_arr) {
   
               $string = $des_arr->description;
               //dd(strlen($string));
               //$limit_des = str::of($string)->words(20);
               $limit_des = substr($string,0,71);
              // dd($limit_des);
               $items[] = $limit_des;
              
               
          }
         // dd($length);
         /* foreach($length as $lengthno){
            echo $lengthno;
          }*/
        //dd("dhfkdn");
        $whatedit = WhatIDo::first();
        
        return view('admin.contents.index',compact('home','about','whats','whatedit','items'));
    }

    public function postLogin(Request $request){

       if($request->isMethod('post')){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
       


        if(auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
            {
               
                //if($user->is_admin == 1){
                    return redirect()->route('adminDashboard')->with('success','You are logged in successfully!');
            }
                else{
                  //  dd('error');
                    return back()->with('error','Whoops! invalid email and password.');
                }
            }
    }

    public function adminLogout(Request $request){

        auth()->guard('admin')->logout();
        Session::flush();
        Session::put('Success', 'You are logout successfully');
        return redirect()->route('adminLogin');
    }
}

    
