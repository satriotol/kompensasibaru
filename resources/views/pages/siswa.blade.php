<!DOCTYPE html>
<html>

<head>
    <title>Export Laporan Excel Pada Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <center>
            <h4>Export Laporan Excel Pada Laravel</h4>
            <h5><a target="_blank" href="https://www.malasngoding.com/">www.malasngoding.com</a></h5>
        </center>

        <a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Sakit</th>
                    <th>Ijin</th>
                    <th>Alpha</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($datamahasiswa as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->kelas }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->sakit }}</td>
                    <td>{{ $p->ijin }}</td>
                    <td>{{ $p->alpha }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
