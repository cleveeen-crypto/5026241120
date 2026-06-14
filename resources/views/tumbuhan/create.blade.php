@extends('template')
@section('title', 'Tambah Tumbuhan')
@section('konten')

    <h2>Tambah Tumbuhan</h2>

    <form action="{{ route('tumbuhan.store') }}" method="POST">
        @csrf

        <p>
            <label>Nama</label><br>
            <input type="text" name="namatumbuhan" value="{{ old('namatumbuhan') }}">
            @error('namatumbuhan')
            <small style="color:red;">{{ $message }}</small>
            @enderror
        </p>

        <p>
            <label>Jumlah</label><br>
            <input type="text" name="jumlahtumbuhan" value="{{ old('jumlahtumbuhan') }}">
            @error('jumlahtumbuhan')
        <small style="color:red;">{{ $message }}</small>
    @enderror
        </p>

        <p>
            <label>Tersedia</label><br>
            <input type="text" name="tersedia" value="{{ old('tersedia') }}">
            @error('tersedia')
        <small style="color:red;">{{ $message }}</small>
    @enderror
        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/tumbuhan" class="btn btn-secondary">Kembali</a>

    </form>

@endsection
