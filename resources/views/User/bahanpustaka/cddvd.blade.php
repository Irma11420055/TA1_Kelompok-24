@extends('User.template')

@section('content')
<div class="title-container">
    <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">CD/DVD</h1>
    <div style="position: relative;">
        <hr style="height: 4px; 
            border-top-width: 1px;
            border-color: 3px solid #6F410B; 
            margin: 20px auto;
            border-radius: 20px;
            width: 17%;">
    </div> 
</div>
<div class="card-container-book">
    <div class="container">
        <div class="row">
          <div class="col-4">
            <div style="display: flex; flex-direction: column;">
                <div class="sub-card-container-book">
                    <img src="{{ asset('dist/img/cd.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">CHIP 12/2006</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-map-marker-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Lt. 1</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="fas fa-calendar-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">2011-08-09</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">DVD</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ID MASTER: 116</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Tersedia 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-book">
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>                   
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div> 
                <div style="position: relative;">               
                    <p style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">TB023.0367</p>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; margin: 80px auto;">
                <div class="sub-card-container-book">
                    <img src="{{ asset('dist/img/cd.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">CHIP 12/2006</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-map-marker-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Lt. 1</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                                <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="fas fa-calendar-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">2011-08-09</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">CD</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ID MASTER: 116</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Tersedia 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-book">
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>                   
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div> 
                <div style="position: relative;">               
                    <p style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">TB023.0367</p>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; margin: 80px auto;">
                <div class="sub-card-container-book">
                    <img src="{{ asset('dist/img/cd.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">CHIP 12/2006</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-map-marker-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Lt. 1</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                                <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="fas fa-calendar-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">2011-08-09</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">DVD</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ID MASTER: 118</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Tersedia 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-book">
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>                   
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div> 
                <div style="position: relative;">               
                    <p style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">TB023.0367</p>
                </div>
            </div>
          </div>
          <div class="col-4">
            <div style="display: flex; flex-direction: column;">
                <div class="sub-card-container-book">
                    <img src="{{ asset('dist/img/cd.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">CHIP 12/2006</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-map-marker-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Lt. 1</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                                <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="fas fa-calendar-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">2011-08-09</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">DVD</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ID MASTER: 116</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Tersedia 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-book">
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>                   
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div> 
                <div style="position: relative;">               
                    <p style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">TB023.0367</p>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; margin: 80px auto;">
                <div class="sub-card-container-book">
                    <img src="{{ asset('dist/img/cd.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">CHIP 12/2006</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-map-marker-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Lt. 1</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                                <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="fas fa-calendar-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">2011-08-09</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">DVD</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ID MASTER: 116</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Tersedia 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-book">
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>                   
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div> 
                <div style="position: relative;">               
                    <p style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">TB023.0367</p>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; margin: 80px auto;">
                <div class="sub-card-container-book">
                    <img src="{{ asset('dist/img/cd.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">CHIP 12/2006</p></td>
                            </tr>
                            <tr>
                                <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-map-marker-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Lt. 1</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                                <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="fas fa-calendar-alt fa-sm" style="color: #000000;"></i></td>
                                <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">2011-08-09</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">DVD</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ID MASTER: 113</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Tersedia 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="text-book">
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>                   
                                    </div>
                                </td>
                            </tr>
                        </table>  
                    </div>
                </div> 
                <div style="position: relative;">               
                    <p style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">TB023.0367</p>
                </div>
            </div>
          </div>
          <div class="col-4">
            <p style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 20px; color:#6F410B; margin-left: 30px;">Rating Tertinggi</p>
            <table>
                <tr>
                  <td style="text-align: center; align-items: center; justify-content: center;"><p style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color:#6F410B; margin-left: 40px;">1</p></td>
                  <td style="width: 300px;">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin: 20px 0 5px 20px; color: #1C24E1;">Dilan 1990</p>
                    <div class="text-book" style="margin: 5px 0 5px 20px;">
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>
                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 10px auto;">75/100</h5>                   
                    </div>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 5px 0 5px 20px;">Menjadi Nomor 1 Sejak 10 November</p>
                  </td>
                  <td style="vertical-align: top;"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin-top: 20px;">Novel</p></i></td>
                </tr>
            </table> 
            <br>
            <table>
                <tr>
                  <td style="text-align: center; align-items: center; justify-content: center;"><p style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color:#6F410B; margin-left: 40px;">2</p></td>
                  <td style="width: 300px;">
                    <p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin: 20px 0 5px 20px; color: #1C24E1;">Mengasah Logika untuk Anak 2-6 Tahun</p>
                    <div class="text-book" style="margin: 5px 0 5px 20px;">
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i> 
                        <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i> 
                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">5,0</h5>
                        <h5 style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 10px auto;">75/100</h5>                   
                    </div>
                    <p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 5px 0 5px 20px;">Menjadi Nomor 2 Sejak 10 November</p>
                  </td>
                  <td style="vertical-align: top;"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin-top: 20px;">Psikologi Anak</p></i></td>
                </tr>
            </table>     
          </div>
        </div>
      </div>
</div>


@endsection
