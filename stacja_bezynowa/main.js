
function oblicz() {
    const paliwo = document.getElementById('paliwo').value; // Pobieramy wybrane paliwo
    const ilosc = parseFloat(document.getElementById('ilosc').value); // Pobieramy ilość litrów
    let cenaZaLitr;

   
    if (paliwo == '1') { 
        cenaZaLitr = 5.50;  // Cena za litr benzyny w PLN
    } else if (paliwo == '2') { // Olej napędowy
        cenaZaLitr = 6.00;  // Cena za litr oleju napędowego w PLN
    } else if (paliwo == '3') { // LPG
        cenaZaLitr = 2.60;  // Cena za litr LPG w PLN
    } else {
        document.getElementById('wynik').innerHTML = "Wybierz prawidłowy rodzaj paliwa!";
        return;
    }

    // Obliczanie kosztu
    if (isNaN(ilosc) || ilosc <= 0) {
        document.getElementById('wynik').innerHTML = "Podaj prawidłową ilość litrów!";
        return;
    }

    const koszt = cenaZaLitr * ilosc;

    // Wyświetlanie wyniku
    document.getElementById('wynik').innerHTML = `Koszt zakupu ${ilosc} litrów paliwa wynosi: ${koszt.toFixed(2)} PLN.`;
}
