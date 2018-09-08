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
            <a href="index.php" class="scrollto"><img src="img/logo/logo_danilo3.png" alt="logo"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Početna</a></li>
                <li class="menu-active"><a href="#portfolio">Naše Usluge</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <!--<li><a href="index.php#team">Naš tim</a></li>-->
                <li><a href="cenovnik.php">Cenovnik</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<main id="main">
    <!--==========================
      nase usluge
    ============================-->
    <section id="portfolio" class="section-bg naseUsluge" style="padding-top: 100px">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Naše Usluge</h3>
            </header>

            <div class="row align-items-center wow fadeInUp" id="usluga1">
                <div class="col-md-5">
                    <img src="img/opisi/opisi01.jpg" alt="" width="100%">
                </div>
                <div class="col-md-7">
                    <h2>CTP - Osvetljavanje ofsetnih ploča</h2>
                    <p>Osvetljavamo ofsetne ploče na dva CTP uređaja marke CRON sa rezolucijom 2800 DPI. Ova rezolucija nam daje mogućnost da osvetljavamo ploče za najkompleksniju ofsetnu štampu (novčanice, holograme). U mogućnosti smo da osvetlimo 80 ploča B2 formata na sat, što nam omogućava visoku produkciju.
                        <br> Osvetljavamo ploče od B3 do B1 formata i vršimo dostavu ploča u noćnim satima na teritoriji Beograda, tako da klijenti ranim jutarnjim časovima imaju ploče za štampu. Brzom poštom šaljemo ploče klijentima širom Srbije.
                    </p>
                </div>
            </div>
            <hr>

            <div class="row align-items-center wow fadeInUp" id="usluga2">
                <div class="col-md-5 order-md-last">
                    <img src="img/opisi/opisi02.jpg" alt="" width="100%">
                </div>
                <div class="col-md-7">
                    <h2>Kolorna i crno-bela digitalna štampa</h2>
                    <p>Visoko kvalitetna digitalna štampa za manje tiraže, Konika Minolta "Accurio Press" našim klijentima omogućava kvalitet potpuno identičan ofsetnoj štampi. Naši klijenti za jedan dan mogu dobiti katalog, brošuru, flajer ili vizit karte. Digitalna štampa "Ricos Aficio MP 6001" je crno-bela digitalna mašina za unutrašnje strane knjiga obezbeđuje jeftin otisak poslova koji se ne štampaju na ofsetnim mašinama.</p>
                </div>
            </div>
            <hr>

            <div class="row align-items-center wow fadeInUp" id="usluga3">
                <div class="col-md-5">
                    <img src="img/opisi/opisi03.jpg" alt="" width="100%">
                </div>
                <div class="col-md-7">
                    <h2>Grafički dizajn i priprema</h2>
                    <p>Krajnji izgled štampe zavisi isključivo od dizajna i profesionalne pripreme (montaža za štampu). Press Code našim klijentima obezbedjuje vrhunski kvalitet štampe jer je ekipa školovanih profesionalaca sa dugogodišnjem iskustvom.</p>
                </div>
            </div>
            <hr>

            <div class="row align-items-center wow fadeInUp" id="usluga4">
                <div class="col-md-5 order-md-last">
                    <img src="img/opisi/opisi04.jpg" alt="" width="100%">
                </div>
                <div class="col-md-7">
                    <h2>Organizacija štampe</h2>
                    <p>Studio Press Code neposredno sarađuje i vrši uslugu za preko 50 štamparija u Beogradu i Srbiji, već duži niz godina i zbog toga smo u mogućnosti da krajnjim klijentima završimo kompletnu štampu i isporučimo štampani materijal na željenu adresu bilo gde u Srbiji.
                    <br> Klijent može dobiti ponude za štampu u vrlo kratkom roku od štamparija za koje mislimo da mogu ispuniti standarde visokog kvaliteta.
                    </p>
                </div>
            </div>
            <hr>

            <div class="row align-items-center wow fadeInUp" id="usluga5">
                <div class="col-md-5">
                    <img src="img/opisi/image1.jpg" alt="" width="100%" id="img">
                </div>
                <div class="col-md-7">
                    <h2>Pro photo i video produkcija</h2>
                    <p>Press Code nudi i ovu uslugu koja je jako bitna za izgled štampe ili sajta. Fotografije i video nalazi se u galeriji sajta.</p>
                </div>
            </div>

            <!--<button type="button" onclick="displayPreviousImage()" style="display: none">Previous</button>-->
            <!--<button type="button" onclick="displayNextImage()" style="display: none">Next</button>-->
            <hr style="margin-bottom: 0">

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
    </section>

    <?php include_once "subFooterKontakt.php" ?>

</main>

<?php include_once "footer.php" ?>
<script>
    window.scrollTo(window.scrollX, window.scrollY - 100);
</script>
</body>
</html>
