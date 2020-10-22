<?php
include('productCRUD.php');
$obj = new ProductCRUD();
$list = $obj->readProducts();
if ($list){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insertion HTML5 Template</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/bootstrap.min.css">                                            <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/fontawesome-all.min.css">                                      <!-- Font awesome -->
  <link rel="stylesheet" href="css/tooplate-style.css">                                           <!-- Templatemo style -->
  <link rel="stylesheet" href="css/fontAwesome.css">
  <link rel="stylesheet" href="css/hero-slider.css">
  <link rel="stylesheet" href="css/templatemo-main.css">
  <link rel="stylesheet" href="css/owl-carousel.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="tm-main">

    <div class="tm-welcome-section">
      <div class="container tm-navbar-container">
        <div class="row">
          <div class="col-xl-12">
            <nav class="navbar navbar-expand-sm">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="index.php" class="nav-link tm-nav-link tm-text-white active">Home</a>
                </li>
                <li class="nav-item">
                  <a href="login.html" class="nav-link tm-nav-link tm-text-white">Login</a>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="container text-center tm-welcome-container">
        <div class="tm-welcome">
          <h1 class="text-uppercase mb-3 tm-site-name">ATN Toy Corporation</h1>
          <p class="tm-site-description">The city of toys</p>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="tm-search-form-container">
        <form action="index.php" method="GET" class="form-inline tm-search-form">
          <div class="text-uppercase tm-new-release">New Release</div>
          <div class="form-group tm-search-box">
            <input type="text" name="keyword" class="form-control tm-search-input" placeholder="Type your keyword ...">
            <input type="submit" value="Search" class="form-control tm-search-submit">
          </div>
          <div class="form-group tm-advanced-box">
            <a href="#" class="tm-text-white">Go Advanced ...</a>
          </div>
        </form>
      </div>
     
        <div class="parallax-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                    <?php foreach($list as $item){ ?>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/1st-big-item.jpg" data-lightbox="image-1"><img src="img\<?= $item['image'] ?>" alt=""></a>
                                <div class="text-content">
                                    <h4>Awesome Note Book</h4>
                                    <span>$18.00</span>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

            
        <?php } ?> 
      <footer class="row">

      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery-3.2.1.slim.min.js"></script> <!-- https://jquery.com/ -->
  <script>

    /* DOM is ready
    ------------------------------------------------*/
    $(function () {

      if (renderPage) {
        $('body').addClass('loaded');
      }

      $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
    });

  </script>
</body>
</html>