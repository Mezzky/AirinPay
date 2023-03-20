<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url(image/bg1.png); 
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .box{
            width: 300px;
            border-radius: 10px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background: #39413B;
            text-align: center;
        }
        
        .box h2, h3{
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }
        
        .box input[type = "text"], .box input[type = "password"]{
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        
        .box input[type = "text"]:focus,.box input[type = "password"]:focus{
            width: 280px;
            border-color: #2ecc71;
        }
        
        .box button[type = "submit"]
        {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        
        .box button[type = "submit"]:hover
        {
            background: #2ecc71;
        }
    </style>
</head>
<body>
    <center>
        <form action="proses_login.php" method = "POST" class="box" autocomplete="off">
            <h2>Halo</h2>
            <h3>selamat datang </h3>
            <input type="text" name = "username" placeholder="username...">
            <input type="password" name="password" placeholder="password...">
            <button type = "submit">Login</button>
        </form>
    </center>
</body>
</html>