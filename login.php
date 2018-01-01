<?php
session_start();
$error ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   $password = isset($_POST['password']) ? strval($_POST['password']):""; 
   if($password=='cvb'){
     $_SESSION['key'] = "a4s5der645sgf";
      header("location:view.php");
   }
}
else{
    $_SESSION['key'] = "";
   }
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <title>Projects</title>
    <style>
        @media screen and (min-width: 640px){
        body{
            background-image:url('images/login.jpg');
            background-size:cover;
        }
        .passwordbox{
            cursor :default;
            opacity:0;
            width:160px;
            margin-top:24%;
            margin-left:24%;
            background-color:transparent;   
            
        }
        }
        @media screen and (max-width: 641px){
        body{
            background-image:url('images/login1.jpg');
            
        }
        .passwordbox{
            cursor :default;
            opacity:0;
            width:160px;
            margin-top:45%;
            margin-left:24%;
            background-color:transparent;   
            
        }
        }
    </style>
</head>
<body style="">
    <div class="container-fluid">
        <div class="pull-right">
            <form action="login.php" method="post">
                <input type="password" name="password" class="passwordbox" id="Password">
            </form>
        </div>
    </div>
</body>
</html>