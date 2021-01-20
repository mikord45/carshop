<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Skup Samochodów</title>
<link rel="stylesheet" href="umówspotkanieStyle.css">

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
   <h2>Chcesz umówić spotkanie?</h2>
   <h3>Wypełnij poniższy formularz</h3>
    <article>
        <form method="POST">
                <label for="">marka:</label>
                <select name="selectMarka">
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
                    ?>
                </select><br><br>
                <label for="">minimalna cena:</label>
                <input type="number" name="min_cena" value="20000"><br><br>
                <label for="">maksymalna cena:</label>
                <input type="number" name="max_cena" value="50000"><br><br>
                <label for="">data:</label>
                <input type="date" name="kiedy"><br><br>
                <button type="submit">Wyślij</button>
                

        </form>
        <?php
            if(isset($_POST["selectMarka"])){
                $host = "localhost";
                $db_user = "root";
                $db_password = "";
                $db_name = "komis";
                $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
                $polaczenie->set_charset("utf8");
                // print_r($_POST);
                if($_POST["min_cena"] != null && $_POST["max_cena"] != null && $_POST["kiedy"] != null){
                    $kiedy = $_POST["kiedy"];
                    $marka = $_POST["selectMarka"];
                    $min_cena = $_POST["min_cena"];
                    $max_cena = $_POST["max_cena"];
                    $polaczenie->query("INSERT INTO terminarz(kiedy, w_sprawie_marki, min_cena, max_cena) VALUES ('$kiedy', '$marka', '$min_cena', '$max_cena');");
                    echo("<p style='text-align: center;'>Dodano spotkanie</p>");
                }
                else{
                    echo("<p style='text-align: center;'>Niepełne dane</p>");
                }
            }
        ?>
    </article>
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