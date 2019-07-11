@extends('layouts.default')
@section('content')

<body>
    <section>
        <h1>Barang</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Quantity</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $p)
                    <tr>
                        <td></td>
                        <td>{{ $p->kode_barang }}</td>
                        <td>{{ $p->nama_barang }}</td>
                        <td>{{ $p->quantity }}</td>
                        <td>{{ $p->harga }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
</body>
@stop
