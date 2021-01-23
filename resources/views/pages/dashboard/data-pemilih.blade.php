@extends('layouts.dashboard.master')
@push('custom-css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
@endpush
@section('content')
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pemilih</h3>
        </div>

        <div class="card-body p-0">
            <a class="btn btn-primary btn-lg m-3" href="{{ route('tambah-pemilih') }}">
                <i class="fas fa-pencil-alt">
                </i>
                Tambah Data
            </a>
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th style="width: 20%">
                            Nama User
                        </th>
                        <th style="width: 20%">
                            Nim User
                        </th style="width:20%;">
                        <th>
                            Status
                        </th>
                        <th style="width: 30%" class="text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <span>Mulkan</span>
                        </td>
                        <td>
                            <span>180602014</span>
                        </td>
                        <td class="project_progress">
                            <p class="badge badge-warning">Belum Memilih.</p>
                        </td>
                        <td class="project-actions text-center">
                            <a class="btn btn-info btn-sm mt-2" href="{{ route('edit-pemilih') }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm mt-2" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
@push('custom-js')
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
@endpush