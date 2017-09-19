<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album4;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum4Controller extends Controller
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
      $Album4 = Album4::all();
      $data = array(
        'Album4' => $Album4
      );
      return view('Album4.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Album4.form');
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
      $Album4 = $request->file('image');
      $filename = $Album4->getClientOriginalName();
      $Album4->move(public_path().'/img/upload', $Album4->getClientOriginalName());

      $Album4 = new Album4;
      $Album4->image = $filename;
      $Album4->name = $request->name;




      $Album4->save();

      return redirect('Album4');
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
          $Album4 = Album4::find($id);
          $data = array(
              'Album4' => $Album4
          );
          return view('Album4/form',$data);
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
    $Album4 = $request->file('image');
    $filename = $Album4->getClientOriginalName();
    $Album4->move(public_path().'/img/upload', $Album4->getClientOriginalName());

    $Album4 = Album4::find($id);
    $Album4->image = $filename;
    $Album4->name = $request->name;




    $Album4->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album4');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album4 = Album4::find($id);
      $Album4->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album4');
    }
}
