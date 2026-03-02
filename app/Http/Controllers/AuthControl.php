<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthControl extends Controller
{
    public function showlogin()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        $kredensial = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // $kredensial = $request->only('username','password');
        // dd($kredensial);
        dd((Auth::guard('pemains')));
        if(Auth::guard('pemains')->attempt($kredensial)) {
            dd($kredensial);
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
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
