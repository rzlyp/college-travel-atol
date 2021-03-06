@extends('admin-dashboard') @section('content')

<?php
    $kapasitas = [12, 18, 20, 24, 30];
?>

<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Data Kendaraan</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row" style="padding-bottom: 36px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="post" style="margin-top: 24px" action="{{url('/admin/kendaraan/add')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Nama Kendaraan</label>
                        <input type="text" class="form-control" name="nama_kendaraan" required/>
                    </div>
                    <div class="form-group">
                        <label>Kapasitas Kendaraan</label>
                        <select class="form-control" name="kapasitas">
                            @foreach($kapasitas as $data)
                            <option value="{{$data}}">{{$data}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
@stop