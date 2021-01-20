<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>O nas</title>
<link rel="stylesheet" href="ONasStyle.css">
<link rel="stylesheet" href="../fontello/css/fontello.css">
<meta name="viewport" content="width=device-width, initial-scale=1" />






</head>
<body>
<?php
session_start();
if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
{
    header('Location: ../panelAdministracyjny/panelAdministracyjny.php');
    exit();
}
?>
<nav>
<ul>
<h1>Komis samochodowy</h1>
<li><a href="../strona główna/stronaGlowna.php">Strona główna</a></li>
<li><a href="../skup samochodów/skup samochodów.php">Skup samochodów</a></li>    
<li><a href="../o nas/o nas.php">O nas</a></li>
<li><a href="../umów spotkanie/umówSpotkanie.php">Umów spotkanie</a></li>
<li><a href="../sprzedaż/sprzedaż.php">Sprzedaż</a></li>
</ul>
</nav>
<main>
<content>
    <h2>O nas:</h2>
    <article>
        Jesteśmy firmą, która zajmuje się skupowaniem oraz sprzedawaniem samochodów osobowych.
       Jeżeli chcesz pozbyć się swojego samochodu osobowego, bądź zastanawiasz się nad zakupem nowego to zapraszamy do kontaktu!<br>
       Charakteryzujemy się wysokiej jakości obsługą klienta oraz proklienckimi cenami!
    </article>
    
    <h3><i class="icon-phone"></i>Kontakt:</h3>
    <h2>xxx-xxx-xxx</h2>
    <h3><i class="icon-home"></i>Nasza lokalizacja:</h3>
    <h2>ul.janusza 33 Gołąbki Małe</h2>
</content>
<aside>
<h2>Logowanie:</h2>
<form method="POST" action="../auth.php">
<label for="fname">login:</label><br>
<input type="text" id="login" name="login"><br><br>
<label for="fname">hasło:</label><br>
<input type="password" id="haslo" name="password"><br><br>
<input type=Submit value="Zaloguj"></input>
</form>
</aside>
</main>
<footer>


</footer>


</body>
</html>