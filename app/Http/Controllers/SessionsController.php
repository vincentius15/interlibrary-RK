<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        return view('general.login');
    }

    public function store()
    {
        $this->validate(request(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        if(! auth()->attempt(request(['email','password'])) ){
            return back()->withErrors([
                'messages'=>'Ups, login gagal, periksa lagi data anda'
            ]);
        }

        if(request('email') == "admin@mail.com"){
          return redirect('/admin');
        }
        else if(request('email') == "pustakawan@mail.com"){
            return redirect('/pustakawan');
        }
        else{
          return redirect('/');
        }

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
