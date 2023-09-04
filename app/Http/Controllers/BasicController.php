<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function products()
    {
        return view('product');
    }
    public function contact()
    {
        return view('contact');
    }


    public function register(Request $request)
    {

        // $request->validate([validaton],[custom validation])
        $request->validate(
            [
                'name' => 'required|min:3|max:10',
                'email' => 'required|email|regex:/[a-zA-Z0-9\-]{5,}@[a-z]{2,}[\.][a-z]{2,}[\.]*[a-z]*/',
                'username' => 'required|between:5,15',
                'city' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ],
            [
                'name.required' => 'Name is required !',
                'name.min' => 'Name field must be at least 3 characters !',
                'email.required' => 'Email is required !',
                'email.email' => 'Email field must be valid Email Address',
                'email.regex' => 'Please enter a valid email address. It should contain at least 5 characters before the "@" symbol, followed by a domain with at least 2 characters, a dot (.), and a top-level domain with at least 2 characters',
                'username.required' => 'Username is required !',
                'city.required' => 'City is required !',
                'password.required' => 'Password is required !',
                'confirm_password.required' => 'Confirm Password is required !',
                'confirm_password.same' => 'Confirm Password must match with Password',

            ]
        );



        echo "<pre>";
        print_r($request->all());
    }
}
