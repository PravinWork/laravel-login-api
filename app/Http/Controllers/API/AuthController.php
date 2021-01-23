<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function register(Request $request) {
    	$registerData = $request->validate([
    		'name' => 'required|max:55',
    		'email' => 'email|required|unique:users',
    		'password' => 'required|confirmed'
    	]);

    	$registerData['password'] = bcrypt($request->password);

    	$user = User::create($registerData);

    	$accessToken = $user->createToken('authToken')->accessToken;

    	return response(['user' => $user, 'accessToken' => $accessToken]);
    }

    public function login(Request $request) {
    	$loginData = $request->validate([
    		'email' => 'email|required',
    		'password' => 'required'
    	]);

    	if (!auth()->attempt($loginData)) {
    		return response(["message" => "Invalid credentials"], 401);
    	}

    	$accessToken = auth()->user()->createToken('authToken')->accessToken;

    	return response(["user" => auth()->user(), "accessToken" => $accessToken]);
    }
}
