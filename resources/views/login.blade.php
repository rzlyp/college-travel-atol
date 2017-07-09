 @include('include.header-before-login')

<div class="container">
    <div class="row">
        <div class="col-md-6 cover">
            <div class="container container-left">
                <img class="img-responsive" src="{{asset('img/im-logo-2x.png')}}" alt="" />
                <h4>
                    JASA TRAVEL PILIHAN KELUARGA
                </h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container container-right">
                <h1>
                    Sign In
                </h1>
                <h5>
                    Sign In untuk masuk ke dalam sistem TRAVELKITA.
                </h5>

                <form method="post" action="">
                    <div class="form-group" style="margin-top: 48px;">
                        <input type="text" name="username" required/>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Username</label>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" required/>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password</label>
                    </div>

                    <input type="submit" class="btn btn-primary form-control" name="signin" value="SIGN IN">
                </form>

                <div class="footer">
                    <p>&copy; TRAVELKITA TEAM ATOL-7</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('include.footer')