@extends('layouts.backend.master')
@section('title', 'Peminjaman')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Peminjaman</li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <x-alert />
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="d-sm-inline-block justify-content-between">
                                <a href="{{ route('backend.lendings.create', $type) }}" class="btn btn-primary">Tambah
                                    Peminjaman {{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</a>
                                <!-- export button -->
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exportLending"><i class="fas fa-download"></i> Export</button>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($type == 'book')
                            <div class="mb-3">
                                <div class="table-responsive">
                                    <table id="pending_datatable" class="table table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ID Anggota</th>
                                                <th>{{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('backend.lendings.list', ['status' => 'pending', 'type' => $type]) }}"
                                            class="">Lihat
                                            Semua</a>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <div class="mb-3">
                            <div class="table-responsive">
                                <table id="lending_datatable" class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Peminjam</th>
                                            <th>{{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</th>
                                            <th>Tanggal Kembali</th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('backend.lendings.list', ['status' => 'lent', 'type' => $type]) }}"
                                        class="">Lihat
                                        Semua</a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="table-responsive">
                                <table id="returned_datatable" class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Peminjam</th>
                                            <th>{{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('backend.lendings.list', ['status' => 'all', 'type' => $type]) }}"
                                        class="">Lihat
                                        Semua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- export book modal -->
    <div class="modal fade" id="exportBook" tabindex="-1" role="dialog" aria-labelledby="exportBookLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                @php
                    $route = '';
                    if ($type == 'book') {
                        $route = 'backend.reports.export-lending-book';
                    } else {
                        $route = 'backend.reports.export-lending-cd-dvd';
                    }
                @endphp
                <form action="{{ route($route) }}" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exportBookLabel">Export Peminjaman
                            {{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Pilih Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="all">Semua</option>
                                    <option value="lent">Dipinjam</option>
                                    <option value="returned">Sudah Kembali</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start_month" class="col-sm-3 col-form-label">Pilih Bulan Awal</label>
                            <div class="col-sm-9">
                                <input type="text" name="start_month" id="start_month" class="form-control start_month">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end_month" class="col-sm-3 col-form-label">Pilih Bulan Akhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="end_month" id="end_month" class="form-control end_month">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-secondary">Cetak Laporan</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Export</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/plugins/monthSelect/index.js"></script>
    <script>
        $(document).ready(function() {
            // flatpickr for start month
            $('.start_month').flatpickr({
                disableMobile: "true",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "m/Y",
                        altFormat: "F Y",
                        theme: "material_blue"
                    })
                ]
            });
            // flatpickr for end month
            $('.end_month').flatpickr({
                disableMobile: "true",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "m/Y",
                        altFormat: "F Y",
                        theme: "material_blue"
                    })
                ]
            });
            // flatpickr for start year
            $('.start_year').flatpickr({
                disableMobile: "true",
                plugins: [
                    new monthSelectPlugin({
                        shorthand: true,
                        dateFormat: "Y",
                        altFormat: "Y",
                        theme: "material_blue"
                    })
                ]
            });
            // flatpickr for end year
            $('.end_year').flatpickr({

            });
        });
    </script>
    @if ($type == 'book')
        <script>
            $(document).ready(function() {
                const url = window.location.href;
                const pendingTable = $('#pending_datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: url + '/data/pending',
                        data: function(d) {
                            d.limit = 3;
                        },
                    },
                    columns: [{
                            data: 'DT_RowIndex',
                            defaultContent: '',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'user.id_member',
                            name: 'user.id_member'
                        },
                        {
                            data: 'item',
                            name: 'item'
                        },
                        {
                            data: 'return_date',
                            name: 'return_date'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ],
                    columnDefs: [{
                        targets: 0,
                        className: 'text-center',
                        width: '5%',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }, {
                        targets: 4,
                        className: 'text-center',
                        width: '15%',
                        render: function(data, type, row) {
                            var button = '';
                            // dropdown menu
                            if (row.status === 'pending') {
                                button += `
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Tindakan
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item btn-approve" href="${url}/${row.id}/approve">Setujui</a>
                                    <a class="dropdown-item btn-reject" href="${url}/${row.id}/reject">Tolak</a>
                                    <a class="dropdown-item" href="${url}/${row.id}/edit">Edit</a>
                                </div>
                            </div>
                        `;
                            }
                            return button;
                        }
                    }],
                    pageLength: 3,
                    // set id to dom header
                    dom: 'l<"toolbar">frtip',
                    info: false,
                    lengthChange: false,
                    order: [
                        [0, 'desc']
                    ]
                });

                const lendingTable = $('#lending_datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: url + '/data/lent',
                    columns: [{
                            data: 'DT_RowIndex',
                            defaultContent: '',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'user.id_member',
                            name: 'user.id_member'
                        },
                        {
                            data: 'item',
                            name: 'item'
                        },
                        {
                            data: 'return_date',
                            name: 'return_date'
                        }
                    ],
                    columnDefs: [{
                        targets: 0,
                        className: 'text-center',
                        width: '5%',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    }],
                    lengthChange: false,
                    dom: 'l<"toolbar">frtip',
                    info: false,
                    pageLength: 3,
                    // set data id
                    createdRow: function(row, data, dataIndex) {
                        $(row).attr('data-id', data.id);
                    },
                    order: [
                        [0, 'desc']
                    ]
                });

                const table = $('#returned_datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: url + '/data/all',
                    columns: [{
                            data: 'DT_RowIndex',
                            defaultContent: '',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'user.id_member',
                            name: 'user.id_member'
                        },
                        {
                            data: 'item',
                            name: 'item'
                        },
                        {
                            data: 'lending_date',
                            name: 'lending_date'
                        },
                        {
                            data: 'return_date',
                            name: 'return_date'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        }
                    ],
                    columnDefs: [{
                            targets: 0,
                            className: 'text-center',
                            width: '5%',
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            },
                        },
                        {
                            targets: 5,
                            className: 'text-center',
                            orderable: false,
                            render: function(data, type, row) {
                                // status returned or rejected
                                var status = '';
                                if (row.status === 'returned') {
                                    status = '<span class="badge badge-info">Returned</span>';
                                } else if (row.status === 'rejected') {
                                    status = '<span class="badge badge-danger">Rejected</span>';
                                }
                                return status;
                            }
                        },
                    ],
                    lengthChange: false,
                    dom: 'l<"toolbar">frtip',
                    info: false,
                    pageLength: 3,
                    order: [
                        [0, 'desc']
                    ]
                });

                pendingTable.on('click', '.btn-delete', function(e) {
                    e.preventDefault();
                    const url = $(this).attr('href');
                    showConfirmationDialog('Are you sure?', 'You won\'t be able to revert this!', 'warning',

                        'Yes, delete it!', (result) => {
                            if (result.isConfirmed) {
                                handleAction(url, 'DELETE', 'Lending has been deleted!',
                                    'Failed to delete lending!', {}, null, () => {
                                        pendingTable.ajax.reload();
                                    });
                            }
                        });
                });

                pendingTable.on('click', '.btn-approve', function(e) {
                    e.preventDefault();
                    const url = $(this).attr('href');
                    showConfirmationDialog('Are you sure?', 'You won\'t be able to revert this!', 'warning',
                        'Yes, approve it!', (result) => {
                            if (result.isConfirmed) {
                                handleAction(url, 'PUT', 'Lending has been approved!',
                                    'Failed to approve lending!', {}, null, () => {
                                        pendingTable.ajax.reload();
                                        lendingTable.ajax.reload();
                                    });
                            }
                        });
                });

                pendingTable.on('click', '.btn-reject', function(e) {
                    e.preventDefault();
                    const url = $(this).attr('href');
                    showConfirmationDialog('Are you sure?', 'You won\'t be able to revert this!', 'warning',
                        'Yes, reject it!', (result) => {
                            if (result.isConfirmed) {
                                handleAction(url, 'PUT', 'Lending has been rejected!',
                                    'Failed to reject lending!', {}, null, () => {
                                        pendingTable.ajax.reload();
                                        table.ajax.reload();
                                    });
                            }
                        });
                });

                // on row click
                lendingTable.on('click', 'tr', function() {
                    console.log('row clicked');
                    const data = lendingTable.row(this).data();
                    const url = window.location.href + '/' + data.id;
                    openModal(url, '#modalListResult');
                });

            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            // set title
            var title = '';
            @if ($type == 'book')
                title = 'Buku';
            @else
                title = 'CD/DVD';
            @endif
            // select toolbar this table
            $('#pending_datatable_wrapper .toolbar').html(
                `<h3 class="card-title">Pemesanan ${title}</h3>`);
            $('#lending_datatable_wrapper .toolbar').html(
                `<h3 class="card-title">Peminjaman ${title}</h3>`);
            $('#returned_datatable_wrapper .toolbar').html(
                `<h3 class="card-title">Riwayat Peminjaman ${title}</h3>`);
        });
    </script>
@endpush
