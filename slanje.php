<?php
    $email = $_POST['e-mail'];
    $naslov = $_POST['naslov'];
    $tekst = $_POST['tekst'];

    echo "Primatelj: $email <br>";
    echo "Naslov: $naslov <br>";
    echo "Tekst: $tekst <br>";

    ini_set("SMTP","smtp.gmail.com");
    ini_set("sendmail_from","nino.macut@gmail.com");

    if (mail($email, $naslov, $tekst)){
        echo "Poruka je uspjesno poslana.<br>";
    }
    else{
        echo "Poruka nije uspjesno poslana.<br>";
    }
?>
<br>
<a href = "unos.html">Unos nove poruke.</a>
