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
    public function registerUser( Request $request )
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
    public function loginUser( Request $request )
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
        if (Hash::check($data['log_password'], $log_user->password)) {
            $request->session()->put('LoginId',$log_user->id);
            return redirect('/welcomeUser')->with("Login","Success Login");
        }else {
            echo "Failed";
        }
        }
    }
}
