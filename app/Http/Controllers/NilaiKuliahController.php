<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    // Fungsi konversi nilai angka ke huruf
    private function nilaiHuruf($na)
    {
        if ($na <= 40)           return 'D';
        elseif ($na <= 60)       return 'C';
        elseif ($na <= 80)       return 'B';
        else                     return 'A';
    }

    public function index()
    {
        $data = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.index', compact('data'));
    }

    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        return redirect('/nilaikuliah');
    }
}
