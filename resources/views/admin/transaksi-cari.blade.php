@if(Auth::user()->role === 'admin')
@extends('admin-dashboard') @section('content')
@else
@@extends('petugas-dashboard') @section('content')
@endif
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Cari Transaksi</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row" style="padding-bottom: 36px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <form method="post" action="/admin/transaksi/search" style="margin-top: 24px" enctype="multipart/form-data">
                
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Cari Berdasarkan</label>
                       <select name="cat" class="form-control">
                           <option value="nama">Nama Pembeli</option>
                           <option value="tanggal">Tanggal Transaksi</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label>Pencarian</label>
                        <input type="text" class="form-control" name="cari" placeholder="Nama atau tanggal (yyyy-mm-dd)" required/>
                    </div>
                  
                    <input type="submit" class="btn btn-primary form-control" value="Cari"/>
                </form>
            </div>
        </div>
    </div>
</div>
@stop