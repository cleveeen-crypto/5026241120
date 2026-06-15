@extends('template')
@section('title', 'Tambah Penggajian')
@section('konten')

    <h2>Tambah Data Penggajian</h2>

    <form action="/penggajian/store" method="POST" onsubmit="return validasi()">
        @csrf

        <p>
            <label>NIP</label><br>
            <input type="text" id="NIP" name="NIP" minlength="8" maxlength="8" value="{{ old('NIP') }}">
        </p>

        <p>
            <label>Gaji Pokok</label><br>
            <input type="number" id="GajiPokok" name="GajiPokok" min="0" value="{{ old('GajiPokok') }}">
        </p>

        <p>
            <label>Potongan</label><br>
            <input type="number" id="Potongan" name="Potongan" min="0" value="{{ old('Potongan') }}">
        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/penggajian" class="btn btn-secondary">Kembali</a>
    </form>

    <script>
        const daftarNip = @json($daftarNip);

        function validasi() {
            const nip       = document.getElementById('NIP').value;
            const gajipokok = parseInt(document.getElementById('GajiPokok').value);
            const potongan  = parseInt(document.getElementById('Potongan').value);

            if (daftarNip.includes(nip)) {
                alert('NIP sudah terdaftar');
                return false;
            }

            if (potongan >= gajipokok * 0.3) {
                alert('Potongan harus kurang dari 30% Gaji Pokok');
                return false;
            }

            return true;
        }
    </script>

@endsection
