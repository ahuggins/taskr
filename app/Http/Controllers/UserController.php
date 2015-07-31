<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;

class UserController extends Controller
{
    

    public function create(SignUpRequest $request)
    {

    	$data['name'] = $request->get('name');
    	$data['email'] = $request->get('email');
    	$data['password'] = bcrypt($request->get('password'));

    	$user = User::create($data);
		Auth::login($user, true);
		return redirect('/list');
    	
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }

    public function attempt(SignInRequest $request)
    {
    	$data['email'] = $request->get('email');
    	$data['password'] = $request->get('password');
    	if (Auth::attempt($data)) {
    		$user = User::where('email', $data['email'])->first();
    		Auth::login($user);
            return redirect('/list');
    	}
        
    	return redirect('/sign-in')->withErrors(['Login Failed. Make sure password and email are correct.']);
    }

    public function login()
    {
        return view('app.content.signin');
    }
}
