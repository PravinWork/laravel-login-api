<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index(Request $request) {

        if (Auth::check()){
            $users = User::all();
            return view('dashboard.index')->with("users", $users);
        } else {
            return redirect('/login');
        }
    }

    public function login(Request $request) {
    	return view('login');
    }
    
    public function doLogin(Request $request) {
        $loginData = $request->validate([
    		'email' => 'email|required',
    		'password' => 'required'
    	]);

    	if (!auth()->attempt($loginData)) {
            // return redirect()->back()->withInput(Input::all())->with('message', 'Provided credentials are invalid');
            return redirect()->back()->withErrors($loginData)->withInput();
    	}

    	return redirect('/dashboard');
    }

    public function register(Request $request) {
    	return view('register');
    }

    public function doRegister(Request $request) {
    	$registerData = $request->validate([
    		'name' => 'required|max:55',
    		'email' => 'email|required|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	$registerData['password'] = bcrypt($request->password);

    	$user = User::create($registerData);

    	return redirect('/login');
    }

    public function logout(Request $request) {
    	Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
