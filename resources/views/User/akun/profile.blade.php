@extends('User.template')
@section('content')

<h2 style="color: #6F410B; text-align: center; padding-top: 1px;">Profil</h2>
<hr style="border-color: #6F410B; margin-bottom: 30px; width: 20%;">

<div class="card" style="background-color: #E7E7E7; padding: 40px;">

<div style="max-width: 650px; margin: 0 auto; display: flex; justify-content: space-between;"> <!-- Mengatur lebar maksimum untuk konten dan menggunakan flexbox untuk penempatan gambar dan teks -->
        <div style="align-self: center;"> <!-- Mengatur teks profil -->
            <p><strong>Nama           :</strong> {{ auth()->user()->nama }}</p>
            <hr>
            <p><strong>NIM            :</strong> {{ auth()->user()->no_anggota }}</p>
            <hr>
            <p><strong>Program Studi  :</strong> {{ auth()->user()->jurusan }}</p>
            <hr>
        </div>
        <div style="align-self: flex-end; margin-left: 50px;"> <!-- Mengatur margin antara gambar dan teks -->
            <img src="{{ asset('dist/img/profil2.JPG') }}" style="max-width: 180px; "> <!-- Ganti url_gambar_anda dengan URL gambar Anda -->
        </div>
    </div>
</div>

@endsection
