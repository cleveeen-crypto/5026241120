<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = DB::table('keranjangbelanja')->get();

        return view('keranjangbelanja.index', compact('data'));
    }

    public function create()
    {
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'KodeBarang' => 'required|integer',
        'Jumlah'     => 'required|integer',
        'Harga'      => 'required|integer',
     ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect()->route('keranjang.index')->with('success', 'Data keranjang berhasil ditambahkan.');
    }


    public function destroy($id)
    {
        DB::table('keranjangbelanja')
            ->where('id', $id)
            ->delete();

        return redirect()->route('keranjang.index')->with('success', 'Data keranjang berhasil dihapus.');
    }

}
