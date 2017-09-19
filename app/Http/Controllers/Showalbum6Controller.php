<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album6;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum6Controller extends Controller
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
      $Album6 = Album6::all();
      $data = array(
        'Album6' => $Album6
      );
      return view('Album6.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Album6.form');
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
      $Album6 = $request->file('image');
      $filename = $Album6->getClientOriginalName();
      $Album6->move(public_path().'/img/upload', $Album6->getClientOriginalName());

      $Album6 = new Album6;
      $Album6->image = $filename;
      $Album6->name = $request->name;




      $Album6->save();

      return redirect('Album6');
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
          $Album6 = Album6::find($id);
          $data = array(
              'Album6' => $Album6
          );
          return view('Album6/form',$data);
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
    $Album6 = $request->file('image');
    $filename = $Album6->getClientOriginalName();
    $Album6->move(public_path().'/img/upload', $Album6->getClientOriginalName());

    $Album6 = Album6::find($id);
    $Album6->image = $filename;
    $Album6->name = $request->name;




    $Album6->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album6');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album6 = Album6::find($id);
      $Album6->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album6');
    }
}
