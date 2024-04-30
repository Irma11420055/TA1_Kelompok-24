@extends('layouts.backend.master')
@if ($type == 'rules')
    @section('title', 'Peraturan Perpustakaan')
@elseif($type == 'guidelines')
    @section('title', 'Panduan Pesan Pinjam')
@elseif($type == 'achievements')
    @section('title', 'Penghargaan')
@endif
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('backend.library-archives.index', $type) }}">
                @if ($type == 'rules')
                    Peraturan Perpustakaan
                @elseif($type == 'guidelines')
                    Panduan Pesan Pinjam
                @elseif($type == 'achievements')
                    Penghargaan
                @endif
            </a>
        </li>
        <li class="breadcrumb-item active">
            Detail
            @if ($type == 'rules')
                Peraturan Perpustakaan
            @elseif($type == 'guidelines')
                Panduan Pesan Pinjam
            @elseif($type == 'achievements')
                Penghargaan
            @endif
        </li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail
                            @if ($type == 'rules')
                                Peraturan Perpustakaan
                            @elseif($type == 'guidelines')
                                Panduan Pesan Pinjam
                            @elseif($type == 'achievements')
                                Penghargaan
                            @endif
                        </h3>
                        <div class="card-tools">
                            <a href="{{ route('backend.library-archives.index', $type) }}"
                                class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="number">No. Dokumen</label>
                            <input type="text" name="number" id="number" class="form-control"
                                value="{{ $libraryArchive->number }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $libraryArchive->title }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="file">File</label>
                            <br>
                            <embed type="application/pdf" width="100%" height="600px" id="file">
                        </div>

                        <div class="form-group">
                            <label for="active">Status</label>
                            <input type="text" name="active" id="active" class="form-control"
                                value="{{ $libraryArchive->active == 1 ? 'Aktif' : 'Tidak Aktif' }}" readonly>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            var file = document.getElementById('file');
            var fileUrl = '{{ $libraryArchive->file }}';
            file.src = 'https://drive.google.com/viewerng/viewer?embedded=true&url=' + fileUrl;
        });
    </script>
@endpush
