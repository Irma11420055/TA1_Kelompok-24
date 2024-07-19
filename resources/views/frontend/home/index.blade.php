@extends('layouts.frontend.master')
@section('title', 'Home')
@push('styles')
    <style>
        .swiper-slide {
            display: flex;
            justify-content: center;
        }

        .dz-card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .dz-media {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dz-media img {
            max-width: 100%;
            max-height: 100%;
        }

        .dz-info {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .dz-title {
            margin-bottom: 10px;
        }

        .dz-description {
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 10px;
        }

        .dz-meta {
            margin-top: auto;
        }

        .dz-tags {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .dz-tags li {
            margin-right: 10px;
        }

        .dz-tags li i {
            color: #ff9d33;
            margin-right: 5px;
        }
    </style>
    <style>
        .swiper-slide {
            display: flex;
            justify-content: center;
        }

        .dz-card {
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dz-media {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dz-media img {
            max-width: 100%;
            max-height: 100%;
        }

        .dz-info {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .dz-title {
            margin-bottom: 10px;
            font-size: 20px;
            color: #333;
        }

        .dz-description {
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 10px;
        }

        .dz-meta {
            margin-top: auto;
        }

        .dz-tags {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .dz-tags li {
            margin-right: 10px;
        }

        .dz-tags li a {
            color: #666;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
    <style>
        #bg-transparent {
            background-color: rgba(0, 0, 0, 0.5);
            /* background-color: black; */
            /* Warna hitam dengan 50% transparansi */
        }
    </style>
@endpush
@section('content')
    <div class="page-content bg-white">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active mt-1 mt-md-0">
                    <img src="{{ 'frontend/images/header_2.jpg' }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption mt-5 mt-md-0">
                        <div class="card" id="bg-transparent">
                            <h6 class="fw-bold text-white mt-2">Jam Operasional</h6>
                            {{-- UNTUK MOBILE --}}
                            <style>
                                .d-block.d-md-none p {
                                    font-size:8px; /* Ubah ukuran font sesuai kebutuhan */
                                }
                            </style>
                            <div class="d-block d-md-none">
                                <p>Senin s/d Jumat : 08.00 WIB s/d 17.00 WIB<p>
                                <p>19.00 WIB s/d 21.30 WIB</p>
                                <p>Sabtu : 08.00 WIB s/d 12.00 WIB</p>
                            </div>
                            {{-- UNTUK DESKTOP --}}
                            <div class="d-none d-md-block">
                                <p style="font-weight: bold;">Senin s/d Jum'at</p>
                                <p>08.00 WIB s/d 17.00 WIB</p>
                                <p>19.00 WIB s/d 21.30 WIB</p>
                                <p style="font-weight: bold;">Sabtu</p>
                                <p>08.00 WIB s/d 12.00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LAYANAN PERPUSTAKAAN IT DEL-->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Informasi Layanan Perpustakaan IT DEL</h2>
                    <div class="pagination-align style-1">
                        <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i>
                        </div>
                        <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-container book-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/melihatbahanpustaka.PNG') }}"
                                        alt="Melihat Pustaka">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Referensi</h4>
                                    <p class="dz-description">Perpustakaan menyediakan bantuan kepada anggota perpustakaan dalam mencari informasi dan sumber referensi untuk keperluan penelitian, pembelajaran, atau kegiatan lainnya. Layanan ini mencakup bantuan dalam melakukan pencarian informasi dalam katalog perpustakaan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/meminjambuku.PNG') }}"
                                        alt="Layanan Peminjaman Buku">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Cek Plagiarism</h4>
                                    <p class="dz-description"> Perpustakaan menyediakan layanan yang memungkinkan anggota perpustakaan, untuk memeriksa keaslian karya tulis. Layanan ini bertujuan untuk mencegah plagiarisme, petugas perpustakaan akan membantu pengguna dalam menggunakan alat cek plagiarisme, dan menjelaskan hasil laporan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/cetakdokumen.PNG') }}"
                                        alt="Layanan Cetak Dokumen">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Cetak Dokumen</h4>
                                    <p class="dz-description">Perpustakaan menyediakan mesin pencetak seperti printer untuk mencetak berbagai jenis dokumen bagi anggota perpustakaan, contohnya dokumen Sidang Project Akhir, Tugas Akhir, Skripsi, Kerja praktik dan kebutuhan dokumen yang lain seperti Surat Izin Keluar Kampus, Izin Bermalam,  dan lainnya.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/ruangdiskusi.PNG') }}"
                                        alt="Memiliki Ruang Diskusi">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Grammarly</h4>
                                    <p class="dz-description">Perpustakaan menyediakan layanan yang dapat membantu anggota perpustakaan dalam meningkatkan tata bahasa, dan gaya penulisan dalam penelitian sebelum di publikasikan. Petugas akan memberikan panduan kepada anggota perpustakaan agar dapat mengakses premiumke Grammarly.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/meminjambuku.PNG') }}"
                                        alt="Layanan Peminjaman Buku">
                                </div>
                                
                                <div class="dz-info">
                                    <h4 class="dz-title">Ruang Audio Visual</h4>
                                    <p class="dz-description">Perpustakaan menyediakan akses dan penggunaan perangkat teknologi untuk memutar dan menonton konten audio dan visua. Anggota Perpustakaan dapat memanfaatkan layanan ini untuk latihan listening Toefl, presentasi multimedia, atau melakukan penelitian terkait dengan media audio visual.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/ruangdiskusi.PNG') }}"
                                        alt="Memiliki Ruang Diskusi">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Sirkulasi</h4>
                                    <p class="dz-description">Layanan ini mencakup proses peminjaman buku, CD/DVD, dan materi lainnya. Anggota dapat memanfaatkan koleksi tersebut untuk jangka waktu tertentu sesuai dengan kebijakan perpustakaan. Layanan ini juga mencakup penagihan denda atas bahan pustakan yang terlambat dikembalikan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/meminjambuku.PNG') }}"
                                        alt="Layanan Peminjaman Buku">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Baca Ditempat</h4>
                                    <p class="dz-description">Anggota perpustakaan dapat menggunakan koleksi buku, jurnal, majalah, dan materi lainnya yang tersedia di perpustakaan untuk tujuan studi, penelitian, atau membaca untuk kesenangan. Perpustakaan juga menyediakan akses internet gerati bari para pembaca yang berada di perpustakaan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/cetakdokumen.PNG') }}"
                                        alt="Layanan Cetak Dokumen">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Exit Clearance</h4>
                                    <p class="dz-description">Layanan ini mencakup pemeriksaan terhadap semua pinjaman yang masih berstatus aktif, penyelesaian denda atau biaya terkait yang belum diselesaikan, dan pengembalian semua bahan pustaka yang dipinjam. Prosedur ini bertujuan untuk memastikan bahwa koleksi perpustakaan terjaga dengan baik.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/ruangdiskusi.PNG') }}"
                                        alt="Memiliki Ruang Diskusi">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Gray Literature</h4>
                                    <p class="dz-description">Perpustakaan menyediakan layanan gray litratur, gray literatur merupakan dokumen yang tidak di terbitkan secara komersial seperti dokumen Tugas Akhir, Project Akhir dan Kerja Praktik. Dokumen ini hanya dapat di gunakan di dalam perpustakaan tidak untuk di pinjamkan dan di bawa keluar dari area perpustakaan.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/cetakdokumen.PNG') }}"
                                        alt="Layanan Cetak Dokumen">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Literasi Informasi</h4>
                                    <p class="dz-description">Layanan ini mencakup pelatihan dan pendidikan mengenai bagaimana cara mencari dan menilai sumber-sumber informasi yang akurat dan dapat dipercaya, serta bagaimana cara menghindari plagiarisme dan menghormati hak cipta. Biasanya di lakukan seperti webinar, dan pelatihan lainnya.</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{ asset('frontend/dist/img/ruangdiskusi.PNG') }}"
                                        alt="Memiliki Ruang Diskusi">
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title">Layanan Ekstensi</h4>
                                    <p class="dz-description">Layanan ekstensi yang dilakukan perpustakaan IT DEL salah satunya adalah perpustakaan keliling. Tujuannya adalah untuk meningkatkan akses bahan pustaka kepada orang orang diluar anggota perpuskataan yang membutuhkan namun tidak dapat langsung datang ke gedung perpustakaan.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- LAYANAN PERPUSTAKAAN IT DEL -->

        <!-- BUKU DENGAN RATING TERTINGGI -->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Buku Dengan Rating Tertinggi</h2>
                    @if (count($bestBooks) > 3)
                        <div class="pagination-align style-1">
                            <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                            <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    @endif
                </div>
                <div class="swiper-container book-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($bestBooks as $book)
                            <div class="swiper-slide">
                                <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                    <a href="{{ route('books.show', $book->slug) }}" class="dz-media d-flex justify-content-center align-items-center">
                                        <img src="{{ $book->cover }}" alt="Deskripsi Gambar" class="w-100" onerror="this.onerror=null; this.src='https://lancangkuning.com/image/NoImage.png';">
                                    </a>
                                    <div class="dz-info">
                                        <h4 class="dz-title"><a href="{{ route('books.show', $book->slug) }}">{{ $book->title }}</a></h4>
                                        <p class="dz-description">{{ $book->description }}</p>
                                        <div class="dz-meta">
                                            <ul class="dz-tags">
                                                <li><i class="fas fa-fire fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>{{ $book->subject }}</li>
                                                <li><i class="fas fa-star fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>{{ $book->rating }}</li>
                                                <li><i class="fas fa-pencil fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>{{ $book->author }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- BUKU DENGAN RATING TERTINGGI -->

        <!-- INFORMASI PENGUNJUNG -->
        <section class="content-inner-2 mb-4">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">INFORMASI PENGUNJUNG PERPUSTAKAAN</h2>
                </div>
                <div class="row mt-0">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="container">
                            <span class="fw-bold d-flex justify-content-center" style="color: #1a1668">Jumlah
                                Pengunjung/Hari</span>
                            <canvas id="pengunjungChartPerhari"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="container">
                            <span class="fw-bold d-flex justify-content-center" style="color: #1a1668">Jumlah Pengunjung
                                Prodi</span>
                            <canvas id="pengunjungChartProdi"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="container">
                            <span class="fw-bold d-flex justify-content-center" style="color: #1a1668">Jumlah
                                Peminjaman/Hari</span>
                            <canvas id="peminjamanChartPerhari"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="container">
                            <span class="fw-bold d-flex justify-content-center" style="color: #1a1668">Jumlah
                                Peminjaman/Role</span>
                            <canvas id="peminjamanChartPerrole"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                        <div class="container">
                            <span class="fw-bold d-flex justify-content-center" style="color: #1a1668">Jumlah
                                Peminjaman/Prodi</span>
                            <canvas id="peminjamanChartPerprodi"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- INFORMASI PENGUNJUNG -->
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- Pengunjung/Hari --}}
    <script>
        const ctxPerhari = document.getElementById('pengunjungChartPerhari').getContext('2d');
        const pengunjungChartPerhari = new Chart(ctxPerhari, {
            type: 'bar',
            data: {!! json_encode($pengunjungChartPerhari) !!},
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- Pengunjung/Prodi --}}
    <script>
        $(document).ready(function() {
            const ctxProdi = document.getElementById('pengunjungChartProdi').getContext('2d');
            const pengunjungChartProdi = new Chart(ctxProdi, {
                type: 'bar',
                data: {!! json_encode($pengunjungChartProdi) !!},
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    {{-- Peminjaman/Hari --}}
    <script>
        $(document).ready(function() {
            const ctxPeminjamanPerhari = document.getElementById('peminjamanChartPerhari').getContext('2d');
            const peminjamanChartPerhari = new Chart(ctxPeminjamanPerhari, {
                type: 'bar',
                data: {!! json_encode($peminjamanChartPerhari) !!},
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
    {{-- Peminjaman/Role/Bulan --}}
    <script>
        const ctxPeminjamanPerrolePerbulan = document.getElementById('peminjamanChartPerrole').getContext('2d');
        const peminjamanChartPerrole = new Chart(ctxPeminjamanPerrolePerbulan, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: 'Lecturer',
                        data: [30, 40, 55, 60, 70, 80, 75, 85, 90, 95, 100, 110],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Student',
                        data: [10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65],
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Staff',
                        data: [5, 7, 10, 12, 15, 17, 20, 22, 25, 27, 30, 32],
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    {{-- Peminjaman/Prodi/Bulan --}}
    <script>
        $(document).ready(function() {
            const ctxPeminjamanPerprodiPerbulan = document.getElementById('peminjamanChartPerprodi').getContext(
                '2d');
            const peminjamanChartPerprodi = new Chart(ctxPeminjamanPerprodiPerbulan, {
                type: 'bar',
                data: {!! json_encode($peminjamanChartPerprodi) !!},
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>




    <script>
        $(document).ready(function() {
            let images = document.querySelectorAll('img');
            images.forEach((img) => {
                let fileUrl = img.src;
                if (fileUrl.includes('drive.google.com')) {
                    var fileId = fileUrl.split('=')[1];
                    fileId = fileId.split('&')[0];
                    img.src = `https://drive.google.com/thumbnail?id=${fileId}`;
                }
            });
        });
    </script>
@endpush