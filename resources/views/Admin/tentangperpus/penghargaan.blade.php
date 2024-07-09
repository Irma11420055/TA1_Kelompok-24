@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Penghargaan</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPenghargaanModal">Tambah Penghargaan</button>
</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

{{-- Tambah --}}
<div class="modal fade" id="tambahPenghargaanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Penghargaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.penghargaan')
      </div>
    </div>
  </div>
</div>

 <!-- /.row -->
 <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

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
              <div class="card-body table-responsive p-0" style="height: 650px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Judul</th>
                      <th>File</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_penghargaan as $penghargaan)
                    <tr>
                      <td>PITDEL//{{ $penghargaan->created_at->year }}/{{ $penghargaan->created_at->month }}/{{ $penghargaan->created_at->day }}/{{ $loop->iteration }}</td>
                      <td>{{ $penghargaan->judul }}</td>
                      <td>{{ Str::limit($penghargaan->file, 50, '...') }}</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>                        
                      </span>

                      {{-- Hapus --}}
                      <span class="icon-frame">
                        <a href="/admin/tentangperpus/penghargaan/{{ $penghargaan->id }}" data-toggle="modal" data-target="#hapusPenghargaanModal{{ $penghargaan->id }}">
                           <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                        </a>
                      </span>
                      <div class="modal fade" id="hapusPenghargaanModal{{ $penghargaan->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusPenghargaanModalLabel{{ $penghargaan->id }}" aria-hidden="true">
                        {{-- Modal --}}
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="hapusPenghargaanModalLabel">Hapus Penghargaan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                            <form action="{{ route('penghargaan.delete', $penghargaan->id) }}" method="post">
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
                            <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                        </span>
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