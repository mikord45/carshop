

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Strona główna</title>
<link rel="stylesheet" href="panelAdministracyjnyStyle.css">
<link rel="stylesheet" href="../fontello/css/fontello.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<?php
session_start();
if (!(isset($_SESSION['logged'])) || ($_SESSION['logged']==false))
{
    header('Location: ../strona główna/stronaGlowna.php');
    exit();
}
?>

</head>
<body>

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
    <h3>Panel administracyjny</h3>
    <p>Dodaj samochód</p>
    <form method="POST">
        <label>Marka: </label>
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
                while($row){
                    echo("<option value=".$row["id"].">".$row["nazwa_marki"]."</option>");
                    $row = $result->fetch_array();
                }
                if(isset($_GET["id_spotkania"])){
                    $idToDel = $_GET["id_spotkania"];
                    $polaczenie->query("DELETE FROM terminarz WHERE id=$idToDel");
                }
            ?>
        </select>
        <br/><br/>
        <label>Nazwa: </label>
        <input name="nazwa"/>
        <br/><br/>
        <label>Rocznik: </label>
        <input name="rocznik" type="number"/>
        <br/><br/>
        <label>Przebieg: </label>
        <input name="przebieg" type="number"/>
        <br/><br/>
        <label>Cena: </label>
        <input name="cena" type="number"/>
        <br/><br/>
        <label>Adres url zdjęcia: </label>
        <input name="zdj" type="text"/>
        <br/><br/>
        <button type="submit">Wyślij</button>
    </form>
    <p>
        <?php
        if(isset($_POST["marka"])){
            if($_POST["marka"] != null && $_POST["nazwa"] != null && $_POST["rocznik"] != null && $_POST["przebieg"] != null && $_POST["cena"] != null && $_POST["zdj"] != null){
                $marka = $_POST["marka"];
                $nazwa = $_POST["nazwa"];
                $rocznik = $_POST["rocznik"];
                $przebieg = $_POST["przebieg"];
                $cena = $_POST["cena"];
                $zdj = $_POST["zdj"];
                $polaczenie->query("INSERT INTO samochody (marka, nazwa, rocznik, przebieg, cena, zdj) VALUES ('$marka', '$nazwa', '$rocznik', '$przebieg', '$cena', '$zdj');");
                echo("Dodano nowy samochód");
            } 
        }            
        ?>
    </p>
    <p>
        Edytuj terminarz spotkań
    </p>
        <table>
            <tr>
                <td>
                    Data
                </td>
                <td>
                    Marka
                </td>
                <td>
                    Cena minimalna
                </td>
                <td>
                    Cena maksymalna
                </td>
                <td>
                    Usuń
                </td>
            </tr>
            <?php
                $result = $polaczenie->query("SELECT * FROM terminarz INNER JOIN marki ON marki.id = terminarz.w_sprawie_marki");
                $row = $result->fetch_array();
                while($row){
                    echo("<tr>");
                    echo("<td>");
                    echo($row["kiedy"]);
                    echo("</td>");
                    echo("<td>");
                    echo($row["nazwa_marki"]);
                    echo("</td>");
                    echo("<td>");
                    echo($row["min_cena"]);
                    echo("</td>");
                    echo("<td>");
                    echo($row["max_cena"]);
                    echo("</td>");
                    echo("<td>");
                    echo("<a href='?id_spotkania=".$row["0"]."'>usun</a>");
                    echo("</td>");
                    echo("</tr>");
                    $row = $result->fetch_array();
                }
            ?>
        </table>
        <?php
            if($_SESSION["role"] == "administrator"){
                echo('<p>Dodaj nowego moderatora</p><form method="POST"><label>Nazwa użytkownika</label><input name="nazwa_uzytkownika"><label>Hasło:</label><input name="haslo" type="password"><br/><button type="submit">Dodaj</button></form>');
            }
        ?>
        <p>
            <?php
                if(isset($_POST["nazwa_uzytkownika"])){
                    if(($_POST["nazwa_uzytkownika"])!=null && isset($_POST["haslo"]) != null){
                        $nazwa_uzytkownika = $_POST["nazwa_uzytkownika"];
                        $haslo = $_POST["haslo"];
                        $hashedHaslo = password_hash($haslo, PASSWORD_DEFAULT);
                        $polaczenie->query("INSERT INTO uzytkownicy(nazwa_uzytkownika, haslo, typ_uzytkownika) VALUES ('$nazwa_uzytkownika', '$hashedHaslo', 2);");
                        echo("Nowy uzytkownik został dodany");
                    }
                }
            ?>
        </p>
        <a href="logout.php">
                Wyloguj
        <a>
</content>
<aside>


</aside>
</main>
<footer>


</footer>


</body>
</html>