<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sprzedaż</title>
<link rel="stylesheet" href="sprzedazStyle.css">

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
<p>Wyszukaj samochód</p>
<form method="POST">
    <label>Wybierz markę: </label>
    <select name="marka">
        <?php
            $host = "localhost";
            $db_user = "root";
            $db_password = "";
            $db_name = "komis";
            $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
            $polaczenie->set_charset("utf8");
            $result = $polaczenie->query("SELECT * FROM marki");
            $row = $result->fetch_array();
            $id = $row["id"];
            while($row){
                echo("<option value=".$row["id"].">".$row["nazwa_marki"]."</option>");
                $row = $result->fetch_array();

            }
        ?>
    </select>
    <label>Podaj cenę maksymalną: </label>
    <input value="50000" name="maks_cena"/>
    <button type="submit">Szukaj</button>
</form>
<form method="POST">
    <button type="submit">Pokaż wszystkie</button>
</form>
    <table>
        <tr>
            <td>
                Marka
            </td>   
            <td>
                Nazwa modelu
            </td> 
            <td>
                Rocznik
            </td> 
            <td>
                Przebieg
            </td> 
            <td>
                Cena
            </td> 
            <td>
                Zdj
            </td> 
        </tr>
        <?php
        if(isset($_POST["maks_cena"])){
            if($_POST["maks_cena"] != null){
                $marka = $_POST["marka"];
                $cena = $_POST["maks_cena"];
                $result = $polaczenie->query("SELECT * FROM samochody INNER JOIN marki ON marki.id = samochody.marka WHERE marka=$marka AND cena <= $cena");
                $row = $result->fetch_array();
            }
            else{
                $result = $polaczenie->query("SELECT * FROM samochody INNER JOIN marki ON marki.id = samochody.marka");
                $row = $result->fetch_array();
            }
        }
        else{
            $result = $polaczenie->query("SELECT * FROM samochody INNER JOIN marki ON marki.id = samochody.marka");
            $row = $result->fetch_array();
        }
        while($row){
            $url = $row["zdj"];
            echo("<tr>");
            echo("<td>");
            echo($row["nazwa_marki"]);
            echo("</td>");
            echo("<td>");
            echo($row["nazwa"]);
            echo("</td>");
            echo("<td>");
            echo($row["rocznik"]);
            echo("</td>");
            echo("<td>");
            echo($row["przebieg"]);
            echo("</td>");
            echo("<td>");
            echo($row["cena"]);
            echo("</td>");
            echo("<td>");
            echo("<img src='$url'/>");
            echo("</td>");
            echo("</tr>");
            $row = $result->fetch_array();
        }
    ?>
    </table>
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