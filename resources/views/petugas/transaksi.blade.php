@extends('petugas-dashboard') 
@section('content')
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Data Transaksi</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{url('/print')}}" target="_blank"><i class="fa fa-print button-icon"></i>Cetak Transaksi</a>
                <div class="table-responsive" style="margin-top: 24px;">
                    <table id="table-transaksi" class="table table-bordered">
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
        </div>
    </div>
</div>
@stop