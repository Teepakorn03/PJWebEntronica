<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailTh;
use Session;
use Illuminate\Support\Facades\Input;
class DetailThController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $detail = DetailTh::all();
      $data = array(
        'detail' => $detail
    );
    return view('Detailth.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('Detailth.from');
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
          'No1' => 'required|max:1000',
          'No2' => 'required|max:1000',
          'No3' => 'required|max:1000',
          'No4' => 'required|max:1000',

          'subheading1' => 'required|max:1000',
          'detail1' => 'required|max:1000',
          'No8' => 'required|max:1000',
          'No9' => 'required|max:1000',
          'No9' => 'required|max:1000',
          'No10' => 'required|max:1000'





        //  'description' => 'required|max:100',
      ]);


      $detail = new DetailTh;
      $detail->title = $request->title;
      $detail->subheading = $request->subheading;
      $detail->detail = $request->detail;
      $detail->No1 = $request->No1;
      $detail->No2 = $request->No2;
      $detail->No3 = $request->No3;
      $detail->No4 = $request->No4;

      $detail->subheading1 = $request->subheading1;
      $detail->detail1 = $request->detail1;
      $detail->No8 = $request->No8;
      $detail->No9 = $request->No9;
      $detail->No10 = $request->No10;
      $detail->No11 = $request->No11;






      $detail->save();

      return redirect('DetailJobTh');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $detail = DetailTh::all()->whereIn('id', [1,2]);
      $data = array(
        'detail' => $detail
    );
        return view('Detailth.showjobdetail', $data);
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
          $detail = DetailTh::find($id);
          $data = array(
              'detail' => $detail
          );
          return view('Detailth.from',$data);
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
        'No1' => 'required|max:1000',
        'No2' => 'required|max:1000',
        'No3' => 'required|max:1000',
        'No4' => 'required|max:1000',

        'subheading1' => 'required|max:1000',
        'detail1' => 'required|max:1000',
        'No8' => 'required|max:1000',
        'No9' => 'required|max:1000',
        'No9' => 'required|max:1000',
        'No10' => 'required|max:1000'




    ]);


    $detail = DetailTh::find($id);
    $detail->title = $request->title;
    $detail->subheading = $request->subheading;
    $detail->detail = $request->detail;
    $detail->No1 = $request->No1;
    $detail->No2 = $request->No2;
    $detail->No3 = $request->No3;
    $detail->No4 = $request->No4;

    $detail->subheading1 = $request->subheading1;
    $detail->detail1 = $request->detail1;
    $detail->No8 = $request->No8;
    $detail->No9 = $request->No9;
    $detail->No10 = $request->No10;
    $detail->No11 = $request->No11;




    $detail->save();

    Session::flash('message','Success update detail!!');
    return redirect('DetailJobTh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $detail = DetailTh::find($id);
      $detail->delete();
      Session::flash('message', 'Success Delete detail!!');
      return redirect('DetailJobTh');
    }
}
