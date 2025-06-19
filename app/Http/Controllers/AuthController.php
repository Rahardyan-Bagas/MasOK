<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan halaman sign up
    public function create()
    {
        return view('SignUpPage'); // Pastikan nama file sesuai: resources/views/SignUpPage.blade.php
    }

    // Menyimpan data user baru
    public function signup(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'Nama_User' => 'required|string|max:100',
             'Email' => ['required', 'email', 'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/'],
            'Password' => 'required|string|min:6|confirmed',
        ]);

        // Simpan ke database
        User::create([
            'Nama_User' => $request->Nama_User,
            'Email' => $request->Email,
            'Password' => Hash::make($request->Password),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Akun berhasil dibuat.');
    }

    // Menampilkan halaman login (opsional)
    public function showLoginForm()
    {
        return view('LoginPage'); // ganti sesuai nama file jika berbeda
    }

    public function login(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required|string',
        ]);

        $user = User::where('Email', $request->Email)->first();

        if ($user && Hash::check($request->Password, $user->Password)) {
            session(['user' => $user]);
            return redirect()->route('home');
        }

        return back()->withErrors(['Email' => 'Email atau password salah.'])->withInput();
    }
}
