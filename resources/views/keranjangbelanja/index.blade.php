<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <h3 class="mb-0">
                Keranjang Belanja
            </h3>

            <a href="/keranjang/create" class="btn btn-light">
                + New Item
            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>Kode Pembelian</th>
                        <th>Kode Barang</th>
                        <th>Jumlah Pembelian</th>
                        <th>Harga Per Item</th>
                        <th>Total</th>
                        <th width="220">Action</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($data as $item)

                    <tr>

                        <td>{{ $item->id }}</td>

                        <td>{{ $item->KodeBarang }}</td>

                        <td>{{ $item->Jumlah }}</td>

                        <td>
                            Rp {{ number_format($item->Harga,0,',','.') }}
                        </td>

                        <td>
                            Rp {{ number_format(
                                $item->Jumlah * $item->Harga,
                                0,
                                ',',
                                '.'
                            ) }}
                        </td>

                        <td class="text-center">

                            <form
                                action="/keranjang/beli/{{ $item->id }}"
                                method="POST"
                                class="d-inline">

                                @csrf

                                <button
                                    type="submit"
                                    class="btn btn-success btn-sm">

                                    Beli

                                </button>

                            </form>

                            <form
                                action="/keranjang/delete/{{ $item->id }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm">

                                    Batal

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="6" class="text-center text-muted">

                            Belum ada data

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
