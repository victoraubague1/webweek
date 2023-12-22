// Définir la date de fin du compte à rebours
var countDownDate = new Date("Dec 14, 2024 00:00:00").getTime();

// Mettre à jour le compte à rebours toutes les secondes
var x = setInterval(function () {
    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = "L'Évènement commence dans " + days + " jours " + hours + " heures " + minutes + " minutes " + seconds + " secondes ";

    // Si le compte à rebours est terminé, afficher un message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "L'événement a commencé!";
    }
}, 1000);
