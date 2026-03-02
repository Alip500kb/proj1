<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthControl extends Authenticate
{
    public function login(Request $request): RedirectResponse
    {
        $kredensial = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );
        dd($kredensial);
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            dd('diamput');
            return redirect()->intended('/dashboard');
        }else {
            dd('gagal');
        }

        return back()->withErrors(
            [
                'email' => 'Kacaw lek mumet',
            ]
        )->onlyInput('email');
    }

}
