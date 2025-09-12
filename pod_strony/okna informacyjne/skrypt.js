// Funkcja wywołująca confirm, następnie prompt i dodająca przycisk
function startProcess() {
    const confirmation = confirm("Czy chcesz przejść dalej?");

    if (confirmation) {
        // Jeśli klikniesz "OK" w confirm, uruchamia prompt
        const name = prompt("Podaj swoje imię:");

        if (name) {
            // Jeśli użytkownik podał imię, dodaj przycisk na stronie
            const dynamicButtonContainer = document.getElementById("dynamicButtonContainer");

            const button = document.createElement("button");
            button.innerText = "Kliknij, aby się przywitać!";
            button.classList.add("btn");

            // Po kliknięciu w przycisk, wyświetl alert z powitaniem
            button.addEventListener("click", function() {
                alert("Witaj, " + name + "!");
            });

            dynamicButtonContainer.appendChild(button); // Dodajemy przycisk do kontenera
        } else {
            alert("Nie podałeś swojego imienia.");
        }
    } else {
        // Jeśli klikniesz "Anuluj", nic się nie dzieje
        alert("Zdecydowałeś się nie przejść dalej.");
    }
}

// Dodanie zdarzenia do przycisku startowego
document.getElementById("startButton").addEventListener("click", startProcess);
