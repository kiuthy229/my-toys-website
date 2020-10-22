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
                  <a href="service.html" class="nav-link tm-nav-link tm-text-white active">Home</a>
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
        <form action="index.html" method="GET" class="form-inline tm-search-form">
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
      <?php foreach($list as $item){ ?>
        <div class="parallax-content projects-content" id="portfolio" style="background-position: center calc(50% + 366px);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 6080px; left: 0px; display: block; transform: translate3d(-760px, 0px, 0px);"><div class="owl-item" style="width: 380px;"><div class="item">
                            <div class="testimonials-item">
                                <a href="img/1st-big-item.jpg" data-lightbox="image-1"><img src="img/1st-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Awesome Note Book</h4>
                                    <span>$18.00</span>
                                </div>
                            </div>
                        </div></div><div class="owl-item" style="width: 380px;"><div class="item">
                            <div class="testimonials-item">
                                <a href="img/2nd-big-item.jpg" data-lightbox="image-1"><img src="img\<?= $item['image'] ?>" alt=""></a>
                                <div class="text-content">
                                    <h4>Antique Decoration Photo</h4>
                                    <span>$27.00</span>
                                </div>
                            </div>
                        </div></div>
                    <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                </div>
            </div>
        </div>
    </div>
      <div class="media">
              <img src="img\<?= $item['image'] ?>" width="140" height="140" alt="Image" class="mr-3">
              <div class="media-body tm-bg-pink-light">
                <div class="tm-description-box">
                  <h5 class="tm-text-pink"><?php echo $item["name"] ?></h5>
                  <p class="mb-0">Donec est felis, posuere viverra dapibus ac, pretium vel libero. Aliquam consectetur, arcu eget euismod congue, tortor metus vehicula.</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-pink tm-text-white tm-buy">buy</a>
                  <span class="tm-text-pink tm-price-tag">Price: $<?php echo $item["price"] ?></span>
                </div>
              </div>
            </div>
            <?php } ?>
        <?php } ?> 
      <footer class="row">

      </footer>
    </div> <!-- .container -->

  </div> <!-- .main -->

  <!-- load JS -->
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