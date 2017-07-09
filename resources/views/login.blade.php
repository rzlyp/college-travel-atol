<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRAVELKITA - Login</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 cover">
                <div class="container container-left">
                    <img class="img img-responsive" src="{{asset('img/im-logo-2x.png')}}" alt="" />
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

                    <div class="footer right">
                        <p>&copy; TRAVELKITA TEAM ATOL-7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>