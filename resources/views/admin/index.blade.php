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
        </div>
    </div>
</div>
@stop