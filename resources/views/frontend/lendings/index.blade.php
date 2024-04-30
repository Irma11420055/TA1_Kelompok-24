@extends('layouts.frontend.master')
@section('title', 'Riwayat Peminjaman')
@section('content')
    <div class="container-fluid">
        <div class="title-container">
            <h2 style="color: #6F410B; text-align: center; padding-top: 1px;">Riwayat Peminjaman</h2>
            <center>
                <hr style="border-color: #6F410B; margin-bottom: 30px; width: 20%;" />
            </center>
        </div>
    </div>
    <div class="card" style="background-color: #E7E7E7; padding: 40px;">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th>Jenis</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Denda</th>
                        <th>Status</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lendings as $lending)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lending->book->title }}</td>
                            <td>{{ $lending->book->author }}</td>
                            <td>{{ $lending->book->year }}</td>
                            <td>{{ $lending->book->type }}</td>
                            <td>{{ $lending->lending_date }}</td>
                            <td>{{ $lending->return_date }}</td>
                            <td>{{ $lending->fine }}</td>
                            <td>
                                @if ($lending->status == 'pending')
                                    <span style="color: #FFC107;" class="fw-bold">Menunggu</span>
                                @elseif ($lending->status == 'lent')
                                    <span style="color: #28A745;" class="fw-bold">Dipinjam</span>
                                @elseif ($lending->status == 'returned')
                                    <span style="color: #007BFF;" class="fw-bold">Dikembalikan</span>
                                @elseif ($lending->status == 'extended')
                                    <span style="color: #17A2B8;" class="fw-bold">Diperpanjang</span>
                                @elseif ($lending->status == 'canceled')
                                    <span style="color: #DC3545;" class="fw-bold">Dibatalkan</span>
                                @endif
                            </td>
                            <td>
                                @if ($lending->rating)
                                    @for ($i = 0; $i < $lending->rating; $i++)
                                        <i class="fas fa-star text-warning"></i>
                                    @endfor
                                @else
                                    <a href="" class="btn btn-warning">Beri
                                        Rating</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($lendings->hasPages())
            <div class="d-flex justify-content-center">
                {{ $lendings->links('components.pagination') }}
            </div>
        @endif
    </div>
@endsection
