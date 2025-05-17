<?php

namespace App\Http\Controllers;

use App\Models\Appointmentmodel;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
     public function index()
    {
        $appointments = Appointment::all();
        return view('test', compact('appointments'));
    }
    public function store(Request $req)
    {}

        Appointment::create($req->all());

        return redirect()->route('appointmentsindex')->with('success', 'Appointment created successfully.');
    }

}
    