<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.registration');
    }

    public function register(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        User::query()->create([
            'name' => $request->name,
            'surname' => $request->surname,
            'patronymic' => $request->patronymic,
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rules' => $request->rules,
        ]);
        return redirect('/login');
    }

    public function login(Request $request)
    {
       if (Auth::attempt([
           'login' => $request->login,
           'password' => $request->password,
       ])){
           return redirect('/');
       }
       return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
