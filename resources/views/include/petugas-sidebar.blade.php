<div class="sidebar">
    <div class="logo">
        <img class="img-responsive" width="148px" src="{{asset('img/im-logo-2x.png')}}" />
    </div>

    <ul class="nav">
        <li>
            <a href="{{url('/petugas')}}">
                <i class="fa fa-ticket"></i>
                &nbsp;Pembelian Tiket
            </a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-car"></i>
                &nbsp;Data Kendaraan
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/petugas/kendaraan/add')}}">Tambah Kendaraan</a></li>
                <li><a href="{{url('/petugas/kendaraan')}}">Kelola Kendaraan</a></li>
                <li><a href="{{url('/petugas/kendaraan/search')}}">Cari Kendaraan</a></li>
            </ul>
        </li>        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-compass"></i>
                &nbsp;Data Tujuan
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/petugas/tujuan/add')}}">Tambah Tujuan</a></li>
                <li><a href="{{url('/petugas/tujuan')}}">Kelola Tujuan</a></li>
                <li><a href="{{url('/petugas/tujuan/search')}}">Cari Tujuan</a></li>
            </ul>
        </li>
         <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-database"></i>
                &nbsp;Data Transaksi
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('/petugas/transaksi')}}">Lihat Transaksi</a></li>
                <li><a href="{{url('/petugas/transaksi/search')}}">Cari Transaksi</a></li>
            </ul>
        </li>
    </ul>
</div>