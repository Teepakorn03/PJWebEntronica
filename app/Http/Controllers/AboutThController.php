<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Image;
use App\file;

use App\AboutTh;
use Illuminate\Support\Facades\Input;
class AboutThController extends Controller
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
      $about = AboutTh::all();
      $data = array(
        'about' => $about
    );
    return view('AboutTh.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('AboutTh.form');
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
          'description' => 'required|max:1000'



        //  'description' => 'required|max:100',
      ]);
      $about = $request->file('image');
      $filename = $about->getClientOriginalName();
      $about->move(public_path().'/img/upload', $about->getClientOriginalName());

      $about = new AboutTh;
      $about->image = $filename;
      $about->title = $request->title;
      $about->description = $request->description;




      $about->save();

      return redirect('AboutTh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $about = AboutTh::all();
      $data = array(

        'about' => $about
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
          $about = AboutTh::find($id);
          $data = array(
              'about' => $about
          );
          return view('AboutTh/form',$data);
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
        'title' => 'required|max:10000',
        'description' => 'required|max:1000'




    ]);
    $about = $request->file('image');
    $filename = $about->getClientOriginalName();
    $about->move(public_path().'/img/upload', $about->getClientOriginalName());

    $about = AboutTh::find($id);
    $about->image = $filename;
    $about->title = $request->title;
    $about->description = $request->description;


    $about->save();

    Session::flash('message','Success update about!!');
    return redirect('AboutTh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $about = AboutTh::find($id);
      $about->delete();
      Session::flash('message', 'Success Delete about!!');
      return redirect('AboutTh');
    }
}
