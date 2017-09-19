<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;
use Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entronica/upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show()
     {
         $image = image::all();

         return view('entronica/display', ['image' => $image]);


     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show1()
     {
         $image = image::all();

         return view('lib/show', ['image' => $image]);


     }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $image = image::find($id);
      $image->delete();
      Session::flash('message', 'Success Delete image!!');
      return redirect('image');
    }
    public function upload(Request $request)
    {


        $image = $request->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path().'/img/upload', $image->getClientOriginalName());
      /*  Storage::put('upload/images/'.$filename,file_get_contents($request->file('image')->getRealPath()));*/

        $image = new image;
        $image->name = $request->name;
        $image->image = $filename;
        $image->save();
        return redirect('display');
    }
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
  }
