<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\product;
use App\Image;
use App\file;
use App\partner;
use Illuminate\Support\Facades\Input;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = product::all();
      $data = array(
        'product' => $product
    );
    return view('product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.from');
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

      $product = new product;
      $product->image = $filename;
        $product->title = $request->title;
      $product->description = $request->description;



      $product->save();

      return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $product = product::all();
      $partner = partner::all();
      $data = array(
        'product' => $product,
        'partner' => $partner
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
          $product = product::find($id);
          $data = array(
              'product' => $product
          );
          return view('product/from',$data);
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

    $product = product::find($id);
    $product->image = $filename;
    $product->title = $request->title;
    $product->description = $request->description;


    $product->save();

    Session::flash('message','Success update product!!');
    return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = product::find($id);
      $product->delete();
      Session::flash('message', 'Success Delete product!!');
      return redirect('product');

    }
}
