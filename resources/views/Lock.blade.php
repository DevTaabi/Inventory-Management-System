<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="inv1.png" type="favicon/ico" />
    <title>Lock</title>
    @include('includes.stylesheets')
    <Style>
        #bdy {
            background: url("1.jpg") no-repeat center center fixed;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }
        h1 {
            color:white;
            margin-top: 10%;
            text-align: center;
        }
        h2 {
            color: #AAA; 
        }
        .form-wrapper{
            background-color: rgba(255, 255, 255, .3);
            padding: 40px 20px 20px;
        }
    </Style>
</head>
<body id="bdy">
    <div class="container">
        <header>
            <h1>ALFAJAR STEEL WORKS</h1>
        </header>

        <div class="row">
            <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 col-xs-offset-2 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">

                <h2 class="text-center">LOGIN</h2>

                <div class="form-wrapper animated shake">
                    <form action="{{ route('home') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Name" value="Hafiz Abdul Rauf" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>