<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Jobapp;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
class JobappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobapp = jobapp::all();
      $data = array(
        'jobapp' => $jobapp
    );
    return view('job.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.form');
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
          'brithday' => 'required|max:1000',
          'nationality' => 'required|max:1000',
          'address' => 'required|max:1000',
          'email' => 'required|max:1000',
          'telephone' => 'required|numeric',
          'currentposition' => 'required|max:1000',
          'education' => 'required|max:1000',
          'experience' => 'required|numeric',
          'expectedsalary' => 'required|numeric',
          'resume' => 'required|max:1000'

        //  'description' => 'required|max:100',
      ]);
      $jobapp = $request->file('resume');
      $filename = $jobapp->getClientOriginalName();
      $jobapp->move(public_path().'/img/upload', $jobapp->getClientOriginalName());

      $jobapp = new jobapp;
      $jobapp->position = $request->position;
      $jobapp->name = $request->name;
      $jobapp->lastname = $request->lastname;
      $jobapp->gender = $request->gender;
      $jobapp->age = $request->age;
      $jobapp->brithday = $request->brithday;
      $jobapp->nationality = $request->nationality;
      $jobapp->address = $request->address;
      $jobapp->email = $request->email;
      $jobapp->telephone = $request->telephone;
      $jobapp->currentposition = $request->currentposition;
      $jobapp->education = $request->education;
      $jobapp->experience = $request->experience;
      $jobapp->expectedsalary = $request->expectedsalary;
      $jobapp->resume = $filename;





      $jobapp->save();

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
      $jobapp = jobapp::all();
      $data = array(
        'jobapp' => $jobapp
    );
    return view('job.index',$data);
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
          'age' => 'required|numeric',
          'brithday' => 'required|max:1000',
          'nationality' => 'required|max:1000',
          'address' => 'required|max:1000',
          'email' => 'required|max:1000',
          'telephone' => 'required|numeric',
          'currentposition' => 'required|max:1000',
          'education' => 'required|max:1000',
          'experience' => 'required|numeric',
          'expectedsalary' => 'required|numeric',
          'resume' => 'required|max:1000'

        //  'description' => 'required|max:100',
      ]);
      $jobapp = $request->file('resume');
      $filename = $jobapp->getClientOriginalName();
      $jobapp->move(public_path().'/img/upload', $jobapp->getClientOriginalName());

      $jobapp = jobapp::find($id);
      $jobapp->position = $request->position;
      $jobapp->name = $request->name;
      $jobapp->lastname = $request->lastname;
      $jobapp->gender = $request->gender;
      $jobapp->age = $request->age;
      $jobapp->brithday = $request->brithday;
      $jobapp->nationality = $request->nationality;
      $jobapp->address = $request->address;
      $jobapp->email = $request->email;
      $jobapp->telephone = $request->telephone;
      $jobapp->currentposition = $request->currentposition;
      $jobapp->education = $request->education;
      $jobapp->experience = $request->experience;
      $jobapp->expectedsalary = $request->expectedsalary;
      $jobapp->resume = $filename;





      $jobapp->save();

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
      $jobapp = jobapp::find($id);
      $jobapp->delete();
      Session::flash('message', 'Success Delete jobapp!!');
      return redirect('jobapp');
    }
}
