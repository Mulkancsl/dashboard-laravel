@extends('layouts.dashboard.master')
@push('custom-css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('') }}assets/dist/css/adminlte.min.css">
@endpush
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Calon</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" id="quickForm">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nomorUrut">Nomor Urut</label>
                                <input type="number" name="urutan" class="form-control" id="nomorUrut" placeholder="Masukkan nomor urut kandidat" style="width: 70%;">
                            </div>
                            <br>
                            <hr>
                            <div class="form-group">
                                <label for="namaKetua">Nama Ketua</label>
                                <input type="text" name="ketua" class="form-control" id="namaKetua" placeholder="Masukkan nama ketua kandidat" style="width: 70%;">
                            </div>
                            <div class="form-group">
                                <label for="fotoKetua">Foto Ketua</label>
                                <input type="file" name="wakil" id="fotoKetua">
                            </div>
                            <br>
                            <hr>
                            <div class="form-group">
                                <label for="namaWakil">Nama Wakil</label>
                                <input type="text" name="wakil" class="form-control" id="namaWakil" placeholder="Masukkan nama wakil kandidat" style="width: 70%;">
                            </div>
                            <div class="form-group">
                                <label for="fotoWakil">Foto Wakil</label>
                                <input type="file" name="wakil" id="fotoWakil">
                            </div>
                            <br>
                            <hr>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan keterangan" style="width: 70%;">
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('data-kandidat') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('custom-js')
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="{{ asset('') }}assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('') }}assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('') }}assets/dist/js/adminlte.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.validator.setDefaults({
            submitHandler: function() {
                alert("Form successful submitted!");
            }
        });
        $('#quickForm').validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a vaild email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
@endpush