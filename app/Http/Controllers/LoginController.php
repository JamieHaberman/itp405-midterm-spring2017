<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $loginWasSuccessful = Auth::attempt([

            'email' => request('email'),
            'password' => request('password')
        ]);

        if ($loginWasSuccessful) {
          // $user = 'dtang@usc.edu';
              //still need to make username dynamic! Ran out of time

            return redirect('/admin')->with('successStatus', 'Hello dtang@usc.edu');
        } else {
            return redirect('/login')->with('successStatus', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
