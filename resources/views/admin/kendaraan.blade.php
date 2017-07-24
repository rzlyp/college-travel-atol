
@extends('admin-dashboard') @section('content')

@section('content')
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
                    <table id="table-kendaraan" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kendaraan</th>
                                <th>Kapasitas Penumpang</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kendaraan as $data)
                            <tr>
                                <td>{{$data->id_kendaraan}}</td>
                                <td>{{$data->nama_kendaraan}}</td>
                                <td>{{$data->kapasitas_kendaraan}}</td> 
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
                              