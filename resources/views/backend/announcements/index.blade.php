@extends('layouts.backend.master')
@section('title', 'Pengumuman')
@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Pengumuman</li>
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
                            <a href="{{ route('backend.announcements.create') }}" class="btn btn-primary">Tambah
                                Pengumuman</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="announcement_datatable" class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Pengumuman</th>
                                    <th>Isi Pengumuman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
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
    <script>
        $(document).ready(function() {
            const url = window.location.href;
            const table = $('#announcement_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: url,
                columns: [{
                        data: 'DT_RowIndex',
                        defaultContent: '',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'content',
                        name: 'content'
                    },
                    {
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
                    targets: 3,
                    className: 'text-center',
                    orderable: false,
                    render: function(data, type, row) {
                        return `
                            <div class="btn-group">
                                <a class="btn btn-info btn-sm" href="${url}/${row.id}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-sm" href="${url}/${row.id}/edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-danger btn-sm btn-delete" href="${url}/${row.id}">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        `;
                    },
                    width: '15%'
                }],
                searching: true,
                order: [
                    [0, 'desc']
                ]
            });

            $('#announcement_datatable').on('click', '.btn-delete', function(e) {
                e.preventDefault();
                const url = $(this).attr('href');
                showConfirmationDialog('Are you sure?', 'You won\'t be able to revert this!', 'warning',
                    'Yes, delete it!', (result) => {
                        if (result.isConfirmed) {
                            handleAction(url, 'DELETE', 'Announcement has been deleted!',
                                'Failed to delete announcement!', {}, null, () => {
                                    table.ajax.reload();
                                });
                        }
                    });
            });
        });
    </script>
@endpush