@extends('User.template')

@section('content')
<div class="title-container">
    <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">Buku Baru</h1>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
                    <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}"  alt="Deskripsi Gambar">
                    <div>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td colspan="2"><p style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">Dongeng Nusantara</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tata Imoet</p></td>
                            </tr>
                            <tr style="margin-top: 3px;">
                              <td style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;"><i class="far fa-file-alt fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">158 Hal</p></td>
                            </tr>
                            <tr>
                              <td style="text-align: center; align-items: center; justify-content: center;"><i class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                              <td style="width: 300px;"><p style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">Tersisa 3</p></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">Psikologi Anak</p></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i><p style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">ISBN: 978-979-29-0413-0</p></i></td>
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
        </div>
      </div>
</div>

@endsection
