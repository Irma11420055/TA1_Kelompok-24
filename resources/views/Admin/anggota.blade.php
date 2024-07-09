@extends('Admin.template')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Anggota</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahAnggotaModal">Tambah Anggota</button>
</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

{{-- Tambah --}}
<div class="modal fade" id="tambahAnggotaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.anggota')
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
                      <th>Nama</th>
                      <th>No Anggota</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Batas Buku</th>
                      <th>Jabatan</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_anggota as $anggota)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $anggota->nama }}</td>
                      <td>{{ $anggota->no_anggota }}</td>
                      <td>{{ $anggota->email }}</td>
                      <td>{{ $anggota->jurusan }}</td>
                      <td>{{ $anggota->batas_buku->batas_buku }}</td>
                      <td>{{ $anggota->jabatan }}</td>
                      <td>{{ $anggota->status }}</td>
                      <td>
                        {{-- Edit --}}
                        <span class="icon-frame">
                          <a href="/admin/anggota/{{ $anggota->id }}" data-toggle="modal" data-target="#editAnggotaModal{{ $anggota->id }}">
                            <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>                            
                          </a>
                        </span>
                        <div class="modal fade" id="editAnggotaModal{{ $anggota->id }}" tabindex="-1" role="dialog" aria-labelledby="editAnggotaModalLabel{{ $anggota->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editAnggotaModalLabel">Edit Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include ('admin.modal-edit.anggota')
                              </div>
                            </div>
                          </div>
                        </div>

                        {{-- Hapus --}}
                        <span class="icon-frame">
                          <a href="/admin/anggota/{{ $anggota->id }}" data-toggle="modal" data-target="#hapusAnggotaModal{{ $anggota->id }}">
                            <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="hapusAnggotaModal{{ $anggota->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusAnggotaModalLabel{{ $anggota->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="hapusAnggotaModalLabel">Hapus Anggota</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                              <form action="{{ route('anggota.delete', $anggota->id) }}" method="post">
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
                          <a href="/admin/anggota/{{ $anggota->id }}" data-toggle="modal" data-target="#detailAnggotaModal{{ $anggota->id }}">
                            <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="detailAnggotaModal{{ $anggota->id }}" tabindex="-1" role="dialog" aria-labelledby="detailAnggotaModalLabel{{ $anggota->id }}" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailAnggotaModalLabel">Detail Anggota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include ('admin.modal-detail.anggota')
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