<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;



class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skills = About::create([

            'add_skills'=> $request->add_skills
        ]);
        $skills->save();
        
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
    public function edit(About $about)
    {
        //
        $about = $about->first();
        
        return view('admin.contents.about_edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //

        $request->validate([
             
            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

         ]);
           $input = $request->all();
 
          // dd($input);
           if($image = $request->file('image')){
        
              //dd("ok");
              $image = $request->file('image');
              $sideimage  = time()."-".$request->name.".".$image->getClientOriginalExtension();
             
              $path = $image->storeAs('public/adminimage',$sideimage);
          
              $input['image'] = $sideimage;
           }
          else{
           //  dd('nothing');
             unset($input['image']);
          }
          if($file = $request->file('cv')){

            $cv = time()."-".$request->name.".".$file->getClientOriginalExtension();
            $path = $file->storeAs('public/pdf',$cv);
            $input['cv'] = $cv;
          }
          else{
            unset($input['cv']);
          }
 
           $update = $about->first();
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
