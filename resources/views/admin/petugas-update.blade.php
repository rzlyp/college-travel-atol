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
            <form method="post" style="margin-top: 24px" enctype="multipart/form-data">
                <center>
                    <img class="img-responsive" id="preview" src="{{asset('img')}}/{{$petugas->foto}}" width="96x" />
                    <br/>
                    <input type="file" name="foto" class="btn btn-default" onChange="readURL(this)">
                </center>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{$petugas->username}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required/>
                    </div>
                    <div class="form-group">
                        <label>Nama Petugas</label>
                        <input type="text" class="form-control" name="nama" value="{{$petugas->nama}}" required/>
                    </div>
                    <div class="form-group">
                        <label>Role Petugas</label>
                        <select class="form-control" name="role">
                            <option value="petugas" selected>Petugas</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary form-control" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

<script type="text/javascript">
    
     function readURL(input) {


    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>