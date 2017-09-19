<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album2;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum2Controller extends Controller
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
      $Album2 = Album2::all();
      $data = array(
        'Album2' => $Album2
      );
      return view('Album2.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Album2.form');
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
      $Album2 = $request->file('image');
      $filename = $Album2->getClientOriginalName();
      $Album2->move(public_path().'/img/upload', $Album2->getClientOriginalName());

      $Album2 = new Album2;
      $Album2->image = $filename;
      $Album2->name = $request->name;




      $Album2->save();

      return redirect('Album2');
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
          $Album2 = Album2::find($id);
          $data = array(
              'Album2' => $Album2
          );
          return view('Album2/form',$data);
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
    $Album2 = $request->file('image');
    $filename = $Album2->getClientOriginalName();
    $Album2->move(public_path().'/img/upload', $Album2->getClientOriginalName());

    $Album2 = Album2::find($id);
    $Album2->image = $filename;
    $Album2->name = $request->name;




    $Album2->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album2 = Album2::find($id);
      $Album2->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album2');
    }
}
