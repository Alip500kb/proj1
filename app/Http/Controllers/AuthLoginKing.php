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

    if (Auth::guard('pemains')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    return back()->with('errorlogin', 'errorking');
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

    // Debug lengkap
    $pemain = \App\Models\Pemain::where('username', $credentials['username'])->first();

    dd([
        'user_found' => $pemain ? true : false,
        'user_data' => $pemain,
        'password_in_db' => $pemain?->password,
        'password_length' => $pemain ? strlen($pemain->password) : 0,
        'hash_check' => $pemain ? Hash::check($credentials['password'], $pemain->password) : null,
        'input_password' => $credentials['password'],
        'attempt_result' => Auth::guard('pemains')->attempt($credentials),
    ]);


}
    public function logout(Request $request)
    {
        // dd(Auth::guard('pemains')->user());
        Auth::guard('pemains')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
