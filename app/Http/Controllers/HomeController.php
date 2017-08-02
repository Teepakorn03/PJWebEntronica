<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $product= product::all();
      $data = array(
        'product' => $product
    );
    return view('product.index',$data);


    }
}
