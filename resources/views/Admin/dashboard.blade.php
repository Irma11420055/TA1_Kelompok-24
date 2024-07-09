@extends('Admin.template')
@section('content')
    <?php
    // Set zona waktu ke WIB (Indonesia Barat)
    date_default_timezone_set('Asia/Jakarta');
    ?>
    <h3 style="margin-left: 7px; margin-bottom: 25px;">
        <b>
        {{ date('l, Y-m-d H:i:s') }}
        </b>
    </h3>
    
    <div class="container mt-4" style="margin-top: 100px; margin-left: 2px; text-align: center; font-weight: bold; "> 
    <div class="row">
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                    <h4><b>
                    Pengunjung
                    </b></h4>
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    170
                </div>
            </div>
        </div>
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                <h4><b>
                Total Peminjaman 
                </b></h4>
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    {{ $pemesanan_count + $peminjaman_count }}
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-0">
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                <h4><b>
                Pemesanan
                </b></h4>
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    {{ $pemesanan_count }}
                </div>
            </div>
        </div>
        <div class="col-md-6"> <!-- Mengubah ukuran kolom -->
            <div class="card">
                <div class="card-header">
                <h4><b>
                Peminjaman 
                </b></h4>                
                </div>
                <div class="card-body" style="font-size: 24px; color: #20A9C7">
                    {{ $peminjaman_count }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4><b>
                    Pengumuman
                    </b></h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPengumumanModal">Tambah Pengumuman</button>
                    </div>
                    <div class="modal fade" id="tambahPengumumanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <!-- Isi form tambah pengumuman di sini -->
                              @include ('admin.modal.pengumuman')
                            </div>
                          </div>
                        </div>
                      </div>
                                          {{-- <a href="/admin/pengumuman" class="btn btn-primary d-inline-flex align-items-center">
                        <i class="fas fa-plus mr-2"></i> <!-- Margin-right untuk memberikan jarak antara ikon dan teks -->
                        <h5 class="mb-0">Tambah Pengumuman</h5> <!-- Margin-bottom 0 untuk menghilangkan ruang bawah pada teks -->
                    </a> --}}
                </div>
                        <div style="margin-left: 30px; text-align: left;">
                            @foreach ($data_pengumumann as $pengumuman)
                                <h5>{{ $pengumuman->isi }}</h5>
                            @endforeach
                        </div>
                        <div style="position: absolute; bottom: 0; right: 0; margin-right: 10px;">
                            <a href="/admin/pengumuman" class="btn btn-link"><h5>Lihat Selengkapnya</h5></a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

@endsection
