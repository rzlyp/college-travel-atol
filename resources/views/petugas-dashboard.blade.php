 @include('include.header-after-login')
<div class="wrapper">
    @include('include.petugas-sidebar')

    <div class="main-panel">
        @include('include.petugas-header-nav')

        @yield('content')
    </div>
</div>
@include('include.footer')