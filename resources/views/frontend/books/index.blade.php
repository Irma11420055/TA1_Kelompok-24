@extends('layouts.frontend.master')
@section('title', 'List Buku')
@section('content')
    <div class="title-container">
        <h1 style="font-family: 'Poppins', sans-serif; font-size: 20px; font-weight: 700; line-height: 36px;">Buku</h1>
        <div style="position: relative;">
            <hr
                style="height: 4px;
            border-top-width: 1px;
            border-color: 3px solid #6F410B;
            margin: 20px auto;
            border-radius: 20px;
            width: 17%;">
            <select class="form-select" aria-label="Default select example"
                style="width: 15%; border-radius: 20px; border:2px solid grey; position: absolute; right: 250px; top: -30px;">
                <option selected>Filter Buku</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="input-group"
                style="width: 15%; border-radius: 20px; border:2px solid grey; position: absolute; right: 40px; top: -30px;">
                <input class="form-control border-end-0 border rounded-pill" type="search" value="search"
                    id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5"
                        type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div
        style="display: flex; flex-direction: row; justify-content: space-between; padding-left: 30px; padding-right: 30px; margin: 0;">
        <p style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 14px;">Buku Terbaru Sejak 14 November
            2023</p>
        {{ $books->links('components.pagination') }}
    </div>
    <div class="card-container-book">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        @foreach ($books as $book)
                            <div class="col-md-6">
                                <a href="{{ route('books.show', encodeId($book->id)) }}"
                                    style="text-decoration: none; color: black;">
                                    <div style="display: flex; flex-direction: column; margin: 0 0 80px auto;">
                                        <div class="sub-card-container-book">
                                            <img src="{{ $book->cover }}" alt="Deskripsi Gambar">
                                            <div>
                                                <table style="border-collapse: collapse;">
                                                    <tr>
                                                        <td colspan="2">

                                                            <p
                                                                style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">
                                                                {{ $book->title }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="text-align: center; align-items: center; justify-content: center;">
                                                            <i class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i>
                                                        </td>
                                                        <td style="width: 300px;">
                                                            <p
                                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                                {{ $book->author }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr style="margin-top: 3px;">
                                                        <td
                                                            style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;">
                                                            <i class="far fa-file-alt fa-sm" style="color: #000000;"></i>
                                                        </td>
                                                        <td style="width: 300px;">
                                                            <p
                                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                                158 Hal</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td
                                                            style="text-align: center; align-items: center; justify-content: center;">
                                                            <i class="fas fa-layer-group fa-sm" style="color: #000000;"></i>
                                                        </td>
                                                        <td style="width: 300px;">
                                                            <p
                                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                                {{ $book->available }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><i>
                                                                <p
                                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                                    Psikologi Anak</p>
                                                            </i></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><i>
                                                                <p
                                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">
                                                                    ISBN: {{ $book->isbn }}</p>
                                                            </i></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p
                                                                style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                                {{ $book->available }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="text-book">
                                                                <i class="fas fa-star fa-sm"
                                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                                <i class="fas fa-star fa-sm"
                                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                                <i class="fas fa-star fa-sm"
                                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                                <i class="fas fa-star fa-sm"
                                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                                <i class="fas fa-star fa-sm"
                                                                    style="color: #FFD43B; margin-right: 5px;"></i>
                                                                <h5
                                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">
                                                                    5,0</h5>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div style="position: relative;">
                                            <p
                                                style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">
                                                {{ $book->code }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-4">
                    <p
                        style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 20px; color:#6F410B; margin-left: 30px;">
                        Rating Tertinggi</p>
                    <table>
                        <tr>
                            <td style="text-align: center; align-items: center; justify-content: center;">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color:#6F410B; margin-left: 40px;">
                                    1</p>
                            </td>
                            <td style="width: 300px;">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin: 20px 0 5px 20px; color: #1C24E1;">
                                    Dilan 1990</p>
                                <div class="text-book" style="margin: 5px 0 5px 20px;">
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i>
                                    <h5
                                        style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">
                                        5,0</h5>
                                    <h5
                                        style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 10px auto;">
                                        75/100</h5>
                                </div>
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 5px 0 5px 20px;">
                                    Menjadi Nomor 1 Sejak 10 November</p>
                            </td>
                            <td style="vertical-align: top;"><i>
                                    <p
                                        style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin-top: 20px;">
                                        Novel</p>
                                </i></td>
                        </tr>
                    </table>
                    <br>
                    <table>
                        <tr>
                            <td style="text-align: center; align-items: center; justify-content: center;">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-weight: 700; font-size: 50px; color:#6F410B; margin-left: 40px;">
                                    2</p>
                            </td>
                            <td style="width: 300px;">
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin: 20px 0 5px 20px; color: #1C24E1;">
                                    Mengasah Logika untuk Anak 2-6 Tahun</p>
                                <div class="text-book" style="margin: 5px 0 5px 20px;">
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 2px;"></i>
                                    <i class="fas fa-star fa-sm" style="color: #FFD43B; margin-right: 5px;"></i>
                                    <h5
                                        style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">
                                        5,0</h5>
                                    <h5
                                        style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 10px auto;">
                                        75/100</h5>
                                </div>
                                <p
                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 5px 0 5px 20px;">
                                    Menjadi Nomor 2 Sejak 10 November</p>
                            </td>
                            <td style="vertical-align: top;"><i>
                                    <p
                                        style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin-top: 20px;">
                                        Psikologi Anak</p>
                                </i></td>
                        </tr>
                    </table>
                </div>
                {{-- <div style="display: flex; flex-direction: column;">
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
            </div> --}}
                {{-- </div>
                <div class="col-4">
                    <div style="display: flex; flex-direction: column;">
                        <div class="sub-card-container-book">
                            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}" alt="Deskripsi Gambar">
                            <div>
                                <table style="border-collapse: collapse;">
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">
                                                Dongeng Nusantara</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; align-items: center; justify-content: center;"><i
                                                class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                Tata Imoet</p>
                                        </td>
                                    </tr>
                                    <tr style="margin-top: 3px;">
                                        <td
                                            style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;">
                                            <i class="far fa-file-alt fa-sm" style="color: #000000;"></i>
                                        </td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                158 Hal</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; align-items: center; justify-content: center;"><i
                                                class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                Tersisa 3</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>
                                                <p
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                    Psikologi Anak</p>
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>
                                                <p
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">
                                                    ISBN: 978-979-29-0413-0</p>
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                Tersedia 3</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="text-book">
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 5px;"></i>
                                                <h5
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">
                                                    5,0</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <p
                                style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">
                                TB023.0367</p>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; margin: 80px auto;">
                        <div class="sub-card-container-book">
                            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}" alt="Deskripsi Gambar">
                            <div>
                                <table style="border-collapse: collapse;">
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">
                                                Dongeng Nusantara</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; align-items: center; justify-content: center;"><i
                                                class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                Tata Imoet</p>
                                        </td>
                                    </tr>
                                    <tr style="margin-top: 3px;">
                                        <td
                                            style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;">
                                            <i class="far fa-file-alt fa-sm" style="color: #000000;"></i>
                                        </td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                158 Hal</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; align-items: center; justify-content: center;"><i
                                                class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                Tersisa 3</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>
                                                <p
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                    Psikologi Anak</p>
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>
                                                <p
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">
                                                    ISBN: 978-979-29-0413-0</p>
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                Tersedia 3</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="text-book">
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 5px;"></i>
                                                <h5
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">
                                                    5,0</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <p
                                style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">
                                TB023.0367</p>
                        </div>
                    </div>
                    <div style="display: flex; flex-direction: column; margin: 80px auto;">
                        <div class="sub-card-container-book">
                            <img src="{{ asset('dist/img/melihatbahanpustaka.PNG') }}" alt="Deskripsi Gambar">
                            <div>
                                <table style="border-collapse: collapse;">
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 600; margin-top: 5px; margin-bottom:5px; color: #1C24E1;">
                                                Dongeng Nusantara</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; align-items: center; justify-content: center;"><i
                                                class="fas fa-pencil-alt fa-sm" style="color: #000000;"></i></td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                Tata Imoet</p>
                                        </td>
                                    </tr>
                                    <tr style="margin-top: 3px;">
                                        <td
                                            style="text-align: center; align-items: center; justify-content: center; margin-top: 5px;">
                                            <i class="far fa-file-alt fa-sm" style="color: #000000;"></i>
                                        </td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                158 Hal</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; align-items: center; justify-content: center;"><i
                                                class="fas fa-layer-group fa-sm" style="color: #000000;"></i></td>
                                        <td style="width: 300px;">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: 400; margin: 0 5px auto;">
                                                Tersisa 3</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>
                                                <p
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                    Psikologi Anak</p>
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><i>
                                                <p
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 0;">
                                                    ISBN: 978-979-29-0413-0</p>
                                            </i></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p
                                                style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 500; margin: 15px 0 auto;">
                                                Tersedia 3</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="text-book">
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 2px;"></i>
                                                <i class="fas fa-star fa-sm"
                                                    style="color: #FFD43B; margin-right: 5px;"></i>
                                                <h5
                                                    style="font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; margin-top: 10px;">
                                                    5,0</h5>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div style="position: relative;">
                            <p
                                style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 400; position: absolute; bottom: -10px; margin-left: 30px;">
                                TB023.0367</p>
                        </div>
                    </div>
                </div>
                 --}}
            </div>
        </div>
    </div>
@endsection
