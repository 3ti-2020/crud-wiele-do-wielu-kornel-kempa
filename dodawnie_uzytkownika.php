<?php
    require_once "conn.php";
    $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
    $haslo = $_POST['haslowlasciwy'];
    $login = $_POST['loginwlasciwy'];
    $query = "INSERT INTO `uzytkownicy`(`id`, `login`, `haslo`) VALUES (NULL,'$login','$haslo')";
    mysqli_query($conn, $query);

    mysqli_close($conn);
    header('Location: https://kornel1.herokuapp.com/');
?>`