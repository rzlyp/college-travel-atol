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
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <i class="icon fa fa-car fa-3x"></i>
                            <div class="content">
                                <h4>Kendaraan</h4>
                                <p>5</p>
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
                    <table class="table table-bordered table-responsive">
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

            <div class="col-md-12">
                <h3 class="title">Data Petugas</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-responsive">
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
                            <tr>
                                <td>999</td>
                                <td>Rizal Yogi P</td>
                                <td>rzlyp</td>
                                <td>Petugas</td>
                                <td><img class="img-responsive" src="{{asset('img/im-photo-placeholder.png')}}" width="56px" /></td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Rizal Yogi P</td>
                                <td>rzlyp</td>
                                <td>Petugas</td>
                                <td><img class="img-responsive" src="{{asset('img/im-photo-placeholder.png')}}" width="56px" /></td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Rizal Yogi P</td>
                                <td>rzlyp</td>
                                <td>Petugas</td>
                                <td><img class="img-responsive" src="{{asset('img/im-photo-placeholder.png')}}" width="56px" /></td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Rizal Yogi P</td>
                                <td>rzlyp</td>
                                <td>Petugas</td>
                                <td><img class="img-responsive" src="{{asset('img/im-photo-placeholder.png')}}" width="56px" /></td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Rizal Yogi P</td>
                                <td>rzlyp</td>
                                <td>Petugas</td>
                                <td><img class="img-responsive" src="{{asset('img/im-photo-placeholder.png')}}" width="56px" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-12">
                <h3 class="title">Data Kendaraan</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kendaraan</th>
                                <th>Kapasitas Penumpang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>999</td>
                                <td>Avanza</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Avanza</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Avanza</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Avanza</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>999</td>
                                <td>Avanza</td>
                                <td>12</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop