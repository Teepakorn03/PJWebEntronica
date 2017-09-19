<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album3;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum3Controller extends Controller
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
      $Album3 = Album3::all();
      $data = array(
        'Album3' => $Album3
      );
      return view('Album3.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('Album3.form');
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
      $Album3 = $request->file('image');
      $filename = $Album3->getClientOriginalName();
      $Album3->move(public_path().'/img/upload', $Album3->getClientOriginalName());

      $Album3 = new Album3;
      $Album3->image = $filename;
      $Album3->name = $request->name;




      $Album3->save();

      return redirect('Album3');
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
          $Album3 = Album3::find($id);
          $data = array(
              'Album3' => $Album3
          );
          return view('Album3/form',$data);
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
    $Album3 = $request->file('image');
    $filename = $Album3->getClientOriginalName();
    $Album3->move(public_path().'/img/upload', $Album3->getClientOriginalName());

    $Album3 = Album3::find($id);
    $Album3->image = $filename;
    $Album3->name = $request->name;




    $Album3->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album3');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album3 = Album3::find($id);
      $Album3->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album3');
    }
}
