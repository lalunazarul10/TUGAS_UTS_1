<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {

    $email = 'nazarul@gmail.com';
    $password = '12345';

    if ($request->email == $email && $request->password == $password) {

        session(['login' => true]);

        return redirect()->route('buku.index');
    }

    return back()->with('error', 'Email atau Password Salah');
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/');
});

// TANPA middleware dulu (biar aman & tidak error)
Route::resource('buku', BukuController::class);