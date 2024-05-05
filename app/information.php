<?php

  session_start();

  include "functions/functions.php";

  if(isset($_GET["searchKeyword"])){
    header("Location:search.php?searchKeyword=".$_GET["searchKeyword"]);
    exit();
  }

  $lastGames = GetLast4Games();

  $categories = GetCategory(5);


  $user = GetSpeUser($_SESSION["id"]);
?>







<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include "parts/header.php"?>
  <!-- ***** Header Area End ***** -->
  <?php include "parts/message.php"?>
  
  <div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="">
                <form method="post" action="loginRegister/updateInfo.php" enctype="multipart/form-data">

                    <div style="width: 100px;" class="">
                        <img src="<?php echo empty($user["pic"] != "person.jpeg") ? "assets/images/profilePic/person.jpeg" : "assets/images/profilePic/".$user["pic"] ?>" alt="">
                        <input type="file" name="filePic">
                    </div>
                    <div class="mt-3">
                        <label class="" for="">Kullanıcı adı</label>
                        <input class="form-control" name="inputUsername" type="text" value="<?php echo empty($user["username"]) ? "" : $user["username"]?>"><br>
                        <label class="" for="">Mail</label>
                        <input class="form-control" name="inputMail" type="text" value="<?php echo $user["mail"]?>"><br>
                        <label class="" for="">Şifre değiştir</label>
                        <input class="form-control" name="inputPasswd" type="password"><br>
                        <button type="submit" class="btn btn-outline-info text-white">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>

  
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop.php">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>