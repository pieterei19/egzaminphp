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
    <aside><h2>Dane osobowe</h2>
    <!-- skrypt 1 -->
    <?php 
    $con = mysqli_connect("localhost","root","","firma");
    
    $zap1 = "SELECT * FROM pracownicy";
    $pyt = mysqli_query($con,$zap1);
    echo "	<table>";
    echo "<tr><th>id</th><th>imię</th><th>nazwisko</th><th>PESEL</th></tr>";
    while($wiersz = mysqli_fetch_array($pyt)){
        echo "<tr><td>".$wiersz['id']."</td>
        <td>".$wiersz['imie']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['PESEL']."</td></tr>";
        }
            
    echo "</table>";
    
    
    mysqli_close($con);
    ?>
</aside>
    <footer><h5>AUTOR strony: 1234567890</h5></footer>
</body>
</html>