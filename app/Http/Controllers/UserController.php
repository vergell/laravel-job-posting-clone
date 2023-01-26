<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class UserController extends Controller
{
    // Show REgister/Create Form
    public function create(){
        return view('users.register');
    }
    // Create New User
    public function store(Request $request){
        $formFields = $request->validate([
            'name' =>['required','min:3'],
            'email' =>['required','email', Rule::unique('users', 'email')],
            'password' =>'required|confirmed|min:6'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);
        //
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //Logout User
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','Logged out');
    }

    //Show login Form
    public function login(){
        return view('users.login');
    }

    //Authenticate User
    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' =>['required','email'],
            'password' =>'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message','logged In');
        }
        return back()->withErrors(['email' =>'Invalid credentials'])->onlyInput('email');
    }
}
