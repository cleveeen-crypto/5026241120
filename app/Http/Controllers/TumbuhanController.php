<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TumbuhanController extends Controller
{
    public function index()
    {
        $data = DB::table('tumbuhan')->get();

        return view('tumbuhan.index', compact('data'));
    }

    public function create()
    {
        return view('tumbuhan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'namatumbuhan' => 'required|string|max:255',
        'jumlahtumbuhan'     => 'required|integer',
        'tersedia'      => 'required|integer',
     ]);

        DB::table('tumbuhan')->insert([
            'namatumbuhan' => $request->namatumbuhan,
            'jumlahtumbuhan' => $request->jumlahtumbuhan,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('tumbuhan.index')->with('success', 'Data tumbuhan berhasil ditambahkan.');
    }


    public function destroy($id)
    {
        DB::table('tumbuhan')
            ->where('kodetumbuhan', $id)
            ->delete();

        return redirect()->route('tumbuhan.index')->with('success', 'Data tumbuhan berhasil dihapus.');
    }

}
