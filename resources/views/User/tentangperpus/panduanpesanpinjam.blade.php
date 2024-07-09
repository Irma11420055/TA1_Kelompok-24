@extends('User.template')
@section('content')

<div class="title-container">
    <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">Panduan Pesan Pinjam</h1>
    <div style="position: relative;">
        <hr style="height: 4px; 
            border-top-width: 1px;
            border-color: 3px solid #6F410B; 
            margin: 20px auto;
            border-radius: 20px;
            width: 17%;">
    </div>
</div>


<div class="card" style="background-color: #E7E7E7; padding: 40px;">
<div class="isi">
    <strong>Informasi Umum Terkait Pesan Pinjam di Perpustaaan IT Del :</strong><br>
    Sistem Informasi Perpustakaan IT Del ini dibangun untuk mempermudah peminjaman barang perpustakaan. Ada beberapa informasi umum terkait proses peminjaman barang di perpustakaan, yaitu sebagai berikut.    <ol>
    </ol>

    <strong>Peminjaman Buku </strong>
    <ol>
        <li>Dosen : 8 judul (2 minggu & 1 semester)</li>
        <li>Staf     : 5 judul (2 minggu)</li>
        <li>Mahasiswa : 4 judul (1 minggu)</li>
    </ol>

    <strong>Denda Keterlambatan Pengembalian Buku</strong> per hari Rp.2000
</div>

    <div class="card" style="background-color: #E7E7E7; padding: 40px; display: flex; justify-content: space-between;">

        <!-- Sub Card 1 -->
        <div class="sub-card-user">
            <!-- Gambar Card 1 -->
            <!--<img src="{{ asset('dist/img/dongengnusantara.PNG') }}" style="width: 30%; height: 100%; margin-bottom: 10px;" alt="Deskripsi Gambar">-->

            <!-- Judul Card 1 -->
            <h6 style="margin-left: 10px;">Cara 1</h6>
        </div>

        <i class="fas fa-chevron-right fa-lg" style="color: #000000; margin: auto; margin-right: 20px;"></i>

        <!-- Sub Card 2 -->
        <div class="sub-card-user">
            <!-- Gambar Card 2 -->
            <!--<img src="{{ asset('dist/img/ceritarakyatnusantara.PNG') }}" style="width: 30%; height: 100%; margin-bottom: 10px;" alt="Deskripsi Gambar">-->

            <!-- Judul Card 2 -->
            <h6 style="margin-left: 10px;">Cara 2</h6>
        </div>

        <i class="fas fa-chevron-right fa-lg" style="color: #000000; margin: auto; margin-right: 20px;"></i>

        <!-- Sub Card 3 -->
        <div class="sub-card-user">
            <!-- Gambar Card 3 -->
            <!--<img src="{{ asset('dist/img/dilan.PNG') }}" style="width: 30%; height: 100%; margin-bottom: 10px;" alt="Deskripsi Gambar"> -->

            <!-- Judul Card 3 -->
            <h6 style="margin-left: 10px;">Cara 3</h6>
        </div>

        <i class="fas fa-chevron-right fa-lg" style="color: #000000; margin: auto; margin-right: 20px;"></i>

        <!-- Sub Card 4 -->
        <div class="sub-card-user">
            <!-- Gambar Card 4 -->
            <!--<img src="{{ asset('dist/img/milea.PNG') }}" style="width: 30%; height: 100%; margin-bottom: 10px;" alt="Deskripsi Gambar">-->

            <!-- Judul Card 4 -->
            <h6 style="margin-left: 10px;">Cara 4</h6>
        </div>

    </div>
</div>

</div>
@endsection
