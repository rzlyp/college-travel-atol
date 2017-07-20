 @include('include.header-after-login')
<div class="wrapper">
    @include('include.admin-sidebar')

    <div class="main-panel">
        @include('include.admin-header-nav')

        @yield('content')
    </div>
</div>
@include('include.footer')