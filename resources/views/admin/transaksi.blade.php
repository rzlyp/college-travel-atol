@extends('admin-dashboard') 
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
                <a class="btn btn-primary"><i class="fa fa-print button-icon"></i>Cetak Transaksi</a>
                <div class="table-responsive" style="margin-top: 24px;">
                    <table id="table-transaksi" class="table table-bordered table-responsive">
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
                            <tr>
                                <td>999</td>
                                <td>Evan Gilang R</td>
                                <td>23/06/2017</td>
                                <td>Jakarta</td>
                                <td>1</td>
                                <td>23/06/2017</td>
                                <td>16:00 PM</td>
                                <td>150 Ribu</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Evan Gilang R</td>
                                <td>23/06/2017</td>
                                <td>Jakarta</td>
                                <td>1</td>
                                <td>23/06/2017</td>
                                <td>16:00 PM</td>
                                <td>150 Ribu</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Evan Gilang R</td>
                                <td>23/06/2017</td>
                                <td>Jakarta</td>
                                <td>1</td>
                                <td>23/06/2017</td>
                                <td>16:00 PM</td>
                                <td>150 Ribu</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Evan Gilang R</td>
                                <td>23/06/2017</td>
                                <td>Jakarta</td>
                                <td>1</td>
                                <td>23/06/2017</td>
                                <td>16:00 PM</td>
                                <td>150 Ribu</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Evan Gilang R</td>
                                <td>23/06/2017</td>
                                <td>Jakarta</td>
                                <td>1</td>
                                <td>23/06/2017</td>
                                <td>16:00 PM</td>
                                <td>150 Ribu</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop