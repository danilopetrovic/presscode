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
                <li><a href="naseUsluge.php">Naše Usluge</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <!--<li><a href="index.php#team">Naš tim</a></li>-->
                <li class="menu-active"><a href="#portfolio">Cenovnik</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<main id="main">
    <!--==========================
      CENOVNIK
    ============================-->
    <section id="portfolio" class="section-bg" style="padding-top: 100px">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">Cenovnik</h3>
            </header>

            <div class="row portfolio-container" id="tabeleCenovnici">
                <div id="kalkulator" class="container">
                    <div class="col-12 wow fadeInLeft">
                        <h2>Kalkulator</h2>
                    </div>

                    <div class="row  wow fadeInUp" style="border: 1px solid #ced4da; border-radius: 0.25em; padding: 0.2em 0 0.5em; margin: 0.1rem 0.1rem 0.8rem 0.1rem;">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Tiraž:</span>
                                </div>
                                <input type="number" class="form-control" min="1" style="text-align: right;" id="tiraz" value="1">
                                <!--<div class="input-group-append">-->
                                <!--<span class="input-group-text">komada</span>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Štampa:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0">Izaberite</option>
                                    <option value="kolor40" title="80 din">4/0 kolor jednostrano</option>
                                    <option value="kolor41" title="98 din">4/1 kolor/crno dvostrano</option>
                                    <option value="kolor44" title="116 din">4/4 kolor dvostrano</option>
                                    <option value="crno10" title="23 din">1/0 crno jednostrano</option>
                                    <option value="crno11" title="32 din">1/1 crno dvostrano</option>
                                    <option value="1" title="1 din">1/0 CB - A4</option>
                                    <option value="2" title="2 din">1/1 CB - A4</option>
                                    <option value="2" title="2 din">1/0 CB - A3</option>
                                    <option value="4" title="4 din">1/1 CB - A3</option>
                                    <option value="3" title="3 din">1/0 CB - B4 3din???</option>
                                    <option value="6" title="6 din">1/1 CB - B4 6din???</option>
                                    <!--                                    <option value="4">Otisak od klijenta</option>-->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Vrsta papira:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0" title="0 din">Izaberite</option>
                                    <option value="4" title="4 din">Kunzdruk 130g - 200g</option>
                                    <option value="7" title="7 din">Kunzdruk 250g - 300g</option>
                                    <option value="8" title="8 din">Kunzdruk 350g</option>
                                    <option value="15" title="15 din">Muflon (samolepljivi papir)</option>
                                    <option value="80" title="80 din">Teksturirani papir (specijalni papir)</option>
                                    <option value="2" title="2 din">Ofsetni 80g</option>
                                    <option value="1" title="1 din">A3 Ofsetni</option>
                                    <option value="0.5" title="0.5 din">A4 Ofsetni</option>
<!--                                    <option value="1">Papir od klijenta</option>-->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Plastifikacija:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0">Izaberite</option>
                                    <option value="5" title="5 din">Sjaj Jednostrano</option>
                                    <option value="10" title="10 din">Sjaj Dvostrano</option>
                                    <option value="8" title="8 din">Mat Jednostrano</option>
                                    <option value="16" title="16 din">Mat Dvostrano</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Savijanje/Bigovanje:</span>
                                </div>
                                <select class="custom-select" onchange="promenaTexta(this);" id="Savijanje/Bigovanje">
                                    <option value="0">Izaberite</option>
                                    <option value="1">Jednom</option>
                                    <option value="2">Dvaput</option>
                                    <option value="3">Triput</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Klamovanje:</span>
                                </div>
                                <select class="custom-select" onchange="promenaTexta(this);" id="Klamovanje">
                                    <option value="0">Izaberite</option>
                                    <option value="2">Da</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Ćoškarenje:</span>
                                </div>
                                <select class="custom-select" onchange="promenaTexta(this);" id="Ćoškarenje">
                                    <option value="0">Izaberite</option>
                                    <option value="2">Da</option>
                                </select>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <div class="input-group">
                                <div class="input-group-prepend posebno">
                                    <span class="input-group-text">Cena:</span>
                                </div>
                                <input type="text" class="form-control" value="0" readonly style="text-align: right" id="prikaziCenu">
                                <div class="input-group-append posebno">
                                    <span class="input-group-text">dinara</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 alert alert-info text-center wow fadeInRight" role="alert">
                        <i class="fas fa-exclamation-circle"></i> Za detaljniji proračun cenе pozvati!
                    </div>

                    <?php include_once "cenovnikTabele.php" ?>

                </div>
            </div>
        </div>
    </section><!-- #cenovnik -->

    <div id="divRazdvajac" style="height: 1200px"></div>

    <?php include_once "subFooterKontakt.php" ?>

</main>

<?php include_once "footer.php" ?>

<script src="kalkulator.js"></script>

</body>
</html>