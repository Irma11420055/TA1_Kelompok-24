@extends('Admin.template')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>CD/DVD</h1>
    <div>
        <button class="btn btn-secondary" style="background-color: #26C64B;">Laporan</button>
        <button class="btn btn-primary mr-2" data-toggle="modal" data-target="#tambahPengumumanModal">Tambah CD/DVD</button>
    </div>
</div>
<hr>

  @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
  @endif

<!-- Modal Tambah Pengumuman -->
<div class="modal fade" id="tambahPengumumanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah CD/DVD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Isi form tambah pengumuman di sini -->
        @include ('admin.modal.cddvd')
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
              <table id="tabelCdDvd" class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul CD/DVD</th>
                      <th>Tahun</th>
                      <th>Pengarang</th>
                      <th>Prodi</th>
                      <th>Sumber</th>
                      <th>Jenis Koleksi</th>
                      {{-- <th>Gambar</th>                       --}}
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_cddvd as $cddvd)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cddvd->judul }}</td>
                    <td>{{ $cddvd->tahun }}</td>
                    <td>{{ $cddvd->pengarang }}</td>
                    <td>{{ $cddvd->prodi }}</td>
                    <td>{{ $cddvd->sumber }}</td>
                    <td>{{ $cddvd->jenis_koleksi }}</td>
                    {{-- <td>GAMBAR</td> --}}

                    {{-- Edit --}}
                    <td>
                      <span class="icon-frame">
                        <a href="/admin/bahanpustaka/cddvd/{{ $cddvd->id }}" data-toggle="modal" data-target="#editCdDvdModal{{ $cddvd->id }}">
                          <i class="fas fa-pencil-alt" style="color:green;" title="Edit"></i>                          
                        </a>
                        </span>
                        <div class="modal fade" id="editCdDvdModal{{ $cddvd->id }}" tabindex="-1" role="dialog" aria-labelledby="editCdDvdModalLabel{{ $cddvd->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editCdDvdModalLabel">Edit CD/DVD</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include ('admin.modal-edit.cddvd')
                              </div>
                            </div>
                          </div>
                        </div>

                        {{-- Hapus --}}
                        <span class="icon-frame">
                          <a href="/admin/bahanpustaka/cddvd/{{ $cddvd->id }}" data-toggle="modal" data-target="#hapusCdDvdModal{{ $cddvd->id }}">
                            <i class="fas fa-trash-alt" style="color:red;" title="Hapus"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="hapusCdDvdModal{{ $cddvd->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusCdDvdModalLabel{{ $cddvd->id }}" aria-hidden="true">
                          {{-- Modal --}}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="hapusCdDvdModalLabel">Hapus CD/DVD</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">Anda yakin ingin menghapusnya?</div>
                              <form action="{{ route('bahanpustaka.delete', $cddvd->id) }}" method="post">
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
                          <a href="/admin/bahanpustaka/cddvd/{{ $cddvd->id }}" data-toggle="modal" data-target="#detailCdDvdModal{{ $cddvd->id }}">
                            <i class="fas fa-eye" style="color:blue;" title="Lihat Detail"></i>
                          </a>
                        </span>
                        <div class="modal fade" id="detailCdDvdModal{{ $cddvd->id }}" tabindex="-1" role="dialog" aria-labelledby="detailCdDvdModalLabel{{ $cddvd->id }}" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="detailCdDvdModalLabel">Detail CD/DVD</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                @include ('admin.modal-detail.cddvd')
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