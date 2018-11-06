<!DOCTYPE html>
<html lang="en">

<?php include_once "head.php" ?>

<body>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <a href="index.php" class="scrollto"><img src="img/logo/logo_danilo3.png" alt="logo" id="logoSlika"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Početna</a></li>
                <li><a href="naseUsluge.php">Naše Usluge</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <!--<li><a href="#team">Naš tim</a></li>-->
                <li><a href="cenovnik.php">Cenovnik</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<main id="main">

    <!--==========================
      Intro Section
    ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>Studio</h2>
                                <p>u kome možete završiti sve poslove u vezi sa štampom, od dizajna i pripreme do same štampe.</p>
                                <!--<a href="#featured-services" class="btn-get-started scrollto">Get Started</a>-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
<!--                                <h2>CTP osvetljavanje ploča</h2>-->
<!--                                <p>Sarađujemo sa 50 štamparija kojima osvetljavamo ofsetne ploče na 2 CTP uređaja visoke rezolucije sa brzinom od 80 ploča B2 formata na sat ili 40 ploča B1 formata. Zbog velikog broja štamparija kojima osvetljavamo ofsetne ploče sa kojih štampaju u mogućnosti smo da krajnjim klijentima organizujemo i završimo kompletnu štampu i isporučimo na željenu adresu.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
<!--                                <h2>Digitalna štampa</h2>-->
<!--                                <p>Takođe u našem studiju posedujemo visoko kvalitetnu digitalnu štampu za manje tiraže sa doradom tako da za jedan dan naš klijent može dobiti katalog, brošuru, vizit karte i ostali štampani materijal.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
<!--                                <h2 style="color: magenta;">Grafički dizajn i priprema</h2>-->
<!--                                <p></p>-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
<!--                                <h2>Pro Photo i Video</h2>-->
<!--                                <p>Pružamo klijentu fotografsku uslugu visokog kvaliteta što je veoma bitna faza za izgled štampanog materijala, koji klijent treba da dobije radi boljeg plasmana svog proizvoda na tržištu. Naš studio može svojim klijentima pružiti mnogo različitih ponuda zbog velikog broja štamparija kojima radi uslugu osvetljavanja ofsetnih ploča sa različitim cenama i nivoima kvaliteta. Drugim rečima, sa nama preskačete sve faze do željene štampe.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="img/intro-carousel/10.jpg" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>17 minuta do nas</h2>
                                <p>Iz bilo kog dela grada, izbegnite gradsku gužvu i probleme sa parkiranjem.<br>Posedujemo deset parking mesta i uz dobar espreso sačekajte Vašu štampu.
                                </p>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> </a>

                    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span> </a>

                </div>
            </div>
        </div>
    </section><!-- #intro -->

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
        <div class="container">
            <div class="row">
                <img src="img/PRESSCoDe.jpg" alt="" id="PressCodeMalaSlicica">
            </div>
        </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section naše usluge
    ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>Naše Usluge</h3>
                <!--<p></p>-->
            </header>

            <div class="row about-cols">

                <div class="offset-md-1 col-md-5 wow fadeInUp">
                    <a href="naseUsluge.php#usluga1">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/opisi/opisi01.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="far fa-clone"></i></div>
                            </div>
                            <h2 class="title"><a href="naseUsluge.php#usluga1">CTP - Osvetljavanje ofsetnih ploča</a>
                            </h2>
                            <a href="naseUsluge.php#usluga1">
                                <p></p>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md-5 wow fadeInUp">
                    <a href="naseUsluge.php#usluga2">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/opisi/opisi02.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="fas fa-print"></i></div>
                            </div>
                            <h2 class="title"><a href="naseUsluge.php#usluga2">Kolorna i crno-bela digitalna štampa</a>
                            </h2>
                            <a href="naseUsluge.php#usluga2">
                                <p></p>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <a href="naseUsluge.php#usluga3">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/opisi/opisi03.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="fas fa-desktop"></i></div>
                            </div>
                            <h2 class="title"><a href="naseUsluge.php#usluga3">Grafički dizajn i priprema</a></h2>
                            <a href="naseUsluge.php#usluga3">
                                <p></p>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <a href="naseUsluge.php#usluga4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/opisi/opisi04.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="far fa-map"></i></div>
                            </div>
                            <h2 class="title"><a href="naseUsluge.php#usluga4">Organizacija štampe</a></h2>
                            <a href="naseUsluge.php#usluga4">
                                <p></p>
                            </a>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 wow fadeInUp">
                    <a href="naseUsluge.php#usluga5">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/opisi/image1.jpg" alt="" class="img-fluid" id="img">
                                <div class="icon"><i class="fas fa-camera"></i></div>
                            </div>
                            <h2 class="title"><a href="naseUsluge.php#usluga5">Pro photo i video produkcija</a></h2>
                            <a href="naseUsluge.php#usluga5">
                                <p></p>
                            </a>
                        </div>
                    </a>
                </div>

                <script>
                    var images = [
                        "img/opisi/image1.jpg",
                        "img/opisi/image2.jpg",
                        "img/opisi/image3.jpg",
                        "img/opisi/image4.jpg",
                        "img/opisi/image5.jpg",
                    ];
                    var x = -1;

                    function displayNextImage() {
                        x = (x === images.length - 1) ? 0 : x + 1;
                        document.getElementById("img").src = images[x];
                    }

                    // function displayPreviousImage() {
                    //     x = (x <= 0) ? images.length - 1 : x - 1;
                    //     document.getElementById("img").src = images[x];
                    // }

                    function startTimer() {
                        setInterval(displayNextImage, 1500);
                    }

                    startTimer();
                </script>
            </div>

        </div>
    </section><!-- #about  naše usluge -->

    <!--==========================
      Galerija
    ============================-->
    <section id="portfolio" class="section-bg">
        <div class="container">

            <header class="section-header">
                <a href="galerija.php" class="galerijaLinkovi"><h3 class="section-title">Galerija</h3></a>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/01.jpg" data-lightbox="portfolio" data-title="01" title="Preview"><img src="img/galerija/01.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/02.jpg" data-lightbox="portfolio" data-title="02" title="Preview"><img src="img/galerija/02.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/03.jpg" data-lightbox="portfolio" data-title="03" title="Preview"><img src="img/galerija/03.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/04.jpg" data-lightbox="portfolio" data-title="04" title="Preview"><img src="img/galerija/04.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/05.jpg" data-lightbox="portfolio" data-title="05" title="Preview"><img src="img/galerija/05.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/06.jpg" data-lightbox="portfolio" data-title="06" title="Preview"><img src="img/galerija/06.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/07.jpg" data-lightbox="portfolio" data-title="07" title="Preview"><img src="img/galerija/07.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <a href="img/galerija/08.jpg" data-lightbox="portfolio" data-title="08" title="Preview"><img src="img/galerija/08.jpg" class="img-fluid" alt=""></a>
                        </figure>
                    </div>
                </div>

            </div>
            <div id="detaljnije">
                <a href="galerija.php#portfolio" class="galerijaLinkovi"><h3><i class="fas fa-angle-double-right"></i>
                    </h3></a>
            </div>
        </div>
    </section><!-- #portfolio -->

    <!--==========================
      Team Section
    ============================-->
    <!--<section id="team">-->
    <!--<div class="container">-->
    <!--<div class="section-header wow fadeInUp">-->
    <!--<h3>Naš tim</h3>-->
    <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
    <!--</div>-->

    <!--<div class="row">-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp">-->
    <!--<div class="member">-->
    <!--<img src="img/team-1.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>Walter White</h4>-->
    <!--<span>Chief Executive Officer</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fab fa-twitter"></i></a>-->
    <!--<a href=""><i class="fab fa-facebook"></i></a>-->
    <!--<a href=""><i class="fab fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fab fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--<div class="member">-->
    <!--<img src="img/team-2.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>Sarah Jhonson</h4>-->
    <!--<span>Product Manager</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fab fa-twitter"></i></a>-->
    <!--<a href=""><i class="fab fa-facebook"></i></a>-->
    <!--<a href=""><i class="fab fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fab fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">-->
    <!--<div class="member">-->
    <!--<img src="img/team-3.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>William Anderson</h4>-->
    <!--<span>CTO</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fab fa-twitter"></i></a>-->
    <!--<a href=""><i class="fab fa-facebook"></i></a>-->
    <!--<a href=""><i class="fab fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fab fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">-->
    <!--<div class="member">-->
    <!--<img src="img/team-4.jpg" class="img-fluid" alt="">-->
    <!--<div class="member-info">-->
    <!--<div class="member-info-content">-->
    <!--<h4>Amanda Jepson</h4>-->
    <!--<span>Accountant</span>-->
    <!--<div class="social">-->
    <!--<a href=""><i class="fab fa-twitter"></i></a>-->
    <!--<a href=""><i class="fab fa-facebook"></i></a>-->
    <!--<a href=""><i class="fab fa-google-plus"></i></a>-->
    <!--<a href=""><i class="fab fa-linkedin"></i></a>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->
    <!--</div>-->

    <!--</div>-->

    <!--</div>-->
    <!--</section>&lt;!&ndash; #team &ndash;&gt;-->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Naši klijenti</h3>
            </header>

            <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-01.png" alt=""> <img src="img/clients/client-02.png" alt="">
                <img src="img/clients/client-03.png" alt=""> <img src="img/clients/client-04.jpg" alt="">
                <img src="img/clients/client-05.jpg" alt=""> <img src="img/clients/client-06.jpg" alt="">
                <img src="img/clients/client-07.jpg" alt=""> <img src="img/clients/client-08.png" alt="">
                <img src="img/clients/client-09.png" alt=""> <img src="img/clients/client-10.png" alt="">
                <img src="img/clients/client-11.png" alt="">
            </div>
        </div>
    </section><!-- #clients -->

    <?php include_once "subFooterKontakt.php" ?>

</main>

<?php include_once "footer.php" ?>

<script>
    // var items = ['cyan', 'magenta', 'yellow'];
    //
    // var bojaPoRedu = 0;
    //
    // var logoSlika = document.getElementById('logoSlika');
    //
    // setInterval(function () {
    //     if (bojaPoRedu == items.length) {
    //         bojaPoRedu = 0;
    //     }
    //     console.log(items[bojaPoRedu]);
    //     logoSlika.style.backgroundColor = items[bojaPoRedu];
    //     bojaPoRedu += 1;
    // }, 2000);
</script>

</body>
</html>
