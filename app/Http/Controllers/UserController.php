<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function logview()
    {
        return view("login");
    }
    public function regview()
    {
        return view('register');
    }
    // public function UserLogin( Request $req )
    // {
    //     $data = $req->input();
    //     $req->session()->put('/',$data['/']);
    //     {{ session('/'); }}
    // }
    public function Register_User( Request $request )
    {
        // echo "Registration";
        $request->validate
        (
            [
               "reg_name"=>"required",
               "reg_email"=>"required|email",
               "reg_password"=>"required|min:5|max:12",
            ]
        );
        $user = new User();
        $user->name = request('reg_name');
        $user->email = request('reg_email');
        $user->password = Hash::make(request('reg_password'));
        $reg = $user->save();
        if ($reg) {
            return redirect("login")->with('flesh_register','Success register');
        }

    }
    public function Login_User( Request $request )
    {
        $request->validate
        (
            [
               "log_email"=>"required|email",
               "log_password"=>"required|min:5|max:12",
            ]
        );
        $data = $request->input();

        $log_user = User::where('email','=',$data['log_email'])->first();
        // dd($request->input());
        // dd($log_user);
        if ($log_user) 
        {
        // session()->flash('warning', 'Pogresio si sifru!');
        if (Hash::check($data['log_password'], $log_user->password)) {
            $request->session()->put('LoginId',$log_user->id);
            return redirect('/welcomeUser')->with("Login","Success Login");
        }else {
            echo "Greska";
        }
                   

        }
        
        
    }
        // public function Logout()
        // {
        //     return view('/logout');
        // }
    
}
