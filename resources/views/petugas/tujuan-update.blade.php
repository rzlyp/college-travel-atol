@extends('petugas-dashboard') @section('content')
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
        <div class="row" style="padding-bottom: 36px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                @if (Session::has('success'))
                        <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                @endif
                <form method="post" style="margin-top: 24px">
                    <div class="form-group">
                        <label>Kode Tujuan</label>
                        <input type="text" class="form-control" name="kode_tujuan" value="{{$tujuan->kode_tujuan}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Nama Tujuan</label>
                        <input type="text" class="form-control" name="nama_tujuan" value="{{$tujuan->nama_tujuan}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Nama Kendaraan</label>
                        <select class="form-control" name="kendaraan">
                            @foreach($kendaraan as $data)
                                @if($tujuan->id_kendaraan === $data->id_kendaraan)
                                    <option value="{{$data->id_kendaraan}}" selected>{{$data->nama_kendaraan}}</option>
                                @else
                                    <option value="{{$data->id_kendaraan}}">{{$data->nama_kendaraan}}</option>
                                @endif    
                            @endforeach  
                        </select>
                    </div>                    
                    <div class="form-group">
                        <label>Tarif</label>
                        <input type="number" class="form-control" name="tarif" value="{{$tujuan->tarif}}" required/>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
@stop