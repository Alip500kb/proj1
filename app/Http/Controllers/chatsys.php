<?php

namespace App\Http\Controllers;

use App\Models\community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class chatsys extends Controller
{
    public function send(Request $request)
    {
        $teks = $request->validate(
            [
                'teks' => 'required'
            ]
        );
        // dd(Auth::guard('pemains')->user());
        do {
            $id = rand(1,63636363);
        } while (community::where('id', $id)->exists());
        community::create([
            'id' => $id,
            'user_id' => (Auth::guard('pemains')->user())['id'],
            'text' => $request['teks']
        ]);
        return back();  
    }
}
