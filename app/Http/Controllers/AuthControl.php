<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControl extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('guest:pemains')->except('logout');
    }

    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $kredensial = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required'],
            ]
        );
        dd(Auth::guard('pemains')->attempt($kredensial));
        // dd($kredensial);
        if (Auth::guard('pemains')->attempt($kredensial)) {
            $request->session()->regenerate();
            dd('berhasil');
            return view('dashboard');
        }
    }





    // public function login(Request $request): RedirectResponse
    // {
    //     $kredensial = $request->validate(
    //         [
    //             'email' => ['required', 'email'],
    //             'password' => ['required'],
    //         ]
    //     );
    //     dd($kredensial);
    //     if (Auth::attempt($kredensial)) {
    //         $request->session()->regenerate();
    //         dd('diamput');
    //         return redirect()->intended('/dashboard');
    //     }else {
    //         dd('gagal');
    //     }

    //     return back()->withErrors(
    //         [
    //             'email' => 'Kacaw lek mumet',
    //         ]
    //     )->onlyInput('email');
    // }

}
