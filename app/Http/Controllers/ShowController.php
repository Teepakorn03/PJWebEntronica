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
use App\Album1;
use App\Album2;
use App\Album3;
use App\Album4;
use App\Album5;
use App\Album6;
use App\Album7;
use App\Album8;

use Illuminate\Support\Facades\Input;
use Session;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $product = product::all();
      $partner = partner::all();
      $Activity = Activity::all()->where('id',1);
      $Album1 = Album1::all()->where('id',1);
      $Album2 = Album2::all()->where('id',1);
      $Album3 = Album3::all()->where('id',1);
      $Album4 = Album4::all()->where('id',1);
      $Album5 = Album5::all()->where('id',1);
      $Album6 = Album6::all()->where('id',1);
      $Album7 = Album7::all()->where('id',1);
      $Album8 = Album8::all()->where('id',1);
      $about = about::all();
      $Home = Home::all()->where('id',1);
      $Footers = Footers::all()->whereIn('id', [1, 2]);
      $Footers1 = Footers::all()->where('id',3);
      $Footers2 = Footers::all()->where('id',4);
      $about = about::all();
      $data = array(
        'product' => $product,
        'partner' => $partner,
        'about' => $about,
        'Activity' => $Activity,
        'Album1' => $Album1,
        'Album2' => $Album2,
        'Album3' => $Album3,
        'Album4' => $Album4,
        'Album5' => $Album5,
        'Album6' => $Album6,
        'Album7' => $Album7,
        'Album8' => $Album8,
        'Home' => $Home,
        'Footers' => $Footers,
        'Footers1' => $Footers1,
        'Footers2' => $Footers2,
        'about' => $about
    );
        return view('show', $data);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
