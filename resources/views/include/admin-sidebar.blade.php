<div class="sidebar">
    <div class="logo">
        <img class="img-responsive" width="148px" src="{{asset('img/im-logo-2x.png')}}" />
    </div>

    <ul class="nav">
        <li {{(Request::segment(1) == 'admin' ? 'class=active' : '') }}>
            <a href="{{url('/admin')}}">
                <i class="fa fa-dashboard"></i>
                &nbsp;Dashboard
            </a>
        </li>
        <li class="dropdown" {{(Request::segment(1) == 'admin/petugas' ? 'class=active' : '') }}>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-group"></i>
                &nbsp;Data Petugas
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Tambah Petugas</a></li>
                <li><a href="#">Kelola Petugas</a></li>
            </ul>
        </li>
        <li>
            <a href="#" {{(Request::segment(1) == 'admin/transaksi' ? 'class=active' : '') }}>
                <i class="fa fa-database"></i>
                &nbsp;Data Transaksi
            </a>
        </li>
    </ul>
</div>