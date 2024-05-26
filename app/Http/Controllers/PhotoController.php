<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
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
        //
        
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
     

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
        
    }
    function users (Request $request) {

       
        // ...
    }

    function users_id(Request $request, string $id) {
    //  dd($request->all());
     return 'User '.$id;
    }

    function users_name(?string $name = 'John') {
   //   dd("abdulllllhaq");
      
    //  return 'User '.$name;
    }


    function users_class(string $id, string $name) {

   //  dd("abduasdfsdweelhaq");

   // return 'User'. $name ;

    }

    function users_category(string $category) {
        
    //   dd("dsafdgejk");

      return 'category'.  $category;
    }

    function users_search(string $search) {
      //  return  $search;
      //  dd("abdulasdertyuihaq");
    }

    function users_profile(string $profile) {
        dd("classwert");
    }
}
