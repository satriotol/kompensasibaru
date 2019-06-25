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
                <h1>Data Mahasiswa IK2A</h1>
                @if (session('status'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-body">
                    <a href="/tambah" class="btn btn-primary">Input Data Baru</a>
                    |
                    <a href="/siswa" class="btn btn-success">Cetak</a>
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
