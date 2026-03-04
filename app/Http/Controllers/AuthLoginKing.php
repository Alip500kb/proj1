<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthLoginKing extends Controller
{
    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);
    if (!Auth::guard('pemains')->attempt($credentials)) {
    return back()->with('errorlogin', 'errorking');
    }
    Auth::guard('pemains')->attempt($credentials);
    $request->session()->regenerate();
    return redirect()->intended('/dashboard')->with('succeslogin', 'loginsucces');
    // $pemain = \App\Models\Pemain::where('username', $credentials['username'])->first();
    // if (!$pemain || !Hash::check($credentials['password'], $pemain->password)) {
    // // jika pemain false/null atau hash cek kredensial password dengan password hash berbeda/false
    // return back()->with('errorlogin', 'errorking');
    // }
    // // dd($request->boolean('rememberme'));
    // Auth::guard('pemains')->login($pemain, false); //me loginkan pemain dengan rememberme false
    // $request->session()->regenerate(); //memberikan session id baru jadi tidak ada exploit menggunakan session id

    // $pemain->last_login_at = Carbon::now(); //gae edit last_login_at
    // $pemain->save(); //save
    // return redirect()->intended('/dashboard');

}
    public function logout(Request $request)
    {
        Auth::guard('pemains')->logout(); //untuk logout harus spesifik ke guard nya dahulu
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/dashboard')->with('succes', 'loggedout');
    }
}
