@extends('layouts.backend.master')
@section('title', 'Laporan')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Laporan</li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h3 class="card-title font-weight-bold">Laporan Pemesanan Buku</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form start -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="start_month" class="col-sm-3 col-form-label">Pilih Bulan Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_month" id="start_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_month" class="col-sm-3 col-form-label">Pilih Bulan Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_month" id="end_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_year" class="col-sm-3 col-form-label">Pilih Tahun Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_year" id="start_year" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_year" class="col-sm-3 col-form-label">Pilih Tahun Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_year" id="end_year" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary">Cetak Laporan</button>
                                <button type="button" class="btn btn-secondary ml-2">Lihat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h3 class="card-title font-weight-bold">Laporan Peminjaman Buku</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form start -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="start_month" class="col-sm-3 col-form-label">Pilih Bulan Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_month" id="start_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_month" class="col-sm-3 col-form-label">Pilih Bulan Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_month" id="end_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_year" class="col-sm-3 col-form-label">Pilih Tahun Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_year" id="start_year" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_year" class="col-sm-3 col-form-label">Pilih Tahun Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_year" id="end_year" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary">Cetak Laporan</button>
                                <button type="button" class="btn btn-secondary ml-2">Lihat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h3 class="card-title font-weight-bold">Laporan Denda Peminjaman Buku</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form start -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="start_month" class="col-sm-3 col-form-label">Pilih Bulan Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_month" id="start_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_month" class="col-sm-3 col-form-label">Pilih Bulan Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_month" id="end_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_year" class="col-sm-3 col-form-label">Pilih Tahun Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_year" id="start_year" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_year" class="col-sm-3 col-form-label">Pilih Tahun Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_year" id="end_year" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary">Cetak Laporan</button>
                                <button type="button" class="btn btn-secondary ml-2">Lihat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h3 class="card-title font-weight-bold">Laporan Pemesanan CD/DVD</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form start -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="start_month" class="col-sm-3 col-form-label">Pilih Bulan Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_month" id="start_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_month" class="col-sm-3 col-form-label">Pilih Bulan Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_month" id="end_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_year" class="col-sm-3 col-form-label">Pilih Tahun Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_year" id="start_year" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_year" class="col-sm-3 col-form-label">Pilih Tahun Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_year" id="end_year" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary">Cetak Laporan</button>
                                <button type="button" class="btn btn-secondary ml-2">Lihat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        <h3 class="card-title font-weight-bold">Laporan Peminjaman CD/DVD</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- form start -->
                        <form action="" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="start_month" class="col-sm-3 col-form-label">Pilih Bulan Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_month" id="start_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_month" class="col-sm-3 col-form-label">Pilih Bulan Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_month" id="end_month" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_year" class="col-sm-3 col-form-label">Pilih Tahun Awal</label>
                                <div class="col-sm-9">
                                    <input type="text" name="start_year" id="start_year" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_year" class="col-sm-3 col-form-label">Pilih Tahun Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="end_year" id="end_year" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary">Cetak Laporan</button>
                                <button type="button" class="btn btn-secondary ml-2">Lihat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
