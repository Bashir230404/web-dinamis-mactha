<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Matcha Latte</title>
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="css/style.css" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  </head>
  <body>
    <?php 
        include_once("connect.php");
        $orders = mysqli_query($mysqli, "SELECT * FROM `order`");

    ?>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Mactha<span>Kamu</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="order.html" id="shoping"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- navbar end-->

    <!-- Hero section start -->
    <section class="hero" id="home">
      
      <main class="content">
        <h1>Mari nikmati Secangkir <span>matcha</span></h1>
        <p>Jika harimu sedang tidak baik-baik saja maka tenangkan saja dengan segelas matcha</p>
        <a href="order.html" class="cta">Order Now</a>
      </main>
    </section>

    <!-- Hero section end -->

    <section id="about" class="about">
      <div data-aos="fade-up-right">

        <h2>Tentang<span>Kami</span></h2>
      </div>
      <div data-aos="fade-up-right">
        
      <div class="row">
        <div class="about-img">
          <img src="https://ucarecdn.com/8a81e301-6766-457e-acc6-6fc9499b2e92/-/format/auto/-/stretch/off/-/resize/3000x/-/quality/lighter/" alt="matcha" width="330px" />
        </div>
        <div class="content">
          <h3>Kenapa Harus Memilih Kami</h3>
          <p>
            Kami hanya menggunakan matcha grade premium dari kebun teh pilihan. Tanpa pewarna, tanpa pengawet—hanya kebaikan alami. Proses penggilingan tradisional untuk menjaga rasa dan nutrisi. Matcha kami hadir dengan rasa umami yang
            halus dan aroma yang khas.
          </p>
          <p>Kami siap melayani dan memberikan yang terbaik untuk setiap pelanggan.</p>
        </div>
      </div>
      </div>
    </section>

    <!-- about section end-->

    <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">nama_lengkap</td>
                            <td class="text-center">email</td>
                            <td class="text-center">phone</td>
                            <td class="text-center">alamat</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($order = mysqli_fetch_array($orders)) {
                                echo "
                                    <tr class='text-center'>
                                        <td>".$order['nama_lengkap']."</td>
                                        <td>".$order['email']."</td>
                                        <td>".$order['phone']."</td>
                                        <td>".$order['alamat']."</td>
                                    </tr>
                                ";
                            }
                        ?>
                         
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- footer start -->
    <footer>
      <h2>Matcha Kamu.</h2>
      <div class="container-footer">
        <div class="sekat1">
          <h2>COMPANY</h2>
          <ul>
            <li>
              <p><a href="#">LOCATION</a></p>
            </li>
            <li>
              <p><a href="#">CARRERS</a></p>
            </li>
          </ul>
        </div>
        <div class="sekat2">
          <h2>LEARN</h2>
          <ul>
            <li>
              <p><a href="#">BREW GUIDES</a></p>
            </li>
            <li>
              <p><a href="#">VIRTUAL CLASSES</a></p>
            </li>
            <li>
              <p><a href="#">OUR BRAND</a></p>
            </li>
            <li>
              <p><a href="#">OUR MATCHA</a></p>
            </li>
            <li>
              <p><a href="#">SUSAINABLITY</a></p>
            </li>
            <li>
              <p><a href="#">BLOG</a></p>
            </li>
          </ul>
        </div>
        <div class="sekat3">
          <h2>MORE</h2>
          <ul>
            <li>
              <p><a href="#">CONTACT US</a></p>
            </li>
            <li>
              <p><a href="#">SHIPPING FAQS</a></p>
            </li>
            <li>
              <p><a href="#">GIFT CARDS</a></p>
            </li>
            <li>
              <p><a href="#">GIFT SUBSCRIPTIONS</a></p>
            </li>
            <li>
              <p><a href="#">LOCATION</a></p>
            </li>
          </ul>
        </div>
        <div class="sekat4">
          <h2>Subscribe</h2>
          <p>Join our email newsletter for exclusive offers, Blue Bottle news, events, and first access to our most exciting releases</p>
          <p>Privacy Policy & Terms</p>
          <div class="sosial">
            <a href=""><i data-feather="instagram"></i></a>
            <a href=""><i data-feather="facebook"></i></a>
            <a href=""><i data-feather="twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <!-- footer end -->

    <!-- Feather Icon -->
       <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script>
      feather.replace();
    </script>
    <!-- Js -->
    <script src="js/script.js"></script>
  </body>
</html>
