<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album7;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum7Controller extends Controller
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
      $Album7 = Album7::all();
      $data = array(
        'Album7' => $Album7
      );
      return view('Album7.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Album7.form');
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
      $Album7 = $request->file('image');
      $filename = $Album7->getClientOriginalName();
      $Album7->move(public_path().'/img/upload', $Album7->getClientOriginalName());

      $Album7 = new Album7;
      $Album7->image = $filename;
      $Album7->name = $request->name;




      $Album7->save();

      return redirect('Album7');
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
          $Album7 = Album7::find($id);
          $data = array(
              'Album7' => $Album7
          );
          return view('Album7/form',$data);
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
    $Album7 = $request->file('image');
    $filename = $Album7->getClientOriginalName();
    $Album7->move(public_path().'/img/upload', $Album7->getClientOriginalName());

    $Album7 = Album7::find($id);
    $Album7->image = $filename;
    $Album7->name = $request->name;




    $Album7->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album7');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album7 = Album7::find($id);
      $Album7->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album7');
    }
}
