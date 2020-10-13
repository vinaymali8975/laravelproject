<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class data extends Controller
{
   public function index()
   {
    $cars = DB::select('select * from cars');

    return view('normal',['cars'=>$cars]);
   } 
}
