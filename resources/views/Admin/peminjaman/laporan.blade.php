@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Laporan</h1>
    <!-- Button untuk memunculkan modal -->
</div>
<hr>


<div class="row">
    <!-- Form pertama -->
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Laporan Pemesanan Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Bulan Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Tahun Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer; margin-right: 5px;">
                        Cetak Laporan
                    </button>
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Lihat Laporan
                    </button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>

    <!-- Form kedua -->
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Laporan Peminjaman Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Bulan Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Tahun Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer; margin-right: 5px;">
                        Cetak Laporan
                    </button>
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Lihat Laporan
                    </button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>

<div class="row">
    <!-- Form ketiga -->
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Laporan Denda Peminjaman Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Bulan Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Tahun Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer; margin-right: 5px;">
                        Cetak Laporan
                    </button>
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Lihat Laporan
                    </button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>

    <!-- Form keempat -->
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Laporan Pemesanan CD/DVD</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Bulan Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Tahun Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer; margin-right: 5px;">
                        Cetak Laporan
                    </button>
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Lihat Laporan
                    </button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>


<div class="row">
    <!-- Form ketiga -->
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Laporan Peminjaman CD/DVD</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="bulanawal" class="col-sm-4 col-form-label">Pilih Bulan Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulanakhir" class="col-sm-4 col-form-label">Pilih Bulan Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="bulanakhir" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahunawal" class="col-sm-4 col-form-label">Pilih Tahun Awal</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tahunawal" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahunakhir" class="col-sm-4 col-form-label">Pilih Tahun Akhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tahunakhir" placeholder="date">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer d-flex justify-content-end">
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer; margin-right: 5px;">
                        Cetak Laporan
                    </button>
                    <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Lihat Laporan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
