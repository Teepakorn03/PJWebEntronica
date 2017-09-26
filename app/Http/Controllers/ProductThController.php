<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\productth;
use App\Image;
use App\file;


class ProductThController extends Controller
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
      $product = productth::all();
      $data = array(
        'product' => $product
    );
    return view('productth.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productth.from');
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
      $product = $request->file('image');
      $filename = $product->getClientOriginalName();
      $product->move(public_path().'/img/upload', $product->getClientOriginalName());

      $product = new productth;
      $product->image = $filename;
        $product->title = $request->title;
      $product->description = $request->description;



      $product->save();

      return redirect('productth');
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
          $product = productth::find($id);
          $data = array(
              'product' => $product
          );
          return view('productth/from',$data);
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
        'description' => 'required|max:1000'



    ]);
    $product = $request->file('image');
    $filename = $product->getClientOriginalName();
    $product->move(public_path().'/img/upload', $product->getClientOriginalName());

    $product = productth::find($id);
    $product->image = $filename;
    $product->title = $request->title;
    $product->description = $request->description;


    $product->save();

    Session::flash('message','Success update product!!');
    return redirect('productth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = productth::find($id);
      $product->delete();
      Session::flash('message', 'Success Delete product!!');
      return redirect('productth');
    }
}
