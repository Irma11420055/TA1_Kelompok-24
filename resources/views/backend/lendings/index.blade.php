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
                            <a href="{{ route('backend.lendings.create', $type) }}" class="btn btn-primary">Tambah
                                Peminjaman {{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($type == 'book')
                            <div class="mb-3">
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
                        @endif


                        <div class="mb-3">
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

                        <div class="mb-3">
                            <table id="returned_datatable" class="table table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Peminjam</th>
                                        <th>{{ $type == 'book' ? 'Buku' : 'CD/DVD' }}</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('backend.lendings.list', ['status' => 'returned', 'type' => $type]) }}"
                                    class="">Lihat
                                    Semua</a>
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
@endsection
@push('scripts')
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
                            name: 'action'
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
                                    <a class="dropdown-item btn-delete" href="${url}/${row.id}">Hapus</a>
                                </div>
                            </div>
                        `;
                            }
                            return button;
                        }
                    }],
                    pageLength: 3,
                    dom: "lfrti",
                    info: false,
                    lengthChange: false,
                });

                pendingTable.on('click', '.btn-delete', function(e) {
                    e.preventDefault();
                    const url = $(this).attr('href');
                    showConfirmationDialog('Are you sure?', 'You won\'t be able to revert this!', 'warning',

                        'Yes, delete it!', (result) => {
                            if (result.isConfirmed) {
                                handleAction(url, 'DELETE', 'Lending has been deleted!',
                                    'Failed to delete lending!', {}, null, () => {
                                        table.ajax.reload();
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
                                        table.ajax.reload();
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
                                        table.ajax.reload();
                                    });
                            }
                        });
                });

            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            const url = window.location.href;
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
                dom: "lfrti",
                info: false,
                pageLength: 3,
                // set data id
                createdRow: function(row, data, dataIndex) {
                    $(row).attr('data-id', data.id);
                }
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

    <script>
        $(document).ready(function() {
            const url = window.location.href;
            const table = $('#returned_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: url + '/data/returned',
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
                dom: "lfrti",
                info: false,
                pageLength: 3,
            });
        });
    </script>
@endpush
