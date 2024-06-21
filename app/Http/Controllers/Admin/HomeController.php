<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Home;
use App\Models\About;
use App\Models\HomeImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('adminauth');
    }
    public function index()
    {
        //
       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('admin.contents.add_image');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$image = $request->file('profile_image')->getMimeType();
       // dd($image);

        if($request->hasFile('profile_image')){
          //dd('vkjfdv');
        
        $request->validate([
            
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->profile_image;
       // dd($input->get());
        if($image = $request->file('profile_image')){
       
           // dd("ok");
            $image = $request->file('profile_image');
            $profileImage  = time().".".$image->getClientOriginalExtension();
            $destinationPath =Storage::putFile('public/adminimage',$image);
           // $image -> move(public_path('myimages/'),$profileImage);
        
           // dd($image);
           // $input['profile_image'] = $profileImage;
        }
       $home =  HomeImage::create(['profile_image'=> $profileImage]);
      // dd($home);
        return redirect('/admindashboard')->with('success','image uploaded successfully.');
    }
    else{
        dd('jvofd');
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        
       $home = $home->first();
       // $home = intval($home->id);
        return view('admin.contents.home_edit',compact('home'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
        //dd($request);
        
            
           

         $request->validate([
            
            
           'profile_image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
          $input = $request->all();

         // dd($input);
          if($image = $request->file('profile_image')){
       
             //dd("ok");
             $image = $request->file('profile_image');
             $profileImage  = time()."-".$request->name.".".$image->getClientOriginalExtension();
            
            $path = $image->storeAs('public/adminimage',$profileImage);
         
             $input['profile_image'] = $profileImage;
          }
         else{
          //  dd('nothing');
            unset($input['profile_image']);
         }
         

        $update = $home->first();
        $update->update($input);
             
        
          return redirect('/admindashboard');
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
