@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="../css/style.css">

<body class="container-form">
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="card-header text-center">
                    <h1>CRUD Data Pegawai</h1>
                </div>
                <br>
                <div class="text-center"> 
                    <a href="/ik2a" class="btn btn-primary">Kembali</a>
                </div>
                <br />
                <br />
                <form method="post" enctype="multipart/form-data" action="/updatefoto/{{ $datamahasiswa->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <div class="image-container">
                            <img class="center preview-image" src="{{ url('/data_file/'.$datamahasiswa->foto) }}">
                        </div>
                        <label>foto</label> <br>
                        <input type="file" name="foto" value="{{ $datamahasiswa->foto }}">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br />
                            @endforeach
                        </div>
                        @endif
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        |
                        <a href="/ik2a" class="btn btn-danger"
                            onclick="return confirm('Anda yakin ingin untuk membatalkan input data?')">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@stop
