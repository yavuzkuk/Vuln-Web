<?php
  session_start();

  include "../functions/functions.php";

  $categories = GetCategory(5);


?>







<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Lugx Gaming Shop HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
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
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="../index.php" class="logo">
                        <img src="../assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="../index.php">Home</a></li>
                      <li><a href="../shop.php" class="">Our Shop</a></li>
                      <!-- <li><a href="../product-details.php">Product Details</a></li> -->
                      <li><a href="../contact.html">Contact Us</a></li>
                      <li><a href="../loginRegister/login.php">Sign In</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->
  <?php include "../parts/message.php"?>

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to lugx</h6>
            <h2>BEST GAMING SITE EVER!</h2>
            <small>Mail: asd@gmail.com</small><br>
            <small>Şifre: asd</small>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="">
            <h6>Giriş yap</h6>
            <form method="post" action="loginPro.php">
                <div>
                    <label for="">Mail</label>
                    <input class="form-control" name="loginMail" type="email">
                </div>
                <div>
                    <label for="">Şifre</label>
                    <input class="form-control" name="loginPass" type="text">
                </div>
                <button class="btn btn-outline-info text-white mt-2" type="submit">Giriş yap</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <?php foreach($categories as $category):?>
            <div class="col-lg col-sm-6 col-xs-12">
            <div class="item">
                <h4><?php echo $category["categoryName"]?></h4>
                <div class="thumb">
                <a href="../shop.php"><img src="../assets/images/categories-01.jpg" alt=""></a>
                </div>
            </div>
            </div>
        <?php endforeach?>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script>

  </body>
</html>