<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Body;

class CarController extends Controller
{
    //
    public function index(){
        $car = Manufacturer::find(2);

        $mark = Body::find(1);
        dump($mark);
      
        return view('cars');
    }
}
