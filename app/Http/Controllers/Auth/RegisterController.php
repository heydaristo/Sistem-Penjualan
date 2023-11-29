<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        Session::flash('success', 'Registrasi Berhasil! Please Login');
        
        return redirect()->route('login');
        // dd('Registrasi Berhasil!!');
    }
}
