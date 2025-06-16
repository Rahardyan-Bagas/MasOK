<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    // Pastikan halaman home hanya bisa diakses jika sudah login
    public function __construct()
    {
        // Jika kamu tidak pakai middleware auth bawaan Laravel, ini bisa kamu skip
        // $this->middleware('auth');
    }

    // Tampilkan halaman home
    public function index()
    {
        $user = session('user'); // Ambil data user dari session

        // Jika belum login, redirect ke halaman login
        if (!$user) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Tampilkan view homepage dengan data user
        return view('homepage', compact('user'));
    }

    // Logout user
    public function logout(Request $request)
    {
        // Hapus session
        Session::forget('user');

        // Redirect ke login page
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
