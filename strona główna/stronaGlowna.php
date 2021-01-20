<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Strona główna</title>
<link rel="stylesheet" href="stronaGlownaStyle.css">
<link rel="stylesheet" href="../fontello/css/fontello.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

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
    <h3>UJanusza komis</h3>
    <article>
       Jesteśmy firmą, która zajmuje się skupowaniem oraz sprzedażawaniem samochodów osobowych.
       Naszym szefem jest Janusz, prawdziwy rekin biznesu. Wszystko zrobimy i naprawimy, wyklepiemy każdy bok
       i samochód wygląda jak ta lala. Najlepsze furki we wsi są właśnie u nas, zapraszamy!!!
    </article>
    <i class="icon-home"></i>
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