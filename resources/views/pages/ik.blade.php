@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="../css/style.css">

<body class="container-form">
    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 5px;
        }

    </style>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h1>Data Mahasiswa</h1>

                @if (session('status'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-body">
                    <a href="/tambah" class="btn btn-primary">Input Data Baru</a>
                    |
                    <a href="/cetak" class="btn btn-success">Cetak</a>
                    <div class="modal fade" id="importExcel" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                    </div>
                                    <div class="modal-body">

                                        {{ csrf_field() }}

                                        <label>Pilih file excel</label>
                                        <div class="form-group">
                                            <input type="file" name="file" required="required">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Sakit</th>
                                    <th>Ijin</th>
                                    <th>Alpha</th>
                                    <th>OPSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datamahasiswa as $p)
                                <tr>
                                    <td>
                                        <div class="image-container">
                                            <img class="post-image" src="{{ url('/data_file/'.$p->foto) }}">
                                            <div class="middle">
                                                <div class="overlay-text">
                                                    <a class="btn btn-primary"
                                                        href="/editfoto/{{ $p->id }}">Ganti<br>Foto</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->kelas }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->sakit }}</td>
                                    <td>{{ $p->ijin }}</td>
                                    <td>{{ $p->alpha }}</td>
                                    <td>
                                        <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                        |
                                        <a href="/hapus/{{ $p->id }}"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                <form method="post" action="/import_excel" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{ csrf_field() }}
                                            <label>Pilih file excel</label>
                                            <div class="form-group">
                                                <input type="file" name="file" required="required">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </div>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $datamahasiswa->links() }}
        </div>
    </div>
</body>
@stop
