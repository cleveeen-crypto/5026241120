@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>

    <a href="/keranjang/create" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Subtotal</th>
            <th>Actions</th>
        </tr>

        @forelse($data as $row)
            @php
                $st = $row->Harga * $row->Jumlah;
            @endphp
             <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->KodeBarang }}</td>
                    <td>{{ $row->Jumlah }}</td>
                    <td>Rp {{ number_format($row->Harga, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($st, 0, ',', '.') }}</td>
                    <td>

                        <form action="{{ route('keranjang.destroy', $row->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin membatalkan item ini?')">
                                Batal
                            </button>
                        </form>
                    </td>
                </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
    </table>

@endsection
