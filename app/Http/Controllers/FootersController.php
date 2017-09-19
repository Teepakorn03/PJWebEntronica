<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footers;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;

class FootersController extends Controller
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
      $Footers = Footers::all();
      $data = array(
        'Footers' => $Footers
    );
    return view('Footers.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Footers.form');
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
          'title' => 'required|max:1000',
          'description' => 'required|max:1000',
          'Facebook' => 'required|max:1000',
          'Twitter' => 'required|max:1000'


        //  'description' => 'required|max:100',
      ]);


      $Footers = new Footers;
      $Footers->title = $request->title;
      $Footers->description = $request->description;
      $Footers->Facebook = $request->Facebook;
      $Footers->Twitter = $request->Twitter;



      $Footers->save();

      return redirect('Footers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Footers = Footers::all();
      $data = array(
        'Footers' => $Footers
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
          $Footers = Footers::find($id);
          $data = array(
              'Footers' => $Footers
          );
          return view('Footers/form',$data);
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
        'title' => 'required|max:1000',
        'description' => 'required|max:1000',
        'Facebook' => 'required|max:1000',
        'Twitter' => 'required|max:1000'




    ]);
    $Footers = Footers::find($id);
    $Footers->title = $request->title;
    $Footers->description = $request->description;
    $Footers->Facebook = $request->Facebook;
    $Footers->Twitter = $request->Twitter;



    $Footers->save();

    Session::flash('message','Success update Footers!!');
    return redirect('Footers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Footers = Footers::find($id);
      $Footers->delete();
      Session::flash('message', 'Success Delete Footers!!');
      return redirect('Footers');
    }
}
