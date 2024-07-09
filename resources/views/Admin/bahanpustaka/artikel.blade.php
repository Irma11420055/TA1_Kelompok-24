@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Artikel</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahArtikelModal">Tambah Artikel</button>
</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

{{-- Tambah --}}
<div class="modal fade" id="tambahArtikelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.artikel')
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
                    @foreach ($data_artikel as $artikel)                
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $artikel->judul }}</td>
                      <td>{{ Str::limit($artikel->isi, 80, '...') }}</td>
                      {{-- <td><span class="tag tag-success">GAMBAR</span></td> --}}
                      
                      {{-- Edit --}}
                      <td>
                        <span class="icon-frame">
                          <a href="/admin/bahanpustaka/artikel/{{ $artikel->id }}" data-toggle="modal" data-target="#editArtikelModal{{ $artikel->id }}">
                            <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="editArtikelModal{{ $artikel->id }}" tabindex="-1" role="dialog" aria-labelledby="editArtikelModalLabel{{ $artikel->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editArtikelModalLabel">Edit Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include ('admin.modal-edit.artikel')
                              </div>
                            </div>
                          </div>
                        </div>

                        {{-- Hapus --}}
                        <span class="icon-frame">
                          <a href="/admin/bahanpustaka/artikel/{{ $artikel->id }}" data-toggle="modal" data-target="#hapusArtikelModal{{ $artikel->id }}">
                            <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="hapusArtikelModal{{ $artikel->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusArtikelModalLabel{{ $artikel->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="hapusArtikelModalLabel">Hapus Artikel</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                              <form action="{{ route('bahanpustaka.delete', $artikel->id) }}" method="post">
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
                          <a href="/admin/bahanpustaka/artikel/{{ $artikel->id }}" data-toggle="modal" data-target="#detailArtikelModal{{ $artikel->id }}">
                            <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="detailArtikelModal{{ $artikel->id }}" tabindex="-1" role="dialog" aria-labelledby="detailArtikelModalLabel{{ $artikel->id }}" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailArtikelModalLabel">Detail Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include ('admin.modal-detail.artikel')
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