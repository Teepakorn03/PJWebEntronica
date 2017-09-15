<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\show;
use App\partner;
use App\product;
use App\about;
use App\Jobapp;
use App\Activity;
use App\Home;
use App\Footers;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;
use DB;
class JobappController extends Controller
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
      $Activity = Activity::all();
      $about = about::all();
      $Home = Home::all()->where('id',2);
      $Footers = Footers::all();
      $about = about::all();
      $jobapp = Jobapp::all();
      $data = array(
        'product' => $product,
        'partner' => $partner,
        'about' => $about,
        'Activity' => $Activity,
        'Home' => $Home,
        'Footers' => $Footers,
        'about' => $about,
        'jobapp' => $jobapp
    );
        return view('Job.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Job.form');
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
        'position' => 'required|max:1000',
        'name' => 'required|max:1000',
        'lastname' => 'required|max:1000',
        'gender' => 'required|max:1000',
        'age' => 'required|numeric',
        'email' => 'required|max:1000',
        'telephone' => 'required|numeric',
        'resume' => 'required|max:1000'

        //  'description' => 'required|max:100',
      ]);
      $jobapp = $request->file('resume');
      $filename = $jobapp->getClientOriginalName();
      $jobapp->move(public_path().'/Job', $jobapp->getClientOriginalName());

      $jobapp = new Jobapp;
      $jobapp->position = $request->position;
      $jobapp->name = $request->name;
      $jobapp->lastname = $request->lastname;
      $jobapp->gender = $request->gender;
      $jobapp->age = $request->age;
      $jobapp->email = $request->email;
      $jobapp->telephone = $request->telephone;
      $jobapp->resume = $filename;




      $jobapp->save();

      return redirect('jobapp');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      if($id !== '') {
          $jobapp = Jobapp::find($id);
          $data = array(
              'jobapp' => $jobapp
          );
          return view('Job/form',$data);
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
          'position' => 'required|max:1000',
          'name' => 'required|max:1000',
          'lastname' => 'required|max:1000',
          'gender' => 'required|max:1000',
          'age' => 'required|numeric',
          'email' => 'required|max:1000',
          'telephone' => 'required|numeric',
          'resume' => 'required|max:1000'

        //  'description' => 'required|max:100',
      ]);
      $jobapp = $request->file('resume');
      $filename = $jobapp->getClientOriginalName();
      $jobapp->move(public_path().'/Job', $jobapp->getClientOriginalName());

      $jobapp = Jobapp::find($id);
      $jobapp->position = $request->position;
      $jobapp->name = $request->name;
      $jobapp->lastname = $request->lastname;
      $jobapp->gender = $request->gender;
      $jobapp->age = $request->age;
      $jobapp->email = $request->email;
      $jobapp->telephone = $request->telephone;
      $jobapp->resume = $filename;





      $jobapp->save();

      return redirect('jobapp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $jobapp = Jobapp::find($id);
      $jobapp->delete();
      Session::flash('message', 'Success Delete jobapp!!');
      return redirect('jobapp');
    }
    public function downfunc()
    {
      $downloads = DB::table('jobapps')->gtt();
      return view('Job.index',compact('downloads'));
    }
}
