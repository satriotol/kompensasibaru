@extends('layouts.default')
@section('content')

<body class="container-form">
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pegawai
            </div>
            <div class="card-body">
                <a href="/ik2a" class="btn btn-primary">Kembali</a>
                <br />
                <br />
                <form method="post"  enctype="multipart/form-data" action="/update/{{ $datamahasiswa->id }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .."
                            value="{{$datamahasiswa->nama}}">
                        @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas" placeholder="Nama pegawai ..">
                            <option value="{{ $datamahasiswa->kelas }}">{{ $datamahasiswa->kelas}}</option>
                            <option value="IK1A">IK1A</option>
                            <option value="IK1B">IK1B</option>
                            <option value="IK2A">IK2A</option>
                            <option value="IK2B">IK2B</option>
                            <option value="IK3A">IK3A</option>
                            <option value="IK3B">IK3B</option>
                        </select>
                        @if($errors->has('kelas'))
                        <div class="text-danger">
                            {{$errors->first('kelas')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>sakit</label>
                        <input type="number" name="sakit" class="form-control" placeholder="sakit pegawai .."
                            value="{{$datamahasiswa->sakit}}">
                        @if($errors->has('sakit'))
                        <div class="text-danger">
                            {{ $errors->first('sakit')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>ijin</label>
                        <input type="number" name="ijin" class="form-control" placeholder="ijin pegawai .."
                            value="{{$datamahasiswa->ijin}}">
                        @if($errors->has('ijin'))
                        <div class="text-danger">
                            {{ $errors->first('ijin')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>alpha</label>
                        <input type="number" name="alpha" class="form-control" placeholder="alpha pegawai .."
                            value="{{ $datamahasiswa->alpha }}">
                        @if($errors->has('alpha'))
                        <div class="text-danger">
                            {{ $errors->first('alpha')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control"
                            placeholder="Alamat pegawai ..">{{$datamahasiswa->alamat}}</textarea>
                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@stop
