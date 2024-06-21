<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhatIDo;
use Illuminate\Support\Str;

class WhatIDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $whatedit = WhatIDo::first();
        dd($whatedit);
        return view('admin.contents.index',compact('whatedit'));
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
        //
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
    public function edit($id)
    {
        //

        $what = WhatIDo::find($id);
        // $what = WhatIDo::all();
       // dd($what);
        return view('admin.contents.whatido_edit',compact('what'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
        $input = $request->all();
        //dd($input);
        $n = WhatIDo::all();
        foreach($n as $m){
           
                //echo($m);
            $m->update([

                'title' =>$request->title
            ]);
            
        }
       
        $what = WhatIDo::find($id); 
       
        $what->update($input);
        

        return redirect('/admindashboard');
    }

    /**k
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function loadMoreData(Request $request)
    {
        
       
        $id = $request->id;
       
      // dd($request->start);
       //dd($start);
       /* $data = WhatIDo::orderBy('id', 'ASC')
            ->offset($start)
            ->limit(2)
            ->get();*/
     

    
     // $id='3';
      $data = WhatIDo::find($id);
     
      
     /* $sliced_data = substr($data->description,0,70);
      $sliced_data_len = strlen($sliced_data);
      echo($sliced_data);*/
      //dd($sliced_data_len);
     // $sliced_data_count = str_word_count($sliced_data);
     //$length = strlen($data->description);
    
    // dd($count);
     $rest_data = substr($data->description,71);
     
     //dd($rest_data);

     return response()->json([
            'rest_data' => $rest_data,
           
        ]);
    }
}
