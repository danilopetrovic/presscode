const tiraz = document.querySelector('#tiraz');
const padajuci = document.getElementsByTagName('select');
const prikaziCenu = document.getElementById('prikaziCenu');

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

function izracunajCenu() {
    let rezultat = 0;
    for (let i = 0; i < padajuci.length; i++) {
        rezultat += parseInt(padajuci[i].value);
    }
    if (!isNaN(rezultat) && rezultat > 0 && padajuci[0].value !== "0" && padajuci[1].value !== "0") {
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
