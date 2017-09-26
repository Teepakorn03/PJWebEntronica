<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\partnerTh;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
class PartnerThController extends Controller
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
      $partner = partnerTh::all();
      $data = array(
        'partner' => $partner
    );
    return view('partnerTh.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('partnerTh.form');
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

      $partner = new partnerTh;
      $partner->image = $filename;
      $partner->title = $request->title;
      $partner->Facebook = $request->Facebook;
      $partner->Twitter = $request->Twitter;



      $partner->save();

      return redirect('partnerTh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $partner = partnerTh::all();
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
          $partner = partnerTh::find($id);
          $data = array(
              'partner' => $partner
          );
          return view('partnerTh/form',$data);
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

    $partner = partnerTh::find($id);
    $partner->image = $filename;
    $partner->title = $request->title;
    $partner->Facebook = $request->Facebook;
    $partner->Twitter = $request->Twitter;


    $partner->save();

    Session::flash('message','Success update partner!!');
    return redirect('partnerTh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $partner = partnerTh::find($id);
      $partner->delete();
      Session::flash('message', 'Success Delete partner!!');
      return redirect('partnerTh');
    }
}
