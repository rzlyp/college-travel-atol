<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-extended">
                <li>
                    <a href="{{url('/admin')}}">
                        Dashboard
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Data Petugas
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/admin/petugas/add')}}">Tambah Petugas</a></li>
                        <li><a href="{{url('/admin/petugas')}}">Kelola Petugas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/admin/transaksi')}}">
                        Data Transaksi
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user-circle"></i>
                        &nbsp;Hello, {{Auth::user()->nama}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/logout')}}">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>