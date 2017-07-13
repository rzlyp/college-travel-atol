@extends('admin-dashboard') @section('content')
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Dashboard</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget primary">
                            <i class="icon fa fa-users fa-3x"></i>
                            <div class="content">
                                <h4>Petugas</h4>
                                <p>{{count($petugas)}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <i class="icon fa fa-car fa-3x"></i>
                            <div class="content">
                                <h4>Kendaraan</h4>
                                <p>{{count($kendaraan)}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget primary">
                            <i class="icon fa fa-database fa-3x"></i>
                            <div class="content">
                                <h4>Transaksi</h4>
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h3 class="title">Data Transaksi</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table-transaksi">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Transaksi</th>
                                <th>Tujuan</th>
                                <th>Qty</th>
                                <th>Tanggal Berangkat</th>
                                <th>Waktu Berangkat</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{$data->id_transaksi}}</td>
                                <td>{{$data->nama_pembeli}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->nama_tujuan}}</td>
                                <td>{{$data->jumlah_tiket}}</td>
                                <td>{{$data->tgl_keberangkatan}}</td>
                                <td>{{$data->jam_keberangkatan}}</td>
                                <td>{{$data->total_harga}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <h3 class="title">Data Petugas</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table-petugas">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($petugas as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->username}}</td>
                                <td>{{$data->role}}</td>
                                <td><img class="img-responsive" src="{{asset('img')}}/{{$data->foto}}" width="56px"/></td>
                                
                               
                            </tr>
                         @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <h3 class="title">Data Kendaraan</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table-kendaraan">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kendaraan</th>
                                <th>Kapasitas Penumpang</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($kendaraan as $data)
                            <tr>
                                <td>{{$data->id_kendaraan}}</td>
                                <td>{{$data->nama_kendaraan}}</td>
                                <td>{{$data->kapasitas_kendaraan}}</td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop