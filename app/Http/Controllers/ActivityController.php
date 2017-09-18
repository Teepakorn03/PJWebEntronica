<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Activity = Activity::all();
      $data = array(
        'Activity' => $Activity
    );
    return view('Activity.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Activity.form');
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
          'name' => 'required|max:1000',
          'status' => 'required|max:1000'



        //  'description' => 'required|max:100',
      ]);
      $Activity = $request->file('image');
      $filename = $Activity->getClientOriginalName();
      $Activity->move(public_path().'/img/upload', $Activity->getClientOriginalName());

      $Activity = new Activity;
      $Activity->image = $filename;
      $Activity->name = $request->name;
      $Activity->status = $request->status;



      $Activity->save();

      return redirect('Activity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $Activity = Activity::all();
      $data = array(
        'partner' => $Activity
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
          $Activity = Activity::find($id);
          $data = array(
              'Activity' => $Activity
          );
          return view('Activity/form',$data);
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
        'name' => 'required|max:1000',
        'status' => 'required|max:1000'




    ]);
    $Activity = $request->file('image');
    $filename = $Activity->getClientOriginalName();
    $Activity->move(public_path().'/img/upload', $Activity->getClientOriginalName());

    $Activity = Activity::find($id);
    $Activity->image = $filename;
    $Activity->name = $request->name;
    $Activity->status = $request->status;



    $Activity->save();

    Session::flash('message','Success update Activity!!');
    return redirect('Activity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Activity = Activity::find($id);
      $Activity->delete();
      Session::flash('message', 'Success Delete Activity!!');
      return redirect('Activity');
    }
}
