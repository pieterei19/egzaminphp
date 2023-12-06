<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane osobowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="baner"><h1>Dane osobowe pracowników</h1></header>
    <main><ol>
        <li><a href="index.php">Wyświetl dane</a></li>
        <li><a href="formularz.php">Wpisz dane</a></li>
    </ol></main>
    <aside><h2>Podaj dane</h2>
    <form action="#" method="GET">
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" name="nazwisko">
        <label for="imie">Imię:</label>
        <input type="text" name="imie">
        <label for="pesel">PESEL:</label>
        <input type="text" name="pesel">
        <button type="submit">Sprawdź i zapisz</button>
        <!-- skrypt 2 -->
        <?php

        $imie = $_GET["imie"];
        $nazwisko = $_GET["nazwisko"];
        $pesel = $_GET["pesel"];

        $con = mysqli_connect("localhost","root","","firma");
        $wstawianko = "INSERT INTO pracownicy (imie,nazwisko,PESEL) VALUES (".$imie.",".$nazwisko.",".$pesel.")";
         
        
        if ($imie = NULL){
            echo "<p>brak imienia</p>";
        }elseif ($nazwisko = NULL){
            echo "<p>brak nazwiska</p>";
        }elseif ($pesel = NULL) {
            echo "<p>brak numeru PESEL</p>";
        }else {
            echo "<p> Zapisuję do bazy: ".$nazwisko.", ".$imie.", ".$pesel."</p>"; 
            $wstaw = mysqli_query($con,$wstawianko);
        }
    ?>
    </form></aside>
    <footer><h5>AUTOR strony: 1234567890</h5></footer>
</body>
</html>