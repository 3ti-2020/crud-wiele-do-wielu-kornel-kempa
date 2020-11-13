<?php
 require_once "conn.php";
 $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
 $id = $_POST['idtytul'];
 $sql = "INSERT INTO `lib_wypoz` (`id_wypoz`, `id_tytul`, `id_uzytk`, `data_wypoz`) VALUES (NULL, '".$_POST['id_tytul']."',1,curdate())";
 mysqli_query($conn, $sql);
 header('Location: https://kornel1.herokuapp.com/logowanie.php');
?>