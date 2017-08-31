<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\partner;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $partner = partner::all();
      $data = array(
        'partner' => $partner
    );
    return view('partner.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.form');
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
          'image' => 'required|max:1000',
          'title' => 'required|max:1000',
          'Facebook' => 'required|max:1000',
          'Twitter' => 'required|max:1000'



        //  'description' => 'required|max:100',
      ]);
      $partner = $request->file('image');
      $filename = $partner->getClientOriginalName();
      $partner->move(public_path().'/img/upload', $partner->getClientOriginalName());

      $partner = new partner;
      $partner->image = $filename;
      $partner->title = $request->title;
      $partner->Facebook = $request->Facebook;
      $partner->Twitter = $request->Twitter;



      $partner->save();

      return redirect('partner');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $partner = partner::all();
      $data = array(
        'partner' => $partner
    );
        return view('show', $partner);
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
          $partner = partner::find($id);
          $data = array(
              'partner' => $partner
          );
          return view('partner/form',$data);
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
        'image' => 'required|max:1000',
        'title' => 'required|max:1000',
        'Facebook' => 'required|max:1000',
        'Twitter' => 'required|max:1000'



    ]);
    $partner = $request->file('image');
    $filename = $partner->getClientOriginalName();
    $partner->move(public_path().'/img/upload', $partner->getClientOriginalName());

    $partner = partner::find($id);
    $partner->image = $filename;
    $partner->title = $request->title;
    $partner->Facebook = $request->Facebook;
    $partner->Twitter = $request->Twitter;


    $partner->save();

    Session::flash('message','Success update partner!!');
    return redirect('partner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $partner = partner::find($id);
      $partner->delete();
      Session::flash('message', 'Success Delete partner!!');
      return redirect('partner');
    }
}
