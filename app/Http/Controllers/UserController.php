<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //show register/create form

    public function create(){
       return view('users.register');
    }
    // create new user

    public function store(Request $request) {

        $formFields = $request -> validate(
            [
                'name' => ['required','min:3'],
                'email' => ['required','email', Rule::unique('users','email')],
                'password' =>['required','confirmed','min:6']
            ]
            );
                   // hash password
            $formFields['password'] = bcrypt($formFields['password']);
                  // create and login

                  //create user
                  $user = User::create($formFields);

                  //login
                  auth()->login($user);

                  return redirect('/users/dashboard')->with('message','user created and logged in');
    }
public function logout(Request $request)
{
    Auth::logout();
    // auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/')->with('message','you have been logged out');
}
         // show login form

         public function login(){
            return view('users.login');
         }

         //authenticate user

         public function authenticate(Request $request)
         {
            $formFields = $request -> validate(
            [

                'email' => ['required','email',],
                'password' =>['required',]
            ]
            );
            if(auth()->attempt($formFields))
            {
                $request->session()->regenerate();

                return redirect('/users/dashboard')->with('message','you are now logged in!');
            }

            return back()->withErrors(['email' => 'Invalid Credentials']) -> onlyInput('email');
         }
}