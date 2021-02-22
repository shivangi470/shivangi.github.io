
 <?php
         $con=mysqli_connect('localhost','root','','web2');
         
         if(isset($_POST['submit']))
         {
             if (empty($_POST["email"]) && empty($_POST["username"]) &&  empty($_POST["password"]))
             {
                 echo '<script>alert("all fields are required")</script>';
             }
             else{
                $email =mysqli_real_escape_string($con,$_POST['email']);
                $username =mysqli_real_escape_string($con,$_POST['username']);           
                $password =mysqli_real_escape_string($con,$_POST['password']);
                $password =md5($password);
                $query = "insert into registration(username,email,password)values('$username','$email','$password')";
             }
                        
            if(mysqli_query($con,$query))
            {
                echo '<script>alert("Registration Done")</script>';
                header('location:login.php');
            }
           
             
            
         }
        ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
    
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register
        </div>

       

        <form action="" method="POST">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" type="email" required class="validate" autocomplete="off" name="email" required>
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" type="text" required class="validate" autocomplete="off" name="username" required>
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" required class="validate" autocomplete="off" name="password" required>
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">I accept Terms of Service</span>
            </div>

            <input type="submit" name="submit" value="Register" />
        </form>

        <div class="privacy">
            <a href="#">Privacy Policy</a>
        </div>

        <div class="register">
            Do you already have an account?
            <a href="login.php"><button id="register-link" >Log In here</button></a>
        </div>
    </div>


</body>

</html>
