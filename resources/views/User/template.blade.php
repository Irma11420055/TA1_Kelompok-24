<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <div class="header-container">
        <!-- Bagian logo akun -->
        <img src="{{ asset('dist/img/olis.PNG') }}" class="logo">
    
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
            <i class="fas fa-user"></i> <!-- Ikon profil Font Awesome -->
            <span class="user-text">{{ auth()->user()->nama }}</span>
            <div class="dropdown-menu">
                <a href="/User/akun/profile">Profile</a>
                <a href="/User/akun/riwayatpeminjaman">Riwayat Peminjaman</a>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            </div>
            {{-- Perbaiki Front End Nya --}}
            @else
            <a class="login-link {{ Request::is('/login') ? 'active' : '' }}" href="/login">Login</a>
            @endauth
        </div>
    </div>

    <!-- Gambar header dengan menu navigasi -->
    <div class="header-image">
        <img src="{{ asset('dist/img/header.PNG') }}" style="width:100%"> 
        <div class="header-image-text">

            <!-- Navbar dengan font Righteous -->
            <div class="header-navigation">
            @include ('User.navbar')            
        </div>
        </div>
    </div>

    <!-- Content -->
        @yield('content')
    </div>

    <!-- Footer -->

    <div class="copyright">
        &copy; 2023 Kelompok 24 TA Sarjana Terapan Teknologi Rekayasa Perangkat Lunak. Hak Cipta Dilindungi.
    </div>

    <div class="footer-card">
        <div class="footer-text">
            <a href="https://www.youtube.com/@itdel_library" target="_blank">
                <i class="fab fa-youtube" style="margin-top: 20px;"></i>      
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan Institut Teknologi Del</p>
            </a>    
        </div>

        <div class="footer-text">
        <a href="mailto:library@del.ac.id" target="_blank">
            <i class="far fa-envelope" style="margin-top: 20px;"></i>            
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan IT DEL</p>
                {{-- <p>library@del.ac.id</p> --}}
        </a>
        </div>

        <div class="footer-text">
        <a href="https://www.instagram.com/itdel_library" target="_blank">
            <i class="fab fa-instagram" style="margin-top: 20px;"></i>      
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan IT Del</p>
                {{-- <p>@itdel_library</p> --}}
        </a>     
        </div>

        <div class="footer-text">
            <a href="https://www.facebook.com/profile.php?id=100079065687693&mibextid=ZbWKwL" target="_blank">
                <i class="fab fa-facebook" style="margin-top: 20px;"></i>      
                <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400;">Perpustakaan Institut Teknologi Del</p>
            </a>    
        </div>
        
    </div>

</body>

</html>
