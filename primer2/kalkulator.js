const tiraz = document.querySelector('#tiraz');
const padajuci = document.getElementsByTagName('select');
const prikaziCenu = document.getElementById('prikaziCenu');
const cenovnik = {
    /*1, 11, 51, 101, 251, 501*/
    kolor40: [80, 70, 55, 47, 36, 27],
    kolor41: [98, 88, 73, 61, 51, 37],
    kolor44: [116, 106, 86, 77, 60, 42],
    crno10: [23, 22, 21, 19, 16, 13],
    crno11: [32, 30, 28, 26, 23, 17]
};

/*~~~resetovanje svih polja na nulu~~~*/
// tiraz.value = 1;
// for (let i = 0; i < padajuci.length; i++) {
//     padajuci[i].value = 0;
// }
// prikaziCenu.value = "";
/*~~~resetovanje svih polja na nulu~~~KRAJ*/

/*~~~bigovanje promena texta~~~*/

function promenaTexta(e) {
    // console.log(bigovanje.selectedIndex);
    if (e.selectedIndex !== 0) {
        e.children[0].innerHTML = e.id+' (Ne)';
    } else {
        e.children[0].innerHTML = 'Izaberite';
    }
}
/*~~~bigovanje promena texta~~~KRAJ*/


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

// function izracunajCenu() {
//     let rezultat = 0;
//     for (let i = 0; i < padajuci.length; i++) {
//         rezultat += parseFloat(padajuci[i].value);
//     }
//     if (!isNaN(rezultat) && rezultat > 0 && padajuci[0].value !== "0" && padajuci[1].value !== "0") {
//         prikaziCenu.value = rezultat * tiraz.value;
//         prikaziCenu.style.color = '#495057';
//         prikaziCenu.style.fontWeight = 'bold';
//     }
//     else {
//         prikaziCenu.value = 'Odaberite jos opcija kako bi proracun bio tacan...';
//         prikaziCenu.style.fontWeight = 'normal';
//         prikaziCenu.style.color = 'red';
//     }
//     // prikaziCenu.style.border = "1px solid #ced4da";
//     // console.log(rezultat);
// }

function izracunajCenu() {
    let rezultat = 0;
    let rezultatCenovnik = 0;
    if (padajuci[0].selectedIndex > 0 && padajuci[0].selectedIndex <= 5) {
        // console.log('pripada opciji za matricu cenovnika')
        for (let i in cenovnik) {
            if (i === padajuci[0].value) {
                console.log(i + ' - jeste');
                console.log(cenovnik[i]);

                switch (true) {
                    case tiraz.value > 10 && tiraz.value <=50:
                        rezultatCenovnik = cenovnik[i][1];
                        console.log(rezultatCenovnik);
                        break;
                    case tiraz.value > 50 && tiraz.value <=100:
                        rezultatCenovnik = cenovnik[i][2];
                        console.log(rezultatCenovnik);
                        break;
                    case tiraz.value > 100 && tiraz.value <=250:
                        rezultatCenovnik = cenovnik[i][3];
                        console.log(rezultatCenovnik);
                        break;
                    case tiraz.value > 250 && tiraz.value <=500:
                        rezultatCenovnik = cenovnik[i][4];
                        console.log(rezultatCenovnik);
                        break;
                    case tiraz.value > 500:
                        rezultatCenovnik = cenovnik[i][5];
                        console.log(rezultatCenovnik);
                        break;
                    default:
                        rezultatCenovnik = cenovnik[i][0];
                        console.log(rezultatCenovnik);
                }
            }
        }
    }
    else {
        // console.log('NE PRIPADA opciji za matricu cenovnika');
        let rezultatCenovnik = parseFloat(padajuci[0].value);
    }

    // if (tiraz.value > 10) {
    //     rezultatCenovnik = parseFloat(padajuci[0].value) * 0.9;
    // }
    // if (tiraz.value > 50) {
    //     rezultatCenovnik = parseFloat(padajuci[0].value) * 0.8;
    // }
    // if (tiraz.value > 100) {
    //     rezultatCenovnik = parseFloat(padajuci[0].value) * 0.7;
    // }
    // if (tiraz.value > 250) {
    //     rezultatCenovnik = parseFloat(padajuci[0].value) * 0.6;
    // }
    // if (tiraz.value > 500) {
    //     rezultatCenovnik = parseFloat(padajuci[0].value) * 0.5;
    // }

    for (let i = 1; i < padajuci.length; i++) {
        rezultat += parseFloat(padajuci[i].value);
    }
    if (!isNaN(rezultat) && rezultat > 0 && padajuci[0].value !== "0") {
        prikaziCenu.value = (rezultat + rezultatCenovnik) * tiraz.value;
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
