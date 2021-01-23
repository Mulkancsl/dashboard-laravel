@extends('layouts.dashboard.master')
@push('custom-css')
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset('') }}assets/plugins/toastr/toastr.min.css">
<!-- Theme style -->
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
            <a class="btn btn-primary btn-lg m-3" href="{{ route('tambah-calon') }}">
                <i class="fas fa-pencil-alt">
                </i>
                Tambah Data
            </a>
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            Nomor Urut
                        </th>
                        <th style="width: 15%">
                            Nama Ketua Kandidat
                        </th>
                        <th style="width: 15%">
                            Nama Wakil Kandidat
                        </th style="width:20%;">
                        <th>
                            Keterangan
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
                            <span>Khairi</span>
                        </td>
                        <td class="project_progress">
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </td>
                        <td class="project-actions text-center">
                            <button class="btn btn-success btn-sm mt-2" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Detail
                            </button>
                            <a class="btn btn-info btn-sm mt-2" href="{{ route('edit-calon') }}">
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

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center"><b>Kandidat Nomor 1</b></h2>
                    <div class="row text-center">
                        <div class="col-6">
                            <span>Ketua</span>
                            <img src="{{ asset('') }}assets/images/dp.jpg" alt="" style="width: 100%">
                            <h3><b>Mulkan</b></h3>
                        </div>
                        <div class="col-6">
                            <span>Wakil</span>
                            <img src="{{ asset('') }}assets/images/dp.jpg" alt="" style="width: 100%">
                            <h3><b>Khairi</b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</section>
<!-- /.content -->
@endsection
@push('custom-js')
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('') }}assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('') }}assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}assets/dist/js/adminlte.min.js"></script>
@endpush