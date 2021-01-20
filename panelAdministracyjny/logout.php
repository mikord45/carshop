<?php
    session_start();
    session_destroy();
    header("location: ../strona główna/stronaGlowna.php");
?>