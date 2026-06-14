@extends('template')
@section('title', 'Tambah Pembelian')
@section('konten')

    <h2>Tambah Pembelian</h2>

    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf

        <p>
            <label>Kode Barang</label><br>
            <input type="text" name="KodeBarang" value="{{ old('KodeBarang') }}">
            @error('KodeBarang')
            <small style="color:red;">{{ $message }}</small>
            @enderror
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="Jumlah" value="{{ old('Jumlah') }}">
            @error('Jumlah')
        <small style="color:red;">{{ $message }}</small>
    @enderror
        </p>

        <p>
            <label>Harga</label><br>
            <input type="text" name="Harga" value="{{ old('Harga') }}">
            @error('Harga')
        <small style="color:red;">{{ $message }}</small>
    @enderror
        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/keranjang" class="btn btn-secondary">Kembali</a>

    </form>

@endsection
