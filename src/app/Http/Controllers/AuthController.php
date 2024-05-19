<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    // public function register()
    // {
    //     return view('auth.register');
    // }

    // public function login()
    // {
    //     return view('auth.login');
    // }

    // public function store(AuthRequest $request)
    // {
    //     $user = $request->only(['name', 'email', 'password']);
    //     Users::create($user);
    //     return view('auth.login', compact('user'));
    // }

    // public function search(AuthRequest $request)
    // {
    //     $user = $request->only(['name', 'email', 'password']);
    //     Users::find($request->id)->search($user);
    //     return view('auth.admin', compact('user'));
    // }
}
