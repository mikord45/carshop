<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Skup Samochodów</title>
<link rel="stylesheet" href="skupSamochodowStyle.css">

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
   <h2>Skup samochodów</h2>
   <h3>Co musisz zrobić, abyśmy kupili od Ciebie samochód?</h3>
    <article>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio nostrum, fuga quibusdam, neque ab, 
incidunt dolorum cum commodi dolores fugiat tempore esse ex eaque culpa. Expedita eum, veritatis 
ullam soluta nam nemo quibusdam voluptate dicta illo cumque debitis nobis dolorum illum eos numqu
am vero repellat doloremque similique! Earum, cumque amet ut distinctio odit reiciendis fugit! Vo
luptatibus ut saepe veniam tempore consequatur facilis, incidunt quod eaque error vero repellendu
s odio reiciendis, maiores earum ab accusantium. Non doloribus voluptate quo. Facilis consequatur
 ratione maiores sequi, dolore fugit labore similique nisi sapiente molestiae reiciendis error ve
 ritatis, quae, cum ipsam perspiciatis tenetur sed id.
    </article>
</content>
<aside>
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