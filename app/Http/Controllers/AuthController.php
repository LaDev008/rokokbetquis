<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|max:255|min:8|confirmed',
            'phone_number' => 'required|unique:users,phone_number',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role_id' => 6,
        ]);

        Auth::login($user);
        $request->session()->regenerate();


        return redirect()->route("home");
    }

    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role_id == 6) {
                return redirect()->route("event");
            } else {
                return redirect()->route('dashboard');
            }
        }

        Session::flash('status', 'danger');
        Session::flash('message', 'Username Atau Password Salah');

        return back()->withErrors([
            'username' => "Username Atau Password Salah, Silahkan Coba Lagi",
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("home");
    }
}
