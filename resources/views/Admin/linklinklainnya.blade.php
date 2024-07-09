@extends('Admin.template')
@section('content')


<div class="d-flex justify-content-between align-items-center">
    <h1>Link-Link Lainnya</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahLinkModal">Tambah Link</button>
</div>
<hr>

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

{{-- Tambah --}}
<div class="modal fade" id="tambahLinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Link-Link Lainnya</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include ('admin.modal.linklinklainnya')
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
                  <form action="{{ route('link.index') }}" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search" value="{{ request('search') }}">

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
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Link</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_link_link_lainnya as $data)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->nama }}</td>
                      <td>{{ $data->link }}</td>

                      {{-- Edit --}}
                      <td>
                      <span class="icon-frame">
                        <a href="/admin/linklinklainnya/{{ $data->id }}" data-toggle="modal" data-target="#editLinkModal{{ $data->id }}">
                          <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>
                        </a>
                      </span>
                      <div class="modal fade" id="editLinkModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editLinkModalLabel{{ $data->id }}" aria-hidden="true">
                        {{-- Modal --}}
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editLinkModalLabel">Edit Link-Link Lainnya</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              @include ('admin.modal-edit.linklinklainnya')
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- Hapus --}}
                        <span class="icon-frame">
                          <a href="/admin/linklinklainnya/{{ $data->id }}" data-toggle="modal" data-target="#hapusLinkModal{{ $data->id }}">
                            <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="hapusLinkModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusLinkModalLabel{{ $data->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="hapusLinkModalLabel">Hapus Link</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                              <form action="{{ route('link.delete', $data->id) }}" method="post">
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
                            <a href="https://{{ $data->link }}" target="_blank"><i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i></a>
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