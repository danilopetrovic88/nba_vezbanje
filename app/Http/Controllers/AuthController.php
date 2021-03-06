<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('logout');
    }

    public function getRegistrationForm() {
        return view('auth.register');
    }

    public function getLoginForm() {
        return view('auth.login');
    }

    public function register(RegisterRequest $registerRequest) {
        $data = $registerRequest->validated();

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        event(new Registered($user));

        return redirect('/login');

    }

    public function login(LoginRequest $loginRequest) {
        if(Auth::attempt($loginRequest->validated())) {
            return redirect('/');
        }

        return view('auth.login', ['valid_credentials' => false]);
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }
}
