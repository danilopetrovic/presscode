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
                    <div class="col-12">
                        <h2>Kalkulator</h2>
                    </div>
                    <div class="row" style="border: 1px solid #ced4da; border-radius: 0.25em; padding: 0.2em 0 0.5em; margin: 0.1rem 0.1rem 0.8rem 0.1rem;">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">tiraž:</span>
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
                                    <span class="input-group-text">Format:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0">Izaberite</option>
                                    <option value="1" title="x din">A3</option>
                                    <option value="2">A4</option>
                                    <option value="3">A5</option>
                                    <option value="4">A6</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4">-->
                        <!--    <select class="custom-select">-->
                        <!--        <option value="0">Format</option>-->
                        <!--        <option value="1">A3</option>-->
                        <!--        <option value="2">A4</option>-->
                        <!--        <option value="3">A5</option>-->
                        <!--        <option value="4">A6</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Vrsta papira:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0">Izaberite</option>
                                    <option value="1">80gr ofset</option>
                                    <option value="2">120gr ofset</option>
                                    <option value="3">150gr ofset</option>
                                    <option value="4">350gr ofset</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4">-->
                        <!--    <select class="custom-select">-->
                        <!--        <option value="0">Vrsta papira</option>-->
                        <!--        <option value="1">80gr ofset</option>-->
                        <!--        <option value="2">120gr ofset</option>-->
                        <!--        <option value="3">150gr ofset</option>-->
                        <!--        <option value="4">350gr ofset</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Štampa:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0">Izaberite</option>
                                    <option value="1">crno jednostrano</option>
                                    <option value="2">crno dvostrano</option>
                                    <option value="5">crno/kolor dvostrano</option>
                                    <option value="3">kolor jednostrano</option>
                                    <option value="4">kolor dvostrano</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4">-->
                        <!--    <select class="custom-select">-->
                        <!--        <option value="0">Štampa</option>-->
                        <!--        <option value="1">crno-belo jednostrano</option>-->
                        <!--        <option value="2">crno-belo dvostrano</option>-->
                        <!--        <option value="3">kolor jednostrano</option>-->
                        <!--        <option value="4">kolor dvostrano</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Plastifikacija:</span>
                                </div>
                                <select class="custom-select">
                                    <option value="0" title="0 din">Izaberite</option>
                                    <option value="5" title="5 din">Sjaj Jednostrano</option>
                                    <option value="10" title="10 din">Sjaj Dvostrano</option>
                                    <option value="8" title="8 din">Mat Jednostrano</option>
                                    <option value="16" title="16 din">Mat Dvostrano</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4">-->
                        <!--    <select class="custom-select">-->
                        <!--        <option value="0">Plastifikacija</option>-->
                        <!--        <option value="1">Sjaj</option>-->
                        <!--        <option value="2">Mat</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Savijanje/Bigovanje:</span>
                                </div>
                                <select class="custom-select" onchange="bigovanjePromenaTexta();" id="bigovanje">
                                    <option value="0">Izaberite</option>
                                    <option value="2">Da</option>
                                </select>
                            </div>
                        </div>
                        <!--<div class="col-md-6 col-lg-4">-->
                        <!--    <select class="custom-select" onchange="bigovanjePromenaTexta();" id="bigovanje">-->
                        <!--        <option value="0">Savijanje/Bigovanje</option>-->
                        <!--        <option value="2">Da</option>-->
                        <!--    </select>-->
                        <!--</div>-->
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <div class="input-group">
                                <div class="input-group-prepend posebno">
                                    <span class="input-group-text">cena:</span>
                                </div>
                                <input type="text" class="form-control" value="0" readonly style="text-align: right" id="prikaziCenu">
                                <div class="input-group-append posebno">
                                    <span class="input-group-text">dinara</span>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-sm-5 col-md-4 col-lg-5">-->
                        <!--    <div class="input-group">-->
                        <!--        <button class="btn btn-outline-info form-control" id="izracunaj" onclick="izracunajCenu()">Izračunaj</button>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>


                    <div class="col-12 alert alert-info text-center" role="alert"><i class="fas fa-exclamation-circle"></i> Za detaljniji proračun cenе pozvati!</div>


                    <div class="row">
                        <div class="col-12">
                            <table id="legendaTabela">
                                <tr>
                                    <td style="background: linear-gradient(to right, rgb(0, 255, 255), rgb(255, 0, 255), rgb(255, 255, 0), rgb(0, 0, 0))">
                                        &nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td>4 - kolor</td>
                                </tr>
                                <tr>
                                    <td style="background-color: black">&nbsp;&nbsp;&nbsp;</td>
                                    <td>1 - crna</td>
                                </tr>
                                <tr>
                                    <td style="background-color: white">&nbsp;&nbsp;&nbsp;</td>
                                    <td>0 - bez boje</td>
                                </tr>
                            </table>
                            <p>Vizit karte 90×50mm + plastifikacija (sjaj/mat):</p>
                            <table>
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th colspan="8"><strong>Tiraž</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 20%;">Print</th>
                                    <th>60</th>
                                    <th>100</th>
                                    <th>200</th>
                                    <th>300</th>
                                    <th>400</th>
                                    <th>500</th>
                                    <th>1000</th>
                                    <th>2000</th>
                                </tr>
                                <tr>
                                    <th>4/0</th>
                                    <td>380</td>
                                    <td>540</td>
                                    <td>720</td>
                                    <td>820</td>
                                    <td>900</td>
                                    <td>1000</td>
                                    <td>1800</td>
                                    <td>2700</td>
                                </tr>
                                <tr>
                                    <th>4/1</th>
                                    <td>530</td>
                                    <td>750</td>
                                    <td>980</td>
                                    <td>1200</td>
                                    <td>1330</td>
                                    <td>1480</td>
                                    <td>2430</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <th>4/4</th>
                                    <td>650</td>
                                    <td>880</td>
                                    <td>1200</td>
                                    <td>1350</td>
                                    <td>1500</td>
                                    <td>1800</td>
                                    <td>3050</td>
                                    <td>5250</td>
                                </tr>
                                <tr>
                                    <th>1/0</th>
                                    <td>275</td>
                                    <td>385</td>
                                    <td>600</td>
                                    <td>700</td>
                                    <td>820</td>
                                    <td>930</td>
                                    <td>1400</td>
                                    <td>2300</td>
                                </tr>
                                <tr>
                                    <th>1/1</th>
                                    <td>340</td>
                                    <td>530</td>
                                    <td>800</td>
                                    <td>1040</td>
                                    <td>1150</td>
                                    <td>1360</td>
                                    <td>2080</td>
                                    <td>4150</td>
                                </tr>
                                </tbody>
                            </table>

                            <p>Digitalni print na papirima od 80g do 350g:</p>
                            <table>
                                <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th colspan="6">Cena po tabaku</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th style="width: 20%;">Print</th>
                                    <th>1-10</th>
                                    <th>11-50</th>
                                    <th>51-100</th>
                                    <th>101-250</th>
                                    <th>251-500</th>
                                    <th>&gt;500</th>
                                </tr>
                                <tr>
                                    <th>4/0</th>
                                    <td>80</td>
                                    <td>70</td>
                                    <td>55</td>
                                    <td>47</td>
                                    <td>36</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <th>4/1</th>
                                    <td>98</td>
                                    <td>88</td>
                                    <td>73</td>
                                    <td>61</td>
                                    <td>51</td>
                                    <td>37</td>
                                </tr>
                                <tr>
                                    <th>4/4</th>
                                    <td>116</td>
                                    <td>106</td>
                                    <td>86</td>
                                    <td>77</td>
                                    <td>60</td>
                                    <td>42</td>
                                </tr>
                                <tr>
                                    <th>1/0</th>
                                    <td>23</td>
                                    <td>22</td>
                                    <td>21</td>
                                    <td>19</td>
                                    <td>16</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <th>1/1</th>
                                    <td>32</td>
                                    <td>30</td>
                                    <td>28</td>
                                    <td>26</td>
                                    <td>23</td>
                                    <td>17</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7"><strong>Dimenzije Tabaka:</strong> SRA3+(320x488mm)</td>
                                </tr>
                                </tfoot>
                            </table>

                            <p>Plastifikacija:</p>
                            <table>
                                <tr>
                                    <th colspan="2">Vrsta plastifikacije</th>
                                    <th>Cena po tabaku</th>
                                </tr>
                                <tr>
                                    <th>mat</th>
                                    <th>jednostrano</th>
                                    <td>8 din</td>
                                </tr>
                                <tr>
                                    <th>mat</th>
                                    <th>dvostrano</th>
                                    <td>16 din</td>
                                </tr>
                                <tr>
                                    <th>sjaj</th>
                                    <th>jednostrano</th>
                                    <td>5 din</td>
                                </tr>
                                <tr>
                                    <th>sjaj</th>
                                    <th>dvostrano</th>
                                    <td>10 din</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #cenovnik -->

    <div id="divRazdvajac" style="height: 1200px"></div>
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="container-fluid section-bg wow fadeInUp">

        <div class="section-header">
            <h3>Kontakt</h3>
            <!--<p></p>-->
        </div>

        <div class="container">
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

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    })
</script>

<script>
    var tiraz = document.querySelector('#tiraz');
    var padajuci = document.getElementsByTagName('select');
    var prikaziCenu = document.getElementById('prikaziCenu');

    /*~~~resetovanje svih polja na nulu~~~*/
    // tiraz.value = 1;
    // for (let i = 0; i < padajuci.length; i++) {
    //     padajuci[i].value = 0;
    // }
    // prikaziCenu.value = "";
    /*~~~resetovanje svih polja na nulu~~~KRAJ*/

    /*~~~bigovanje promena texta~~~*/
    var bigovanje = document.querySelector('#bigovanje');
    function bigovanjePromenaTexta() {
        // console.log(bigovanje.selectedIndex);
        if (bigovanje.selectedIndex === 1) {
            bigovanje.children[0].innerHTML = 'Savijanje/Bigovanje (Ne)';
        } else {
            bigovanje.children[0].innerHTML = 'Izaberite';
        }
    }
    /*~~~bigovanje promena texta~~~KRAJ*/

    function izracunajCenu() {
        let rezultat = 0;
        for (let i = 0; i < padajuci.length; i++) {
            rezultat += parseInt(padajuci[i].value);
        }
        if (!isNaN(rezultat) && rezultat > 0 && padajuci[0].value !== "0" && padajuci[1].value !== "0" && padajuci[2].value !== "0") {
            prikaziCenu.value = rezultat * tiraz.value;
            prikaziCenu.style.color = '#495057';
            prikaziCenu.style.fontWeight = 'bold';
        }
        else {
            prikaziCenu.value = 'Odaberite jos opcija kako bi proracun bio tacan...';
            prikaziCenu.style.fontWeight = 'normal';
            prikaziCenu.style.color = 'red';
        }
        // prikaziCenu.style.border = "1px solid #ced4da";
        // console.log(rezultat);
    }


    /*~~~dodavanje event listenera na sva polja~~~*/
    tiraz.addEventListener('input', function () {
        izracunajCenu();
        // console.log('promenio si tiraz');
    });
    for (let i = 0; i < padajuci.length; i++) {
        padajuci[i].addEventListener('change', function () {
            izracunajCenu();
            // console.log('promenio si padajuci');
            // prikaziCenu.style.border = "1px solid red";
        });
    }
    /*~~~dodavanje event listenera na sva polja~~~KRAJ*/

</script>

</body>
</html>