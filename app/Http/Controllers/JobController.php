<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobapp;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use DB;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Job.form0');
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

      return redirect('/');
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
      //
    }
}
