@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Peraturan Perpustakaan</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahPeraturanPerpusModal">Tambah Peraturan Perpus</button>
</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

{{-- Tambah --}}
<div class="modal fade" id="tambahPeraturanPerpusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.peraturanperpustakaan')
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
                    @foreach ($data_peraturan as $peraturan)
                    <tr>
                      <td>PPITDEL/{{ $peraturan->created_at->year }}/{{ $peraturan->created_at->month }}/{{ $peraturan->created_at->day }}/{{ $loop->iteration }}</td>
                      <td>{{ $peraturan->judul }}</td>
                      <td>{{ Str::limit($peraturan->file, 50, '...') }}</td>
                      <td>
                      <span class="icon-frame">
                      <button style="background-color: #6C757D; color: white; border: none; padding: 5px 10px; cursor: pointer;">
                        Gunakan
                      </button>          
                      </span>

                      {{-- Hapus --}}
                        <span class="icon-frame">
                          <a href="/admin/tentangperpus/peraturanperpustakaan/{{ $peraturan->id }}" data-toggle="modal" data-target="#hapusPeraturanModal{{ $peraturan->id }}">
                            <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="hapusPeraturanModal{{ $peraturan->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusPeraturanModalLabel{{ $peraturan->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="hapusPeraturanModalLabel">Hapus Peraturan Perpustakaan</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                              <form action="{{ route('peraturan.delete', $peraturan->id) }}" method="post">
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

                        {{-- Lihat Detail (belum selesai)--}}
                        <span class="icon-frame">
                            <a href="https://{{ $peraturan->file }}" download="nama_file" target="_blank"><i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i></a>
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