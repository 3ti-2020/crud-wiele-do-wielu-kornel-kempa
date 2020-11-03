<?php
$servername = "remotemysql.com";
$username = "yjgnzoishf";
$password = "ZApgJadL9H";
$dbname = "yjgnzoishf";
 $conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "INSERT INTO lib_autor_tytul(id_autor_tytul, id_autor, id_tytul) VALUES (NULL , '".$_POST['autor']."', '".$_POST['tytul']."')";
 mysqli_query($conn, $sql);
 header('Location: https://kornel1.herokuapp.com/');
?>