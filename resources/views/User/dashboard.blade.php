@extends('User.template')
@section('content')

<div class="title-container">
    <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">Layanan Perpustakaan IT DEL</h1>
    <div style="position: relative;">
        <hr style="height: 4px; 
            border-top-width: 1px;
            border-color: 3px solid #6F410B; 
            margin: 20px auto;
            border-radius: 20px;
            width: 17%;">
    </div> 
</div>

<div class="card-user">
    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="sub-card-user">
            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
            <div>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; margin: 0;">Tersedia Bahan Pustaka</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">Terdapat beberapa bahan pustaka 
                    yang dapat dilihat melalui sistem
                    informasi OLIS, diantaranya :</p>
                <ul style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">
                    <li>Buku</li>
                    <li>CD/DVD</li>
                    <li>Artikel</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="sub-card-user">
            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
            <div>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; margin: 0;">Tersedia Bahan Pustaka</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">Terdapat beberapa bahan pustaka 
                    yang dapat dilihat melalui sistem
                    informasi OLIS, diantaranya :</p>
                <ul style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">
                    <li>Buku</li>
                    <li>CD/DVD</li>
                    <li>Artikel</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="sub-card-user">
            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
            <div>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; margin: 0;">Tersedia Bahan Pustaka</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">Terdapat beberapa bahan pustaka 
                    yang dapat dilihat melalui sistem
                    informasi OLIS, diantaranya :</p>
                <ul style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">
                    <li>Buku</li>
                    <li>CD/DVD</li>
                    <li>Artikel</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="sub-card-user">
            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
            <div>
                <p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 600; margin: 0;">Tersedia Bahan Pustaka</p>
                <p style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">Terdapat beberapa bahan pustaka 
                    yang dapat dilihat melalui sistem
                    informasi OLIS, diantaranya :</p>
                <ul style="font-family: 'Poppins', sans-serif; font-size: 10px; font-weight: 400; margin: 0;">
                    <li>Buku</li>
                    <li>CD/DVD</li>
                    <li>Artikel</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="title-container">
    <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">Buku dengan Rating Tertinggi</h1>
    <hr class="styled-hr">
</div>

<div class="card-user">
    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="book-container">
            <div class="sub-card-user-book">
                <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                <div>
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tata Imoet</p></td>
                        </tr>
                    </table>                      
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">158 Hal</p></td>
                        </tr>
                    </table>  
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tersisa 3</p></td>
                        </tr>
                    </table>  
                </div>
            </div>
            <div class="subtitle">
                <div class="text-book">
                    <i class="fas fa-fire fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; margin-bottom: 5px;">Dongeng Nusantara</p>
                </div>                   
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin: 0;">#Cerpen #BukuAnimasi #Fiksi</p>
                <div class="text-book">
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin-top: 16px;">5,0</p>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="book-container">
            <div class="sub-card-user-book">
                <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                <div>
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tata Imoet</p></td>
                        </tr>
                    </table>                      
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">158 Hal</p></td>
                        </tr>
                    </table>  
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tersisa 3</p></td>
                        </tr>
                    </table>  
                </div>
            </div>
            <div class="subtitle">
                <div class="text-book">
                    <i class="fas fa-fire fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; margin-bottom: 5px;">Dongeng Nusantara</p>
                </div>                   
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin: 0;">#Cerpen #BukuAnimasi #Fiksi</p>
                <div class="text-book">
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin-top: 16px;">5,0</p>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="book-container">
            <div class="sub-card-user-book">
                <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                <div>
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tata Imoet</p></td>
                        </tr>
                    </table>                      
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">158 Hal</p></td>
                        </tr>
                    </table>  
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tersisa 3</p></td>
                        </tr>
                    </table>  
                </div>
            </div>
            <div class="subtitle">
                <div class="text-book">
                    <i class="fas fa-fire fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; margin-bottom: 5px;">Dongeng Nusantara</p>
                </div>                   
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin: 0;">#Cerpen #BukuAnimasi #Fiksi</p>
                <div class="text-book">
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin-top: 16px;">5,0</p>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-card-container">
        <!-- Card 1 -->
        <div class="book-container">
            <div class="sub-card-user-book">
                <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                <div>
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tata Imoet</p></td>
                        </tr>
                    </table>                      
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">158 Hal</p></td>
                        </tr>
                    </table>  
                    <table>
                        <tr>
                          <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                          <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 17px; font-weight: 400; margin-top: 14px; margin-left: 10px;">Tersisa 3</p></td>
                        </tr>
                    </table>  
                </div>
            </div>
            <div class="subtitle">
                <div class="text-book">
                    <i class="fas fa-fire fa-lg" style="color: #ff9d33; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; margin-bottom: 5px;">Dongeng Nusantara</p>
                </div>                   
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey; margin: 0;">#Cerpen #BukuAnimasi #Fiksi</p>
                <div class="text-book">
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 5px;"></i> 
                    <i class="fas fa-star fa-lg" style="color: #FFD43B; margin-right: 10px;"></i>                      
                    <p style="font-family: 'Roboto', sans-serif; font-size: 18px; font-weight: 400; color: darkgrey;">5,0</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
