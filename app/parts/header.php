<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="shop.php" class="">Our Shop</a></li>
                      <!-- <li><a href="product-details.php">Product Details</a></li> -->
                      <li><a href="contact.html">Contact Us</a></li>
                    <?php if(isset($_SESSION["login"]) == "true"):?>
                        <li><a href="information.php">Bilgiler</a></li>
                        <li><a href="loginRegister/logout.php">Çıkış yap</a></li>
                    <?php else:?>
                        <li><a href="loginRegister/login.php">Giriş yap</a></li>
                    <?php endif?>
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