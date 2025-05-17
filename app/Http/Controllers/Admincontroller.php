<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\Appointment;

class Admincontroller extends Controller
{
    //

    public function upload(Request $req)
{
    $imagename = $req->file('image')->getClientOriginalExtension();
    $destinationPath = 'doctorimage';
    $req->file('image')->move(public_path($destinationPath),$imagename);

    $doctor = new doctor;
    $doctor->name = $req->name;
    $doctor->phone = $req->number;
    $doctor->Speciality = $req->Speciality;
    $doctor->image = $imagename; // Use $imagename instead of $image

    $id = $doctor->save();

    if ($id > 0) {
        return redirect('search_doctor');
    } else {
        return redirect()->back()->with('failure', 'Failed to add doctor');
    }
}

    public function search()
    {
        $data=Doctor::find($id); 
       return view('search_doctor',['doctors' => $data]);
            
    }

    public function showdoctor()
    {
         $dta = doctor::all(); 
       return view('/showdoctor',['dot' => $dta]);
    }
    public function appoint()
    {
        $ap= appointment::all();
        return view('/appointmentscreate',['app'=>$ap]);
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);

        $data->delete();

        return redirect()->back()->with('message','doctor delete successfuly');
    }

    public function updatedoctor($id)
    {
         $data=doctor::find($id);
        return view('update_doctor',compact('data'));
    }

    public function editdoctor(Request $req,$id)
    {
        $doctor=doctor::find($id);

        $doctor->name=$req->name;
        $doctor->phone=$req->phone;
        $doctor->Speciality=$req->Speciality;
        $doctor->name=$req->name;

            $image=$req->file;

            if($image)
            {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $req->file->move('doctorimage',$imagename);

            $doctor->image=$imagename;
            } 

            $doctor->save();

            return redirect()->back()->with('message','doctor details update successfuly');
    }

    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back()->with('message','Appointment approved successfuly');
    }

      public function cancled($id)
    {
        $data=appointment::find($id);

        $data->status='cancled';

        $data->save();

        return redirect()->back()->with('message','Appointment cancle  successfuly');
    }
}
