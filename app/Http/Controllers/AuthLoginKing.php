<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\administrator;
use App\Models\Pemain;
use Carbon\Carbon;
use Illuminate\Support\Str;
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
    Auth::guard('pemains')->attempt($credentials);
    $request->session()->regenerate();
    return redirect()->intended('/dashboard')->with('succeslogin', 'loginsucces');

    } elseif (Auth::guard('administrator')->attempt($credentials)) {
        $sidamin = \App\Models\administrator::where('username', $credentials['username'])->first();
        Auth::guard('administrator')->login($sidamin, false);
        // dd(Auth::guard('administrator')->check());
        $request->session()->regenerate();
        return redirect()->intended('/admin');
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

}
    public function logout(Request $request)
    {
        Auth::guard('pemains')->logout(); //untuk logout harus spesifik ke guard nya dahulu
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/dashboard')->with('succes', 'loggedout');
    }
    public function signup(Request $request)
    {
        $kredensial = $request->validate(
            [
                'username' => 'required|string|max:32|unique:pemains,username', //unique:nama tabel,kolom
                'password' => 'required|string|min:8',
                'confpass' => 'required|string|min:8',
            ]
        );

        if ($kredensial['password'] != $kredensial['confpass']) {
            return back()->with('error', 'notmatch');
        }

        do {
            $code = random_int(1, 10000);
        } while (Pemain::where('id', $code)->exists()); //exists untuk mengecek apakah value itu ada

        $pemain = Pemain::create([
            'id' => $code,
            'username' => $kredensial['username'],
            'password' => Hash::make($kredensial['password'])
        ]);

        // Auth::guard('pemains')->login($pemain);
        $pemain = \App\Models\Pemain::where('username', $kredensial['username'])->first(); //ini  harus karena formatnya array dan bisa digunakan untuk login
        Auth::guard('pemains')->login($pemain, false); // note yourself jangan pernah lupa menggunakan remember
        $request->session()->regenerate();

        return redirect('/dashboard')->with('success', 'welcome bro');
    }
}
