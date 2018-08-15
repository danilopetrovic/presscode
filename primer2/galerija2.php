<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRESS CODE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="osvetljavanje ploca, ctp, ofsetna ploca, digitalna stampa, digitalna štampa, ofsetna ploča, filmovanje, graficki dizajn, offset,stampa, štampa, priprema, štampu, štampe, štampe, montaza, montaža, tabak, tabaka, tabaci, beograd, offset print, kodak, cron, UV, termal, thermal, osvetljivač, osvetljivac, laser, xerox, dtp, katalog, brošura, flajer, vizit karte, poster, plakat"
          name="keywords">
    <meta content="Osvetljavanje ofsetnih CTP ploča, priprema za štampu, digitalna štampa, grafički dizajn i priprema, organizacija štampe, foto i video produkcija"
          name="description">
    <meta content="Danilo Petrovic" name="author">
    <!-- Favicons -->
    <link href="img/logo/tab_icon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">


</head>

<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <a href="index.php" class="scrollto"><img src="img/logo/logo_danilo3.png" alt="logo"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Početna</a></li>
                <li><a href="naseUsluge.php">Naše Usluge</a></li>
                <li class="menu-active"><a href="#portfolio">Galerija</a></li>
                <!--<li><a href="index.php#team">Naš tim</a></li>-->
                <li><a href="cenovnik.php">Cenovnik</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<main id="main">
    <!--==========================
      Galerija koja moze da poveze i google slike
      https://nanogallery2.nanostudio.org/documentation.html
    ============================-->
    <section id="portfolio" class="section-bg" style="padding-top: 100px">
        <div class="container">
            <h1>Gallery made with nanogallery2</h1>

            <div data-nanogallery2='{
        "itemsBaseURL": "img/opisi/",
        "thumbnailWidth": "200",
        "thumbnailAlignment": "center"
      }'>
                <a href="image1.jpg" data-ngthumb="image1.jpg" data-ngdesc="a">asdfasdf</a>
                <a href="image2.jpg" data-ngthumb="image2.jpg" data-ngdesc="a1">Berlin 2</a>
                <a href="image2.jpg" data-ngthumb="image2.jpg" data-ngdesc="a2">Berlin 2</a>
                <a href="image3.jpg" data-ngthumb="image3.jpg" data-ngdesc="a3">Berlin 3</a>

            </div>
        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Kontakt</h3>
                <!--<p></p>-->
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Adresa</h3>
                        <address>Ratarski put 53, Beograd</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Kontakt Telefoni:</h3>
                        <p><a href="tel:+381114320160">011 / 43 - 20 - 160</a></p>
                        <p><a href="tel:+38163310535">063 / 310 - 535</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">office@presscode.rs</a></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>

<?php include_once "footer.php" ?>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

<link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>

</body>
</html>
