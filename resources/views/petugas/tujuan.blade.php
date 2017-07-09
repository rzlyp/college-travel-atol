@extends('petugas-dashboard') 
@section('content')
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Data Tujuan</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <div class="table-responsive">
                    <table id="table-tujuan" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kode Tujuan</th>
                                <th>Kota Tujuan</th>
                                <th>Nama Kendaraan</th>
                                <th>Tarif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jakarta</td>
                                <td>Avanza</td>
                                <td>Rp. 150000</td>
                                <td>
                                    <a href="{{url('/petugas/tujuan/add')}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Hapus</a>
                                </td>
                                <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Hapus data tujuan ini ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Data tujuan yang dihapus tidak akan dapat kembali</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak, Batalkan</button>
                                                <button type="button" class="btn btn-primary">Iya, Hapus</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jakarta</td>
                                <td>Avanza</td>
                                <td>Rp. 150000</td>                            
                                <td>
                                    <a href="{{url('/petugas/tujuan/add')}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jakarta</td>
                                <td>Avanza</td>
                                <td>Rp. 150000</td>
                                <td>
                                    <a href="{{url('/petugas/tujuan/add')}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jakarta</td>
                                <td>Avanza</td>
                                <td>Rp. 150000</td>
                                <td>
                                    <a href="{{url('/petugas/tujuan/add')}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jakarta</td>
                                <td>Avanza</td>
                                <td>Rp. 150000</td>
                                <td>
                                    <a href="{{url('/petugas/tujuan/add')}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop