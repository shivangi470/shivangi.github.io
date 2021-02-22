<?php
session_start();
include('connect.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>

 

    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>
       
        

        <form action="" method="post">

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off" name="username">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off" name="password">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" name="submit" value="Log In" />
        </form>

        <?php
        
         
         if(isset($_POST['submit']))
         {

            if ( empty($_POST["username"]) && empty($_POST["password"]))
            {
                echo '<script>alert("all fields are required")</script>';
            }
            else {
                $username =$_POST['username'];           
                $password =$_POST['password'];
                $password =md5($password);
                $query= "SELECT * FROM registration where username='$username' && password='$password' ";
                $result =mysqli_query($con,$query);

               $total=mysqli_num_rows($result);
              if($total=1)
              {
                 header('location:home.php');
              }
              else{
                  echo "login failed";
              }
                } 
            
         }
        ?>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Don't have an account yet?
            <a href="register.php"><button id="register-link">Register here</button></a>
        </div>
    </div>

</body>

</html>
