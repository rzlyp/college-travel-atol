<div class="sidebar">
    <div class="logo">
        <img class="img-responsive" width="148px" src="{{asset('img/im-logo-2x.png')}}" />
    </div>

    <ul class="nav">
        <li>
            <a href="{{url('/admin')}}">
                <i class="fa fa-dashboard"></i>
                &nbsp;Dashboard
            </a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-group"></i>
                &nbsp;Data Petugas
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/admin/petugas/add')}}">Tambah Petugas</a></li>
                <li><a href="{{url('/admin/petugas')}}">Kelola Petugas</a></li>
                <li><a href="{{url('/admin/petugas/search')}}">Cari Petugas</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-database"></i>
                &nbsp;Data Transaksi
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/admin/transaksi')}}">Lihat Transaksi</a></li>
                <li><a href="{{url('/admin/transaksi/search')}}">Cari Transaksi</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-car"></i>
                &nbsp;Data Kendaraan
                <span class="caret"></span>
            </a>
            
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/admin/kendaraan/add')}}">Tambah Kendaraan</a></li>
                <li><a href="{{url('/admin/kendaraan')}}">Lihat Kendaraan</a></li>
                <li><a href="{{url('/admin/kendaraan/search')}}">Cari Kendaraan</a></li>
            </ul>
        </li>
    </ul>
</div>