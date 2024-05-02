<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Righteous&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/notification.css') }}">
    @stack('styles')
</head>

<body>
    <div class="header-container">
        <!-- Bagian logo akun -->
        <img src="{{ asset('frontend/dist/img/olis.PNG') }}" class="logo">

        <!-- Bagian teks "INSTITUT TEKNOLOGI DEL" di sebelah logo -->
        <div class="header-text">
            <a href="https://www.del.ac.id/" target="_blank" style="text-decoration: none; color: black;">
                <h3 style="color: black; font-family: 'Poppins', sans-serif;">
                    INSTITUT TEKNOLOGI DEL
                </h3>
            </a>
        </div>

        <!-- Ikon profil -->
        <div class="user-name">
            @auth
                <!-- notifikasi -->
                <nav class="navbar navbar-expand separator">
                    <div id="top-notification" class="dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:;" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge badge-danger text-dark" id="top-notification-number">0</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header">Notifikasi</div>
                            <div class="dropdown-divider"></div>
                            <div class="scroll" id="notification_items">

                            </div>
                        </div>
                    </div>
                </nav>
                <span class="me-2">{{ auth()->user()->name }}</span>
                <i class="fas fa-user"></i>
                <div class="dropdown-menu">
                    <a href="{{ route('profile.index') }}">Profile</a>
                    <a href="{{ route('lendings.index') }}">Riwayat Peminjaman</a>
                    <a href="javascript:void(0)" onclick="logout()">Logout</a>
                </div>
                {{-- Perbaiki Front End Nya --}}
            @else
                <a class="login-link {{ Request::is('/login') ? 'active' : '' }}" href="/login">Login</a>
            @endauth
        </div>
    </div>

    <!-- Gambar header dengan menu navigasi -->
    <div class="header-image">
        <img src="{{ asset('frontend/dist/img/header.PNG') }}" style="width:100%">
        <div class="header-image-text">

            <!-- Navbar dengan font Righteous -->
            <div class="header-navigation">
                @include ('layouts.frontend.navbar')
            </div>
        </div>
    </div>

    <!-- Content -->
    @yield('content')


    <!-- Footer -->

    <div class="copyright">
        &copy; 2023 Kelompok 24 TA Sarjana Terapan Teknologi Rekayasa Perangkat Lunak. Hak Cipta Dilindungi.
    </div>

    <div class="footer-card">
        <div class="footer-text">
            <a href="https://www.youtube.com/@itdel_library" target="_blank">
                <i class="fab fa-youtube" style="margin-top: 20px;"></i>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan Institut
                    Teknologi Del</p>
            </a>
        </div>

        <div class="footer-text">
            <a href="mailto:library@del.ac.id" target="_blank">
                <i class="far fa-envelope" style="margin-top: 20px;"></i>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan IT DEL
                </p>
                {{-- <p>library@del.ac.id</p> --}}
            </a>
        </div>

        <div class="footer-text">
            <a href="https://www.instagram.com/itdel_library" target="_blank">
                <i class="fab fa-instagram" style="margin-top: 20px;"></i>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan IT Del
                </p>
                {{-- <p>@itdel_library</p> --}}
            </a>
        </div>

        <div class="footer-text">
            <a href="https://www.facebook.com/profile.php?id=100079065687693&mibextid=ZbWKwL" target="_blank">
                <i class="fab fa-facebook" style="margin-top: 20px;"></i>
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan Institut
                    Teknologi Del</p>
            </a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('backend/js/method.js') }}"></script>
    <script>
        function logout() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari aplikasi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = "{{ route('logout') }}"
                }
            })
        }
    </script>
    @stack('scripts')
</body>

</html>