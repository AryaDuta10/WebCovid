@section('title')
    Tambah Data
@endsection
@section('vaksin')
    active
@endsection
@extends('app')
@section('content')

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Tambah Data </h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Vaksin</li>
                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <!-- <h3 class="tile-title">Register</h3> -->
                    <div class="tile-body">
                        <!-- <form class="form-horizontal" action="{{ route('vaksin.store') }}" method="post"> -->
                        <form class="form-horizontal" action="{{ url('/vaksin') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Usia</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="usia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="date" name="tgl_lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Alamat</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="4" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" value="L"
                                                name="jenis_kelamin">Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" value="P"
                                                name="jenis_kelamin">Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="control-label col-md-3">NIK</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nik">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Status</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="status">
                                </div>
                            </div>

                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                                        <a class="btn btn-secondary" href="http://127.0.0.1:8000/pegawai"><i
                                                class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                                    </div>

                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection
