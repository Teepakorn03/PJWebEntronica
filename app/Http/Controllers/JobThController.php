<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobTh;;
use App\Image;
use App\file;
use Illuminate\Support\Facades\Input;
use Session;
class JobThController extends Controller
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

      $jobapp = JobTh::all();
      $data = array(

        'jobapp' => $jobapp
    );
        return view('JobTh.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('JobTh.form');
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

      $jobapp = new JobTh;
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
          $jobapp = JobTh::find($id);
          $data = array(
              'jobapp' => $jobapp
          );
          return view('JobTh/form',$data);
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

      $jobapp = JobTh::find($id);
      $jobapp->position = $request->position;
      $jobapp->name = $request->name;
      $jobapp->lastname = $request->lastname;
      $jobapp->gender = $request->gender;
      $jobapp->age = $request->age;
      $jobapp->email = $request->email;
      $jobapp->telephone = $request->telephone;
      $jobapp->resume = $filename;





      $jobapp->save();

      return redirect('JobTh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $jobapp = JobTh::find($id);
      $jobapp->delete();
      Session::flash('message', 'Success Delete JobTh!!');
      return redirect('JobTh');
    }

    public function downfunc()
    {
      $downloads = DB::table('jobth')->gtt();
      return view('JobTh.index',compact('downloads'));
    }
}
