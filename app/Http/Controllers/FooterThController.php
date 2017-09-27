<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterTh;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;
class FooterThController extends Controller
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
      $Footers = FooterTh::all();
      $data = array(
        'Footers' => $Footers
    );
    return view('FootersTh.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('FootersTh.form');
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


      $Footers = new FooterTh;
      $Footers->title = $request->title;
      $Footers->description = $request->description;
      $Footers->Facebook = $request->Facebook;
      $Footers->Twitter = $request->Twitter;



      $Footers->save();

      return redirect('FootersTh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Footers = FooterTh::all();
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
          $Footers = FooterTh::find($id);
          $data = array(
              'Footers' => $Footers
          );
          return view('FootersTh/form',$data);
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
    $Footers = FooterTh::find($id);
    $Footers->title = $request->title;
    $Footers->description = $request->description;
    $Footers->Facebook = $request->Facebook;
    $Footers->Twitter = $request->Twitter;



    $Footers->save();

    Session::flash('message','Success update Footers!!');
    return redirect('FootersTh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Footers = FooterTh::find($id);
      $Footers->delete();
      Session::flash('message', 'Success Delete Footers!!');
      return redirect('FootersTh');
    }
}
