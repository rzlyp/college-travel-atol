@extends('admin-dashboard') @section('content')
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
        <div class="row" style="padding-bottom: 36px;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>
                    <img class="img-responsive" src="{{asset('img/im-photo-placeholder.png')}}" width="96x" />
                    <br/>
                    <a href="#" class="btn btn-default">Pilih Foto</a>
                </center>
                <form method="post" style="margin-top: 24px">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required/>
                    </div>
                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <input type="text" class="form-control" name="nama" required/>
                    </div>
                    <div class="form-group">
                        <label>Role Petugas</label>
                        <select class="form-control" name="role">
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
@stop