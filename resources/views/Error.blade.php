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
   <strong>
       <h2 style="background-color: white;color: red;padding: 2% 2%">
           Wrong Username or Password
       </h2>
      <a href="{{route('/')}}"> <button style="padding: 2% 2%;font-size: 16px;font-weight: bold">Try Again</button></a>
   </strong>

</center>
<br><br>
<hr><hr>

</body>
</html>