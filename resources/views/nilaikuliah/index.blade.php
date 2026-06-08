@extends('template')
@section('title', 'Nilai Kuliah')
@section('konten')

    <h2>Data Nilai Kuliah</h2>

    <a href="/nilaikuliah/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($data as $row)
            @php
                $na = $row->NilaiAngka;
                if ($na <= 40)       $huruf = 'D';
                elseif ($na <= 60)   $huruf = 'C';
                elseif ($na <= 80)   $huruf = 'B';
                else                 $huruf = 'A';
                $bobot = $na * $row->SKS;
            @endphp
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
    </table>

@endsection
