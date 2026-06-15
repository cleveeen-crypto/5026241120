<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{

    public function index()
    {
        $data = DB::table('penggajian')->get();
        return view('penggajian.index', compact('data'));
    }

    public function tambah()
    {
        $daftarNip = DB::table('penggajian')->pluck('NIP');
        return view('penggajian.tambah', compact('daftarNip'));
    }

    public function store(Request $request)
    {
        DB::table('penggajian')->insert([
            'NIP'       => $request->NIP,
            'GajiPokok' => $request->GajiPokok,
            'Potongan'  => $request->Potongan,
        ]);

        return redirect('/penggajian');
    }
}
