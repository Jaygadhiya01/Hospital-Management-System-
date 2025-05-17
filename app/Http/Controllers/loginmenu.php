<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginmenu extends Controller
{
    /* public function insert_data(Request $req)
    {
        if($req->password==$req->cpassword)
        {
            $loginmenu=new Loginmenu;
            $loginmenu->name=$req->user;
            $loginmenu->email=$req->userId;
            $loginmenu->password=Hash::make($req->password);
            $id=$loginmenu->save();
            if($id>0)
            {
                $req->session()->put('user',$req->user);
                return redirect('homel');
            }
            else
            {
              return redirect()->back()->withErrors(['failure'->'password and confirm password must be sam']);  
            }
        }

    }

    public function index(Request $req)
    {
        $data=login::where('email',$req->user)->get();
        if($data->isNotEmpty())
        {
          if(Hash::check($req->password,$data[0] ->password))
          {
            if($data[0]->role=='user')
            {

                $req->session()->put('user',$data[0]->name); 
                return view('home');
            }
            else if($data[0]->role=='admin')
            {
                $req->session()->put('user','admin');
                return view('home');
            }
          }

        }
    }*/
  /*  public function logout(Request $request) 
{
    auth()->logout(); // Laravel auth logout
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}*/

public function logout()
    {
        Auth::logout();

        return redirect('/login'); // Redirect to the desired URL after logout
    }


}
