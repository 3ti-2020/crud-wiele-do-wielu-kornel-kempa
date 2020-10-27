<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "kor";
 $conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "INSERT INTO lib_autor_tytul(id_autor_tytul, id_autor, id_tytul) VALUES (NULL , '".$_POST['autor']."', '".$_POST['tytul']."')";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/kor/index.php');
?>