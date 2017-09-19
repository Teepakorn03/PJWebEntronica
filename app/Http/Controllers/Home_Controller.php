<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;

class Home_Controller extends Controller
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
      $Home = Home::all();
      $data = array(
        'Home' => $Home
    );
    return view('Home.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.form');
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
          'image' => 'required|max:10000',
          'title' => 'required|max:1000'



        //  'description' => 'required|max:100',
      ]);
      $Home = $request->file('image');
      $filename = $Home->getClientOriginalName();
      $Home->move(public_path().'/img/upload', $Home->getClientOriginalName());

      $Home = new Home;
      $Home->image = $filename;
      $Home->title = $request->title;



      $Home->save();

      return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Home = Home::all();
      $data = array(
        'Home' => $Home
    );
        return view('show', $data);
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
          $Home = Home::find($id);
          $data = array(
              'Home' => $Home
          );
          return view('Home/form',$data);
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
        'image' => 'required|max:10000',
        'title' => 'required|max:1000'




    ]);
    $Home = $request->file('image');
    $filename = $Home->getClientOriginalName();
    $Home->move(public_path().'/img/upload', $Home->getClientOriginalName());

    $Home = Home::find($id);
    $Home->image = $filename;
    $Home->title = $request->title;



    $Home->save();

    Session::flash('message','Success update Home!!');
    return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Home = Home::find($id);
      $Home->delete();
      Session::flash('message', 'Success Delete Home!!');
      return redirect('home');
    }
}
