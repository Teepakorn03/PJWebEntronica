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
      $Activity = Activity::all();
      $about = about::all();
      $Home = Home::all()->where('id',1);
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
      $this->validate($request, [
          'position' => 'required|max:1000',
          'name' => 'required|max:1000',
          'lastname' => 'required|max:1000',
          'gender' => 'required|max:1000',
          'age' => 'required|max:1000',
          'brithday' => 'required|max:1000',
          'nationality' => 'required|max:1000',
          'address' => 'required|max:1000',
          'email' => 'required|max:1000',
          'telephone' => 'required|max:1000',
          'currentposition' => 'required|max:1000',
          'education' => 'required|max:1000',
          'experience' => 'required|max:1000',
          'expectedsalary' => 'required|max:1000',
          'resume' => 'required|max:1000'

        //  'description' => 'required|max:100',
      ]);
      $jobapps = $request->file('resume');
      $filename = $jobapps->getClientOriginalName();
      $jobapps->move(public_path().'/img/upload', $jobapps->getClientOriginalName());

      $jobapps = new jobapps;
      $jobapps->position = $request->position;
      $jobapps->name = $request->name;
      $jobapps->lastname = $request->lastname;
      $jobapps->gender = $request->gender;
      $jobapps->age = $request->age;
      $jobapps->brithday = $request->brithday;
      $jobapps->nationality = $request->nationality;
      $jobapps->address = $request->address;
      $jobapps->email = $request->email;
      $jobapps->telephone = $request->telephone;
      $jobapps->currentposition = $request->currentposition;
      $jobapps->education = $request->education;
      $jobapps->experience = $request->experience;
      $jobapps->expectedsalary = $request->expectedsalary;
      $jobapps->resume = $filename;





      $jobapps->save();

      return redirect('jobapps');
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
      $this->validate($request, [
          'position' => 'required|max:1000',
          'name' => 'required|max:1000',
          'lastname' => 'required|max:1000',
          'gender' => 'required|max:1000',
          'age' => 'required|max:1000',
          'brithday' => 'required|max:1000',
          'nationality' => 'required|max:1000',
          'address' => 'required|max:1000',
          'email' => 'required|max:1000',
          'telephone' => 'required|max:1000',
          'currentposition' => 'required|max:1000',
          'education' => 'required|max:1000',
          'experience' => 'required|max:1000',
          'expectedsalary' => 'required|max:1000',
          'resume' => 'required|max:1000'

        //  'description' => 'required|max:100',
      ]);
      $jobapps = $request->file('resume');
      $filename = $jobapps->getClientOriginalName();
      $jobapps->move(public_path().'/img/upload', $jobapps->getClientOriginalName());

      $jobapps = jobapps::find($id);
      $jobapps->position = $request->position;
      $jobapps->name = $request->name;
      $jobapps->lastname = $request->lastname;
      $jobapps->gender = $request->gender;
      $jobapps->age = $request->age;
      $jobapps->brithday = $request->brithday;
      $jobapps->nationality = $request->nationality;
      $jobapps->address = $request->address;
      $jobapps->email = $request->email;
      $jobapps->telephone = $request->telephone;
      $jobapps->currentposition = $request->currentposition;
      $jobapps->education = $request->education;
      $jobapps->experience = $request->experience;
      $jobapps->expectedsalary = $request->expectedsalary;
      $jobapps->resume = $filename;





      $jobapps->save();

      return redirect('jobapps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $jobapps = jobapps::find($id);
      $jobapps->delete();
      Session::flash('message', 'Success Delete jobapps!!');
      return redirect('jobapps');
    }
}
