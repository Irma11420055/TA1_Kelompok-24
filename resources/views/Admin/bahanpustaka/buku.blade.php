@extends('Admin.template')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Buku</h1>
    <div>
        <button class="btn btn-secondary" style="background-color: #26C64B;">Laporan</button>
        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#tambahBukuModal">Tambah Buku</button>
    </div>
</div>
<hr>

  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
  @endif

{{-- Tambah --}}
<div class="modal fade" id="tambahBukuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @csrf
      <div class="modal-body">
        @include ('admin.modal.buku')
      </div>
    </div>
  </div>
</div>

 <!-- /.row -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <h3 class="card-title">Total Buku : {{ $total_judul }} Judul, {{ $total_buku }} Eksemplar</h3>
                <div class="card-tools">
                  <form action="/admin/bahanpustaka/buku" method="get">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" id="search" name="table_search" class="form-control float-right" placeholder="Search" value="{{ request('table_search') }}">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 650px;">
              <table id="tabelBuku" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Buku</th>
                      <th>Bahasa</th>
                      <th>Subjek</th>
                      <th>Edisi</th>
                      <th>Pengarang</th>
                      <th>Penerbit</th>
                      <th>Tahun</th>   
                      {{-- <th>Gambar</th> --}}
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_buku as $buku)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $buku->judul_buku->judul_buku }}</td>
                      <td>{{ $buku->bahasa }}</td>
                      <td>{{ $buku->subjek }}</td>
                      <td>{{ $buku->edisi }}</td>
                      <td>{{ $buku->pengarang }}</td>
                      <td>{{ $buku->penerbit }}</td>
                      <td>{{ $buku->tahun }}</td>
                      {{-- <td><img src="{{ $buku->gambar }}" alt=""></td> --}}

                      {{-- Edit --}}
                      <td>
                        <span class="icon-frame">
                          <a href="/admin/bahanpustaka/buku/{{ $buku->id }}" data-toggle="modal" data-target="#editBukuModal{{ $buku->id }}">
                            <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                        </a>
                        
                        </span>
                        <div class="modal fade" id="editBukuModal{{ $buku->id }}" tabindex="-1" role="dialog" aria-labelledby="editBukuModalLabel{{ $buku->id }}" aria-hidden="true">
                          <!-- Modal -->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editBukuModalLabel">Edit Buku</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                      @include ('admin.modal-edit.buku')

                      {{-- Hapus --}}
                      <span class="icon-frame">
                        <a href="#" data-toggle="modal" data-target="#hapusBukuModal{{ $buku->id }}">
                        <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                        </a>
                      </span>
                      <div class="modal fade" id="hapusBukuModal{{ $buku->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusBukuModalLabel{{ $buku->id }}" aria-hidden="true">
                        <!-- Modal -->
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="hapusBukuModalLabel">Hapus Buku</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                    <div class="modal-body">
                                    Anda yakin ingin menghapusnya?
                                    </div>
                                    <form action="{{ route('bahanpustaka.delete', $buku->id) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                      </div>
                                    </form>
                              </div>
                          </div>
                      </div>

                      {{-- Detail --}}
                          <span class="icon-frame">
                            <a href="#" data-toggle="modal" data-target="#detailBukuModal{{ $buku->id }}">
                              <i class="fas fa-eye" style="color:blue;" title="Detail"></i>
                            </a>
                          </span>
                          <div class="modal fade" id="detailBukuModal{{ $buku->id }}" tabindex="-1" role="dialog" aria-labelledby="detailBukuModalLabel{{ $buku->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="detailBukuModalLabel">Detail Buku</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                    @include ('admin.modal-detail.buku')
                          </div>

                          </td>
                      </tr>
                    @endforeach
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