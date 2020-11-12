<?php
    require_once "conn.php";
    $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
    $haslo = $_POST['haslowlasciwy'];
    $login = $_POST['loginwlasciwy'];
    $query = "INSERT INTO `uzytkownicy` VALUES ('','$login','$haslo')";
    mysqli_query($conn, $query);
    header('Location: https://kornel1.herokuapp.com/');
?>`