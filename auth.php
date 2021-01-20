<?php
    session_start();
    // print_r($_POST);
    if(isset($_POST["login"]) && isset($_POST["password"])){
        $host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "komis";
        $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
        $polaczenie->set_charset("utf8");
        $loginFromWeb = $_POST["login"];
        $passwordFromWeb = $_POST["password"];
        // echo($loginFromWeb);
        // echo("<br/>");
        // echo($passwordFromWeb);
        $passwordFromDb = $polaczenie->query("SELECT * FROM uzytkownicy INNER JOIN typy_uzytkownikow ON uzytkownicy.typ_uzytkownika = typy_uzytkownikow.id WHERE nazwa_uzytkownika='$loginFromWeb'");
        $row=$passwordFromDb->fetch_array();
        while($row){
            // print_r($row);
            if(password_verify($passwordFromWeb, $row["haslo"])){
                echo("Zalogowano");
                echo("<br/>");
                $_SESSION['logged'] = true;
				$_SESSION['id'] = $row['id'];
                $_SESSION['user'] = $row['nazwa_uzytkownika'];
                $_SESSION["role"] = $row['nazwa'];
                print_r($_SESSION);
                header('Location: panelAdministracyjny/panelAdministracyjny.php');
            }
            else{
                echo("Nie zalogowano");
            }
            $row = $passwordFromDb->fetch_array();
        }
        echo("Nie zalogowano");
    }
    else{
        echo("Nie zalogowano");
    }
?>