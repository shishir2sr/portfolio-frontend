<?php

namespace App\Http\Controllers;


//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Home;
use App\Models\About;
use App\Models\WhatIDo;

class UserController extends Controller
{
    //
    public function index(Request $request){
       
      // dd($request->ajax());
      
        $home = Home::get();
        $about = About::first();
        $whattitle = WhatIDo::first();
        //$des_array = WhatIDo::Select(['description'])->paginate(2);
        $whats = WhatIDo::paginate(3);
        
      $view = view('admin.components.layouts.whatido', compact('home','about','whats','whattitle'));
           // dd($view);
        
        if ($request->ajax()) {
           
            $view = view('admin.components.layouts.whatido', compact('home','about','whats','whattitle',))->render();
           
            return response()->json(['html' => $view]);
        
        }
        
       // dd($request);
      
        return view('admin.contents.index',compact('home','about','whattitle','whats'));
    }

    
}

    
