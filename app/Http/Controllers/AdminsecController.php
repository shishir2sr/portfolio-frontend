<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminsecController extends Controller
{
    //
    public function getLogin(){
        // dd(hjvj);
         return view('admin.contents.index');
     }
    public function postLogin(Request $request)
    {
        /*if (Auth::guard('admin')->check()) {
           // dd("fgfd");
            return redirect()->route('admindashboard');
        }*/
        if ($request->isMethod('post')) {
            //dd('hello');
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];
            $messages = [
                'email.required' => 'Email Address is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
            ];
            $this->validate($request, $rules, $messages);
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                $check = Auth::guard('admin')->check();

                //dd($check);
                return redirect()->route('admindashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
        }
        dd('wait');
        return view('admin.contents.index')->withTitle('Login');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
