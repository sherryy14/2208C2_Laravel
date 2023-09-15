<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $url = url('/contact');
        $title = 'Add';
        return view('contact', ['url' => $url, 'title' => $title]);
    }

    public function register(Request $request)
    {
        // $request->validate([validaton],[custom validation])
        $request->validate(
            [
                'name' => 'required|min:3|max:10',
                'email' => 'required|email|regex:/[a-zA-Z0-9\-]{5,}@[a-z]{2,}[\.][a-z]{2,}[\.]*[a-z]*/|unique:register,email',
                'username' => 'required|between:5,15|unique:register,username',
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


        // Insert query 
        $register = new Register();

        // table column name , column attribute 
        $register->name = $request->name;
        $register->username = $request->username;
        $register->city = $request->city;
        $register->email = $request->email;
        // $register->image = $request->image;
        $register->password = Hash::make($request->password);


        session(['username' => $request->username]);
        session(['useremail' => $request->email]);

        $register->save();
        // $request->file('image')->store('upload');

        // set session

        // get session
        // $request->session()->get('username');


        return redirect('/users');
    }

    function delSession()
    {
        session()->forget('username');
    }

    function flash()
    {
        // session()->flash('status', 'Task was successful!');

        // echo session()->get('status');
    }

    public function user()
    {

        // $users = Register::all();
        $users = Register::paginate(10);

        // echo "<pre>";
        // print_r($users->toArray());

        $data = compact('users');

        return view('user')->with($data);
    }

    public function delete($id)
    {

        // Find PK ko target krta hy 
        $del = Register::find($id);


        if (!is_null($del)) {
            $del->delete();
        }

        return redirect('/users');
    }

    public function edit($id)
    {

        // echo $id;
        $edit_user = Register::find($id);

        // /update/6
        $url = url('/update') . '/' . $id;
        $title = 'Update';

        // $data = compact('edit_user');

        // return view('contact')->with($data);

        return view('contact', ['user' => $edit_user, 'url' => $url, 'title' => $title]);
    }

    public function update($id, Request $request)
    {

        $user = Register::find($id);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->city = $request->city;
        $user->email = $request->email;
        // $user->image = $request->image;

        $user->save();
        // $request->file('image')->store('upload');

        // return view('user');

        return redirect('/users');
    }

    public function deleted_user()
    {
        $users = Register::onlyTrashed()->get();

        return view('delete-user', ['users' => $users]);
    }

    public function restore($id)
    {
        $user = Register::withTrashed()
            ->where('reg_id', $id)
            ->restore();

        return redirect('/users');
    }

    public function force($id)
    {
        $user = Register::withTrashed()
            ->where('reg_id', $id)
            ->forceDelete();

        return redirect('/deleted');
    }



    public function viewFile()
    {
        return view('file');
    }

    public function uploadFile(Request $request)
    {
        // echo "<pre>";
        // print_r($request->image);

        // form attribute name, folder name 

        $request->file('image')->store('upload');
    }
}
