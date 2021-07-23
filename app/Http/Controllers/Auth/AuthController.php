<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function register()
    {

      return view('new-user');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
          'name' => $request->name,
          'email' => $request->email,
          'role' => $request->role,
          //'password' => $request->password,
          'password' => Hash::make($request->password),
      ]);

        return redirect('home');
    }

    public function login()
    {

      return view('auth.index');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('index')->with('error', 'Opps! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('index');
    }

    public function home()
    {
      return view('home');
    }
}