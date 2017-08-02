<?php

namespace App\Http\Controllers\Information;

 use DB;
 use App\Http\Controllers\Controller;

 /**
  *
  */
 class DataController extends Controller
 {

  // function __construct(argument)
  // {
     # code...
  // }

public function index()
{
//return 'Hello From DataController';
//$index = DB::table('blog_tbl')->get();
$index = DB::select('select * from blog_tbl where deleted = ?', [0]);
//$index = DB::select('insert into blog_tbl(title, blog_th) values (?, ?)', ['green day', 'information']);

dd($index);

  return view('dataa/index');
}


//public function view()
//{
//return 'Hello From DataController View Method';
//}
}
