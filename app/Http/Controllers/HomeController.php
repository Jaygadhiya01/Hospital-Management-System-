<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\user;
use App\Models\doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function redirect()
    {

           if(Auth()->users()->role=='admin')
            {
                return view('admin');
            }
            else if(Auth()->user()->role=='user')
            {

               $data = doctor::all(); 
               return view('/home',['doctors' => $data]);
            }
    }

    public function index()
    {
         $doc = doctor::all(); 
       return view('/home',['doct' => $doc]);
    }

    public function appointment(Request $req)
    {
        $data = new appointment;

        $data->name=$req->name;
        $data->email=$req->email;
        $data->date=$req->data;
        $data->doctor=$req->doctor;
        $data->phone=$req->phone;
        $data->message=$req->message;
        $data->status='In progress';

        if(Auth::id())
        {
        $data->user_name=Auth::user()->name;
        }

        $data->save();


        return redirect()->back()->with('message','Appointment Request successful .we will contact with  you soon');

    }

}
    