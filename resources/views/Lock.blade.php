<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="inv1.png" type="favicon/ico" />
    <title>Lock</title>
    <Style>
        #bdy{
            background-image: url("1.jpg");
            background-repeat: no-repeat;
            background-position: center;
        }
        h1{
            color:white;
            margin-top: 10%;
        }
        h2{
            color: white;
        }
        #field{
            padding: 1% 1%;
        }
        #btn{
            padding: 1% 1%;
        }
    </Style>
</head>
<body id="bdy">
<header>
    <center><h1>ALFAJAR STEEL WORKS</h1></center>
</header>
<hr>
<hr>
    <center>
        <label><h2>Enter Password</h2></label>
        <form action="{{route('home')}}" method="post">
            <input id="field" name="name" placeholder="Name"
                   style="font-size: 25px;font-family:SansSerif;font-weight:bold;color:white;background-color:#1f648b"
                    value="Hafiz Abdul Rauf" type="text">
            <input id="field" name="password" placeholder="Password" type="password">
            <button id="btn" type="submit"> Login</button>
            {{csrf_field()}}
            </form>

    </center>
<br><br>
<hr><hr>

</body>
</html>