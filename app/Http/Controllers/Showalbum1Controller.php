<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album1;
use App\Image;
use App\file;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
class Showalbum1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Album = Album1::all();
      $data = array(
        'Album' => $Album
      );
      return view('Album1.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Album1.form');
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
      $Album = $request->file('image');
      $filename = $Album->getClientOriginalName();
      $Album->move(public_path().'/img/upload', $Album->getClientOriginalName());

      $Album = new Album1;
      $Album->image = $filename;
      $Album->name = $request->name;




      $Album->save();

      return redirect('Album1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Album = Album1::all();
      $data = array(
        'Album' => $Album
      );
      return view('Album1.showalbum', $data);
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
          $Album = Album1::find($id);
          $data = array(
              'Album' => $Album
          );
          return view('Album1/form',$data);
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
    $Album = $request->file('image');
    $filename = $Album->getClientOriginalName();
    $Album->move(public_path().'/img/upload', $Album->getClientOriginalName());

    $Album = Album1::find($id);
    $Album->image = $filename;
    $Album->name = $request->name;




    $Album->save();

    Session::flash('message','Success update Album!!');
    return redirect('Album1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Album = Album1::find($id);
      $Album->delete();
      Session::flash('message', 'Success Delete Album!!');
      return redirect('Album1');
    }
}
