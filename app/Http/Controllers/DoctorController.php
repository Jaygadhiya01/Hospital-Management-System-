<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;

class DoctorController extends Controller
{
    //
     public function doc()
    {
      $data = doctor::all(); 
      //return $data;
         // return view('search_doctor', compact('doctors'));
       return view('search_doctor',['doctors' => $data]);
    }
}
