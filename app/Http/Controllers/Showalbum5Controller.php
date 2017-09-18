<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album5;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Album5 = Album5::all();
      $data = array(
        'Album5' => $Album5
      );
      return view('Album5.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('Album5.form');
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
      $Album5 = $request->file('image');
      $filename = $Album5->getClientOriginalName();
      $Album5->move(public_path().'/img/upload', $Album5->getClientOriginalName());

      $Album5 = new Album5;
      $Album5->image = $filename;
      $Album5->name = $request->name;




      $Album5->save();

      return redirect('Album5');
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
          $Album5 = Album5::find($id);
          $data = array(
              'Album5' => $Album5
          );
          return view('Album5/form',$data);
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
    $Album5 = $request->file('image');
    $filename = $Album5->getClientOriginalName();
    $Album5->move(public_path().'/img/upload', $Album5->getClientOriginalName());

    $Album5 = Album5::find($id);
    $Album5->image = $filename;
    $Album5->name = $request->name;




    $Album5->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album5');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album5 = Album5::find($id);
      $Album5->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album5');
    }
}
