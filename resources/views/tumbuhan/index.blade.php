@extends('template')
@section('title', 'Tumbuhan')
@section('konten')

    <h2>Data Tumbuhan</h2>

    <a href="/tumbuhan/create" class="btn btn-primary mb-3">Tambah Tumbuhan</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Actions</th>
        </tr>

        @forelse($data as $row)
             <tr>
                    <td>{{ $row->namatumbuhan }}</td>
                    <td>{{ $row->jumlahtumbuhan }}</td>
                    <td>{{ $row->tersedia }}</td>
                    <td>
                        <form action="{{ route('tumbuhan.destroy', $row->kodetumbuhan) }}" method="POST" style="display:inline-block;">
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
