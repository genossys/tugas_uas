@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Form Data Lelang
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambahlelang">
                    Tambah Data Lelang
                </button>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>

                </div>
            </div>

            <div class="box-body">
                <div class="table-responsive-lg">
                    <table id="example2"
                           class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Lelang</th>
                            <th>Kode Lelang</th>
                            <th>Nama Lelang</th>
                            <th>Link Website</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

    {{--modal tambah--}}
    <div class="modal fade" id="modaltambahlelang">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Form Tambah Data Lelang</h4>
                </div>

                <form action="" method="POST" id="formSimpanKelas">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success" style="display:none"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ID Lelang</label>
                                    <input type="text" class="form-control border border-primary" placeholder="ID Lelang" id="txtIdLelang"
                                           name="txtIdLelang">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode Lelang</label>
                                    <input type="text" class="form-control" placeholder="Kode Lelang" id="txtKodeLelang"
                                           name="txtKodeLelang">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nama Lelang</label>
                                    <input type="text" class="form-control" placeholder="Nama Lelang" id="txtNamaLelang"
                                           name="txtNamaLelang">
                                </div>
                            </div>


                        </div>

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Password Lelang</label>
                                    <input type="text" class="form-control" placeholder="Password Lelang"
                                           id="txtPswLelang"
                                           name="txtPswLelang">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Link Website</label>
                                    <input type="text" class="form-control" placeholder="Link Website" id="txtLinkWeb"
                                           name="txtLinkWeb">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>File Dok. Penawaran</label>
                            <input type="file" class="custom-file-input" name="txtFoto" id="txtFoto" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label>File Dok. Teknis</label>
                            <input type="file" class="custom-file-input" name="txtFoto" id="txtFoto" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label>File Dok. Kualifikasi</label>
                            <input type="file" class="custom-file-input" name="txtFoto" id="txtFoto" accept="image/*">
                        </div>
                        <hr>

                            <div class="text-right">
                                <button id="btnSimpan" class="btn-lg btn-primary">Simpan</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaleditlelang">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Form Edit Data Lelang</h4>
                    </div>
                    <form action="" method="POST" id="formEditKelas">
                        {{ csrf_field() }}
                        <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success" style="display:none"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ID Lelang</label>
                                    <input type="text" class="form-control" placeholder="ID Lelang" id="txtIdLelang"
                                           name="txtIdLelang">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Kode Lelang</label>
                                    <input type="text" class="form-control" placeholder="Kode Lelang" id="txtKodeLelang"
                                           name="txtKodeLelang">
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nama Lelang</label>
                                    <input type="text" class="form-control" placeholder="Nama Lelang" id="txtNamaLelang"
                                           name="txtNamaLelang">
                                </div>
                            </div>


                        </div>

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Password Lelang</label>
                                    <input type="text" class="form-control" placeholder="Password Lelang"
                                           id="txtPswLelang"
                                           name="txtPswLelang">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Link Website</label>
                                    <input type="text" class="form-control" placeholder="Link Website" id="txtLinkWeb"
                                           name="txtLinkWeb">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>File Dok. Penawaran</label>
                            <input type="file" class="custom-file-input" name="txtFoto" id="txtFoto" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label>File Dok. Teknis</label>
                            <input type="file" class="custom-file-input" name="txtFoto" id="txtFoto" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label>File Dok. Kualifikasi</label>
                            <input type="file" class="custom-file-input" name="txtFoto" id="txtFoto" accept="image/*">
                        </div>
                        <hr>

                            <div class="text-right">
                                <button id="btnSimpan" class="btn-lg btn-primary">Update</button>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('js/Master/kelas.js') }}"></script>
@endsection