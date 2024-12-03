<?php
session_start();
include 'conn.php';
include 'function.php';
if(isset($_POST['login']))
{
    adminlogin();//function call
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>

    .body 
    {
        width: 100%;
        height: 100%;
        background-color: black;
        margin: 0 auto;
    }

    .form 
    {
        width: 500px;
        height: 440px;
        align: center;
        padding: 10px;
        background-color: black;
        margin-left: 440px;
        margin: 0 auto;
        margin-top: 18px;
        border-radius: 5px;
	    position: relative;
	    background: linear-gradient(0deg, #000, #272727);
    }

    .form:before, .form:after 
    {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
            #0000ff, #00ff00,#ffff00, #ff0000);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation: steam 20s linear infinite;
    }

    @keyframes steam 
    {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }

    .form:after 
    {
        filter: blur(50px);
    }

    .usernamebar
    {
        width: 230px;
        height: 27px;
        color: white;
        background-color: black;
        border-radius: 5px;
        border: 1px solid white;
        margin-top: 80px;
        margin-left: 6px;
    }

    .usernamebar:hover 
    {
        background-color: white;
        color: black;
    }

    .passwordbar
    {
        width: 230px;
        height: 27px;
        color: white;
        background-color: black;
        border-radius: 5px;
        border: 1px solid white;
        margin-left: 12px;
    }

    .passwordbar:hover 
    {
        background-color: white;
        color: black;
    }

    #username 
    {
    
        font-size: 20px;
        margin-left: 73px;
        color: white;
    }
    
    #username:hover 
    {
        background-color: lightgreen;
        color: black;
    }
    
    #password 
    {
        font-size: 20px;
        margin-left: 73px;
        color: white;
    }
    
    #password:hover 
    {
        background-color: purple;
        color: white;
    }
    
    #loginheader
    {
        color: white;
        text-align: center;
        margin-top: 50px;
        font-size: 30px;
        font-family: lobster;
    }   

    .login
    {
        width: 330px;
        height: 35px;
        margin-left: 73px;
        color: white;
        border-radius: 5px;
    }

    .login:hover 
    {
        color: white;
    }

    .h2 
    {
        margin-left: 80px;
        color: white;
        font-size: 38px;
    }

</style>

<body class="body">

    <form action="<?php //htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="form mt-5">
        <h2 class="h2">Welcome <b><font color="yellow">Ad</font><font color="gold">min!!</font></b></h2>
        <h1 id="loginheader">Login</h1>

        <label for="" id="username">Username</label>
        <input type="text" name="username" id="" class="usernamebar" placeholder="Enter your username here!"><br>

        <label for="" id="password">Password</label>
        <input type="password" name="password" id="" class="passwordbar mt-3" placeholder="Enter your password here!"><br>

        <input type="submit" value="Login" name="login" class="login form-control btn btn-outline-primary mt-4">


    </form>

</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


