@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Pengumuman</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPengumumanModal">Tambah Pengumuman</button>
</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

<!-- Tambah -->
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
                      <th>No</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      {{-- <th>Gambar</th> --}}
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_pengumuman as $pengumuman) 
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $pengumuman->judul, 20 }}</td>
                      <td> {{ Str::limit($pengumuman->isi, 50, '...' ) }}</td>
                      {{-- <td><span class="tag tag-success">GAMBAR</span></td> --}}
                      <td>

                      {{-- Edit --}}
                      <span class="icon-frame">
                        <a href="/admin/pengumuman/{{ $pengumuman->id }}" data-toggle="modal" data-target="#editPengumumanModal{{ $pengumuman->id }}">
                          <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                        </a>
                      </span>
                      <div class="modal fade" id="editPengumumanModal{{ $pengumuman->id }}" tabindex="-1" role="dialog" aria-labelledby="editPengumumanModalLabel{{ $pengumuman->id }}" aria-hidden="true">
                        {{-- Modal --}}
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editPengumumanModalLabel">Edit Pengumuman</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              @include ('admin.modal-edit.pengumuman')
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- Hapus --}}
                      <span class="icon-frame">
                        <a href="/admin/pengumuman/{{ $pengumuman->id }}" data-toggle="modal" data-target="#hapusPengumumanModal{{ $pengumuman->id }}">
                          <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                        </a>
                      </span>
                      <div class="modal fade" id="hapusPengumumanModal{{ $pengumuman->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusPengumumanModalLabel{{ $pengumuman->id }}" aria-hidden="true">
                        {{-- Modal --}}
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="hapusPengumumanModalLabel">Hapus Pengumuman</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                            <form action="{{ route('pengumuman.delete', $pengumuman->id) }}" method="post">
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
                        <a href="/admin/pengumuman/{{ $pengumuman->id }}" data-toggle="modal" data-target="#detailPengumumanModal{{ $pengumuman->id }}">
                          <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                        </a>
                      </span>
                      <div class="modal fade" id="detailPengumumanModal{{ $pengumuman->id }}" tabindex="-1" role="dialog" aria-labelledby="detailPengumumanModalLabel{{ $pengumuman->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="detailPengumumanModalLabel">Detail Pengumuman</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              @include ('admin.modal-detail.pengumuman')
                            </div>
                          </div>
                        </div>
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