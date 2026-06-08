@extends('template')
@section('title', 'Tambah Nilai Kuliah')
@section('konten')

    <h2>Tambah Data Nilai</h2>

    <form action="/nilaikuliah/store" method="POST">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" maxlength="10">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="number" name="NilaiAngka" min="0" max="100">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="number" name="SKS" min="1">
        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/nilaikuliah" class="btn btn-secondary">Kembali</a>
    </form>

@endsection
