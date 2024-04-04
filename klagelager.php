<?php
// Inkluderer filen som inneholder tilkoblingsinformasjon til databasen
include("connection.php");

session_start();


// Sjekker om de to innskrevne passordene er like
if (1 == 1) {
    // Henter andre skjemafeltverdier
    $klage = $_POST['klage'];
    $bruker_id = $_SESSION['id'];
    $kategori = $_POST['kategori'];
    $ticketstatus = "SELECT * FROM ticketstatus WHERE idticket-status = '1'";
    // Setter opp SQL-spørringen for å legge til en ny bruker i databasen
    $kategorier = "SELECT * FROM kategori WHERE kategorinavn = '$kategori'";
    // Legger merke til at det anbefales å bruke forberedte spørringer for å forhindre SQL-injeksjoner
    $sporring = "INSERT INTO ticket (ticket-innhold, brukerid, idkategori, idticket-status)";
    $sporring .= " VALUES ('$klage', '$bruker_id', '$kategorier', '$ticketstatus')";

    // Utfører SQL-spørringen
    $output = mysqli_query($conn, $sporring);

    // Sjekker om spørringen ble utført vellykket
    if ($output) {
        echo 'problem sendt vellykket!';
    } else {
        echo 'Feil ved innsetting av problem: ' . mysqli_error($conn);
    }
} else {
    // Hvis passordene ikke er like, gir en feilmelding
    echo 'Pass på at passordene er skrevet likt!';
}

// Omdirigerer tilbake til index.php uavhengig av resultatet

?>