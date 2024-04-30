@extends('layouts.frontend.master')
@section('title', $compactDisk->title)
@section('content')
    <div class="title-container">
        <h2
            style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px; margin-left: 41px; margin-bottom: 3px;">
            {{ $compactDisk->title }}</h2>
        <p
            style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 500; line-height: 30px; margin-left: 41px; color: #494646; margin-top: 0;">
            {{ $compactDisk->author }}</p>
        <hr style="border-color: black; width: 95%; margin: 0 auto;">
    </div>
    <div class="card-container-book" style="height: 720px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4" style="display: flex; flex-direction: column; align-items: center;">
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        <img style="height: 362px; width: 259px" src="{{ $compactDisk->cover }}" alt="Deskripsi Gambar">
                    </div>
                    @auth
                        <div style="display: flex; flex-direction: column; align-items: center; margin-top: auto;">
                            <button class="btn"
                                style="width: 200px; background-color: #00FF38; font-family: 'Poppins', sans-serif; font-weight: 600;"
                                type="button" data-bs-toggle="modal" data-bs-target="#myModal">Pinjam</button>
                        </div>
                    @endauth
                </div>

                <div class="col-4">
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">ID</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->code }}</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Judul</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->title }}
                        </p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Bahasa</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->language }}</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Subjek</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->subject }}
                        </p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Pengarang</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->author }}
                        </p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Penerbit</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->publisher }}</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Deskipsi</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->description }}</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Jenis</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">Buku Teks</p>
                    </div>
                </div>
                <div class="col-4">
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Edisi</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->edition }}</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">ISBN</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->isbn }}
                        </p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Klasifikasi</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->classification }}</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Lokasi</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">Perpustakaan Lt.1
                        </p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Copy/Original
                        </p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">Original</p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Tahun</p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">
                            {{ $compactDisk->year }}
                        </p>
                    </div>
                    <div style="margin: 0 0 8px auto;">
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 700; margin-bottom: 3px;">Id Master Buku
                        </p>
                        <p style="font-family: 'Poppins', sans-serif; font-weight: 400; margin-top: 0;">-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
