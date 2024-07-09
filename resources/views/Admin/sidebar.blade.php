<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.del.ac.id/" class="brand-link">
      <img src="{{ asset('dist/img/logo.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">OLIS (IT Del)</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link active">
            <i class="nav-icon fas fa-home"></i> <!-- Mengubah kelas ikon menjadi ikon rumah -->
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
        <li class="nav-item has-treeview">
        <a href="pages/widgets.html" class="nav-link ">
            <i class="nav-icon fas fa-book"></i> <!-- Mengubah kelas ikon menjadi ikon buku -->
            <p>
                Bahan Pustaka
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/admin/bahanpustaka/buku" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buku</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/bahanpustaka/cddvd" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>CD/DVD</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/admin/bahanpustaka/artikel" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                    <p>Artikel</p>
                </a>
            </li>
        </ul> <!-- Tag penutup <ul> ditempatkan setelah semua item submenu -->
    </li> <!-- Tag penutup <li> untuk parent item -->


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-handshake"></i>
              <p>
                Peminjaman
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/Admin/peminjaman/peminjamanbuku" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Peminjaman Buku</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/Admin/peminjaman/peminjamancddvd" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Peminjaman CD/DVD</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/Admin/peminjaman/laporan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Laporan</p>
                  </a>    
                </ul>
          </li>

          <li class="nav-item">
            <a href="/admin/anggota" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Anggota
              </p>
            </a>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Tentang perpus
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="/admin/tentangperpus/peraturanperpustakaan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Peraturan Perpustakaan</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/tentangperpus/panduanpesanpinjam" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Panduan Pesan Pinjam</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/tentangperpus/penghargaan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Penghargaan</p>
                  </a>    
                </ul>
          </li>

          <li class="nav-item">
            <a href="/admin/linklinklainnya" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Link Link Lainnya
              </p>
            </a>

            <li class="nav-item">
            <a href="/Admin/logpengunjung" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Log Pengunjung
              </p>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>