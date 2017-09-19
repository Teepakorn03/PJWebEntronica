<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album8;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum8Controller extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Album8 = Album8::all();
      $data = array(
        'Album8' => $Album8
      );
      return view('Album8.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Album8.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'image' => 'required|max:2000000',
          'name' => 'required|max:1000'




        //  'description' => 'required|max:100',
      ]);
      $Album8 = $request->file('image');
      $filename = $Album8->getClientOriginalName();
      $Album8->move(public_path().'/img/upload', $Album8->getClientOriginalName());

      $Album8 = new Album8;
      $Album8->image = $filename;
      $Album8->name = $request->name;




      $Album8->save();

      return redirect('Album8');
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
      if($id !== '') {
          $Album8 = Album8::find($id);
          $data = array(
              'Album8' => $Album8
          );
          return view('Album8/form',$data);
      }
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
      $this->validate($request, [
        'image' => 'required|max:2000000',
        'name' => 'required|max:1000'

    ]);
    $Album8 = $request->file('image');
    $filename = $Album8->getClientOriginalName();
    $Album8->move(public_path().'/img/upload', $Album8->getClientOriginalName());

    $Album8 = Album8::find($id);
    $Album8->image = $filename;
    $Album8->name = $request->name;




    $Album8->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album8');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album8 = Album8::find($id);
      $Album8->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album8');
    }
}
