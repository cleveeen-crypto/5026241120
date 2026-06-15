@extends('template')
@section('title', 'Kode Soal Penggajian')
@section('konten')

    <h2>Data Kode Soal Penggajian</h2>

    <a href="/penggajian/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>NIP</th>
            <th>Gaji Pokok</th>
            <th>Potongan</th>
            <th>Gaji Bersih</th>
            <th>Persentase Potongan</th>
        </tr>

        @forelse($data as $row)
        @php
            $gb = $row->gajipokok - $row->potongan;
            $pp = ($gb / $row->gajipokok) * 100;
        @endphp

            <tr>
                <td>{{ $row->nip }}</td>
                <td>Rp {{ number_format($row->gajipokok, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($row->potongan , 0, ',', '.') }}</td>
                <td>Rp {{ number_format($gb , 0, ',', '.') }}</td>
                <td>{{ $pp }}%</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
    </table>

@endsection
