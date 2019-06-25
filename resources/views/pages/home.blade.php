@extends('layouts.default')
@section('content')
<body>
    <div class="jumbotron text-center">
        <img src="/bahan/logo-polines.png" alt="">
        <br><br><br>
        <h1>SELAMAT DATANG DI</h1>
        <h1>PORTAL MAHASISWA</h1>
    </div>

    <section class="about" id="about">
        <div class="container">
            <h1 class="text-center">
                ABOUT
            </h1>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste
                        exercitationem est hic, saepe aliquam ad
                        odit
                        provident cupiditate laboriosam harum ipsam alias velit consectetur quasi illo, repellendus
                        distinctio
                        magnam ipsa.</p>
                </div>
                <div class="col-sm-6">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita modi
                        labore praesentium ullam
                        voluptatibus
                        porro error minus molestias autem. Enim cupiditate ducimus amet ea consequuntur facere
                        eligendi
                        unde
                        molestias porro.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <br><br>
            <h1 class="text-center">
                CONTACT
            </h1>
            <hr class="contact_hr">
            <div class="row">
                <form class="offset-md-3 col-md-6" action="">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" placeholder="masukkan nama...">
                    </div>
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="text" class="form-control" placeholder="masukkan email...">
                    </div>
                    <div class="form-group">
                        <label for="">Pesan</label>
                        <textarea class="form-control" rows="5" placeholder="masukan isi pesan..."></textarea>
                    </div>
                    <div class="form-group text-center">
                        <input class="btn btn-primary" type="submit" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
@stop
