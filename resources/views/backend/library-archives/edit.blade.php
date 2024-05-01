@extends('layouts.backend.master')
@if ($type == 'rules')
    @section('title', 'Edit Peraturan Perpustakaan')
@elseif($type == 'guidelines')
    @section('title', 'Edit Panduan Pesan Pinjam')
@elseif($type == 'achievements')
    @section('title', 'Edit Penghargaan')
@endif
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('backend.library-archives.index', $type) }}">
                @if ($type == 'rules')
                    Peraturan Perpustakaan
                @elseif($type == 'guidelines')
                    Panduan Pesan Pinjam
                @elseif($type == 'achievements')
                    Penghargaan
                @endif
            </a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('backend.library-archives.update', [$type, encodeId($libraryArchive->id)]) }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h3 class="card-title">Edit Arsip Perpustakaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title" class="col-form-label @error('title') text-danger @enderror">
                                            Judul Arsip
                                        </label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title"
                                            value="{{ old('title', $libraryArchive->title) }}">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description"
                                            class="col-sm-2 col-form-label @error('description') text-danger @enderror">
                                            File
                                        </label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"
                                                    class="custom-file-input @error('file') is-invalid @enderror"
                                                    id="file" name="file" accept="application/pdf">
                                                <label class="custom-file-label" for="file">Choose file</label>
                                            </div>
                                        </div>
                                        @error('file')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
