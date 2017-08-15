<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\show;
use App\partner;
use App\product;
use App\about;
use App\jobapps;
use App\Activity;
use App\Home;
use App\Footers;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;
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
      $product = product::all();
      $partner = partner::all();
      $Activity = Activity::all();
      $about = about::all();
      $Home = Home::all()->where('id',2);
      $Footers = Footers::all();
      $about = about::all();
      $data = array(
        'product' => $product,
        'partner' => $partner,
        'about' => $about,
        'Activity' => $Activity,
        'Home' => $Home,
        'Footers' => $Footers,
        'about' => $about
    );
        return view('show', $data);


    }
}
