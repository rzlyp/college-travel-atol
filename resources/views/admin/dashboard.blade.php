 @include('include.header-after-login')
<div class="wrapper">
     @include('include.admin-sidebar')

    <div class="main-panel">
        @include('include.admin-header-nav')

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title">Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        Hello
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('include.footer')