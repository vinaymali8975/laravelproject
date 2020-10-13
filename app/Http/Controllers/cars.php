<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\car;
class cars extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make ($data,[
            'manufacture' => ['required', 'string'],
            'name' => ['required', 'string'],
            'model' => ['required', 'string'],
            'manufacturing_year' => ['required', 'unsignedBigInteger'],
            'seating_capacity' => ['required', 'unsignedBigInteger'],
        ]);
    }
    




    protected function save(Request $req)
    {
         $car=new Car;
         $car->manufacture=$req->manufacture;
         $car->name=$req->name;
         $car->model=$req->model;
         $car->manufacturing_year=$req ->manufacturing_year;
         $car->seating_capacity=$req->seating_capacity;
         echo $car->save();
         //print_r($req->input());
    }

}