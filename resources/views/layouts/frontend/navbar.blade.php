<div class="header-navigation">
    <a style="font-family: 'Righteous', sans-serif; font-weight:400; font-size:18px;" href="/">Beranda</a>

    <!-- Menu "Tentang Perpus" dengan dropdown -->
    <div class="dropdown">
        <span style="font-family: 'Righteous', sans-serif; font-weight:400; font-size:18px;">Tentang Perpus</span>
        <div class="dropdown-menu">
            <a href="{{ route('library-archives.rules') }}">Peraturan Perpustakaan</a>
            <a href="{{ route('library-archives.guidelines') }}">Panduan Pesan Pinjam</a>
            <a href="">Penghargaan Perpustakaan</a>
        </div>
    </div>

    <div class="dropdown">
        <span style="font-family: 'Righteous', sans-serif; font-weight:400; font-size:18px;">Bahan Pustaka</span>
        <div class="dropdown-menu">
            <a href="{{ route('books.index') }}">Buku</a>
            <a href="{{ route('compact-disks.index') }}">CD/DVD</a>
            <a href="{{ route('articles.index') }}">Artikel</a>
        </div>
    </div>

    <div class="dropdown">
        <span style="font-family: 'Righteous', sans-serif; font-weight:400; font-size:18px;">Pemberitahuan</span>
        <div class="dropdown-menu">
            <a href="{{ route('notifications.books') }}">Buku Baru</a>
            <a href="{{ route('notifications.compact-disks') }}">CD/DVD Baru</a>
            <a href="{{ route('notifications.articles') }}">Artikel Baru</a>
        </div>
    </div>

    <a style="font-family: 'Righteous', sans-serif; font-weight:400; font-size:18px;"
        href="{{ route('site-links.index') }}">Link-Link
        Lainnya
    </a>
</div>
