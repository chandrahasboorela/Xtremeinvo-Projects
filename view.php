<?php
 session_start(); 
if($_SESSION['key'] != "a4s5der645sgf"){
    header("location:login.php");
}
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
    <title>Projects</title>
    <style>
        .card-img-top {
            width: 100%;
            border-radius:0px;
            }
        .card{ border-radius:0px;
        }
        .card-body {
            background-color: black;
            color: #01c7df;
        }
        .card-body h5{
            color:White;
            padding:5px;
            font-weight:bold;
        }
        body{
            background-image:url('images/back.jpg');
            background-size:cover;
        }
    .card{
        box-shadow:5px 5px 13px black;
        margin-right: -19%;
        height: 500px;  
        opacity: 0.9;
        background-image: "http://www.ganzhenjun.com/data/out/110/wp-image-720985801-techno-wallpapers.png";
    }
    .card:hover{
        margin-right: 5px;
        border:5px solid #40ff26;
        opacity: 1;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="card" id="card1"  style="width: 18rem;">
                <img class="card-img-top" src="images/back2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">CodeJam</h5>
                  <p class="card-text">Online quiz. Using hmtl,css,js,jquery,bootstrap,php,ajax,mysql;

                  </p>
                  <a href="http://xtremeinvo.com/codejam/www/" class="btn btn-outline-info">Explore me</a>
                </div>
              </div>
              <div class="card" id="card2" style="width: 18rem;">
                <img class="card-img-top" src="images/back2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Question Paper Generator</h5>
                  <p class="card-text">Online interface to generate multiple questionpapers in a random fashion.Using hmtl,css,js,jquery,bootstrap,php,ajax,mysql;</p>
                  <a href="#" class="btn btn-outline-info">Under Development</a>
                </div>
              </div>
              <div class="card" id="card3" style="width: 18rem;">
                <img class="card-img-top" src="https://wallpapertag.com/wallpaper/full/3/5/2/463286-cool-techno-backgrounds-1920x1080-for-phones.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Attendence</h5>
                  <p class="card-text">Online interface to take and manage students' attendence. Using hmtl,css,js,jquery,bootstrap,php,ajax,mysql;</p>
                  <a href="#" class="btn btn-outline-info">Under Development</a>
                </div>
              </div>
        </div>
    </div>
    <script>
        $(".card:last").css("opacity","1");
        $(document).ready(function(){
            for(var i=1;i<=3;i++)
            {
                var card = $("#card"+i);
                card.css("margin-top",i*20+"px");
            }
        });
    </script>
</body>
</html>