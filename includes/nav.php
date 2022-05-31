<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/mdb.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark site-bg-color fixed-top ">
        <div class="col-md-2"></div>
        <div class="col-md-10">
        <div class="container">
        <a class="navbar-brand" href="#"><i class="fa fa-play-circle-o mx-2"></i>kikali</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
         
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="home"){ echo "current";}?>" href="index.php" ><i class="fa fa-home mx-2"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="about"){ echo "current";}?>" href="about.php"><i class="fa fa-list mx-2"></i>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=="contact"){ echo "current";}?>" href="contact.php"><i class="fa fa-phone mx-2"></i>Contact Us</a>
                    </li>
                  
                </ul>
            </div>
           
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">MOVIE CENTER</a>
                    </li>
                    
                  
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- navbar -->
