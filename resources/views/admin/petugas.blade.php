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
        <div class="row">
            <div class="col-md-12">
            @if (Session::has('success'))
                   <div class="alert alert-success">
                           <em> 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {!! session('success') !!}
                           </em>
                    </div>
                  @endif
                <div class="table-responsive">
                    <table id="table-petugas" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Petugas</th>
                                <th>Username</th>
                                <th>Role</th>
                                <th>Foto</th>
                                <th>Aksi</th>
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
                                <td>
                                    <a href="{{url('/admin/petugas/update')}}/{{$data->id}}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus{{$data->id}}">Hapus</a>
                                </td>
                               
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

@foreach($petugas as $data)
 <div class="modal fade" id="modal-hapus{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Hapus data petugas ini ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Data petugas yang dihapus tidak akan dapat kembali</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak, Batalkan</button>
                                                <a href="/admin/petugas/delete/{{$data->id}}" class="btn btn-primary">
                                                    Iya, Hapus
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
@endforeach                                
