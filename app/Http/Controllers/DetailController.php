<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailJob;
use Session;
use Illuminate\Support\Facades\Input;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $detail = DetailJob::all();
      $data = array(
        'detail' => $detail
    );
    return view('Detail.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Detail.from');
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
          'title' => 'required|max:1000',
          'subheading' => 'required|max:1000',
          'detail' => 'required|max:1000',
          'subheading1' => 'required|max:1000',
          'detail1' => 'required|max:1000'




        //  'description' => 'required|max:100',
      ]);


      $detail = new DetailJob;
      $detail->title = $request->title;
      $detail->subheading = $request->subheading;
      $detail->detail = $request->detail;
      $detail->subheading1 = $request->subheading1;
      $detail->detail1 = $request->detail1;




      $detail->save();

      return redirect('DetailJob');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $detail = DetailJob::all()->whereIn('id', [1,2]);
      $data = array(
        'detail' => $detail
    );
        return view('Detail.showjobdetail', $data);
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
          $detail = DetailJob::find($id);
          $data = array(
              'detail' => $detail
          );
          return view('Detail.from',$data);
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
        'title' => 'required|max:1000',
        'subheading' => 'required|max:1000',
        'detail' => 'required|max:1000',
        'subheading1' => 'required|max:1000',
        'detail1' => 'required|max:1000'




    ]);


    $detail = DetailJob::find($id);
    $detail->title = $request->title;
    $detail->subheading = $request->subheading;
    $detail->detail = $request->detail;
    $detail->subheading1 = $request->subheading1;
    $detail->detail1 = $request->detail1;



    $detail->save();

    Session::flash('message','Success update detail!!');
    return redirect('DetailJob');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $detail = DetailJob::find($id);
      $detail->delete();
      Session::flash('message', 'Success Delete detail!!');
      return redirect('DetailJob');
    }
}
