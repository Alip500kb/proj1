<?php

namespace App\Http\Controllers;

use App\Models\faktur;
use App\Models\GameList;
use App\Models\ulasan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class buysys extends Controller
{
    public function buyitem(Request $request)
    {
        $id = $request->validate([
            'product' => 'required'
        ]);

        $info = GameList::find($id['product']);
        do {
            $faktur_id = rand(1,63000);
        } while (faktur::where('id', $faktur_id)->exists());
        // dd($request['p']);
        faktur::create([
            'id' => $faktur_id,
            'id_barang' => $request['product'],
            'pembeli' => (Auth::guard('pemains')->user())['id'],
            'qty' => '1',
            'harga_total' => $info['price'],
            'waktu_pembelian' => Carbon::now()
        ]);
        return back()->with('success','sukses bos');
        // dd($fakturs);
    }

    public function ulasan(Request $request)
    {
        // dd(auth('pemains')->user()->username);
        $ulasan = $request->validate([
            'rating',
            'ulasan'
        ]);

        do {
            $id = rand(63, 6363636363);
        } while (ulasan::where('id', $id)->exists());

        ulasan::create([
            'id' => $id,
            'user' => auth('pemains')->user()->username,
            'rating' => $request['rating'],
            'ulasan' => $request['ulasan'],
            'product_id' => $request['product_id']
        ]);
        return back();
    }

}
