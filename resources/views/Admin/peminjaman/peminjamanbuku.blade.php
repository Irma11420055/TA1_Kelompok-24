@extends('Admin.template')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Peminjaman Buku</h1>
    <!-- Button untuk memunculkan modal -->
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambahPeminjaman">Tambah Peminjaman</button>
</div>
<hr>

<!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pemesanan (30)</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>ID Anggota</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>121</td>
                            <td>Pengendalian Tanah oleh Pemerintah</td>
                            <td>11420057</td>
                            <td>20 Februari 2024</td>
                            <td>
                                <button style="background-color: #17A2B8; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                                    Tindakan
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>140</td>
                            <td>Pemberatasan Korupsi</td>
                            <td>11420055</td>
                            <td>20 Februari 2024</td>
                            <td>
                                <button style="background-color: #17A2B8; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                                    Tindakan
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->

<!-- Modal -->
<div class="modal fade" id="modalTambahPeminjaman" tabindex="-1" role="dialog" aria-labelledby="modalTambahPeminjamanLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPPeminjamanLabel">Tambah Peminjaman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form tambah Peminjaman di sini -->
                @include ('admin.modal.peminjamanbuku')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="simpanPeminjaman">Simpan</button>
            </div>
        </div>
    </div>
</div>

        
 <!-- /.row -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Peminjaman</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                    <th>Nomor</th>
                    <th>ID Buku</th>
                      <th>Judul Buku</th>
                      <th>ID Anggota</th>
                      <th>Tanggal Pengembalian</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>121</td>
                      <td>Pengendalian Tanah oleh Pemerintah</td>
                      <td>11420057</td>
                      <td>20 Februari 2024</td>
                      <td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>140</td>
                      <td>Pemberatasan Korupsi</td>
                      <td>11420055</td>
                      <td>20 Februari 2024</td>              
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

 <!-- /.row -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Riwayat Peminjaman</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 200px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                    <th>Nomor</th>
                    <th>ID Buku</th>
                      <th>Judul Buku</th>
                      <th>ID Anggota</th>
                      <th>Tanggal Pengembalian</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>121</td>
                      <td>Pengendalian Tanah oleh Pemerintah</td>
                      <td>11420057</td>
                      <td>20 Februari 2024</td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>140</td>
                      <td>Pemberatasan Korupsi</td>
                      <td>11420055</td>
                      <td>20 Februari 2024</td>                  
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

@endsection