<?php
 require_once "conn.php";
 $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
 $id = $_POST['idtytul'];
 $query = "INSERT INTO `lib_wypoz` (`id_wypoz`, `id_tytul`, `id_uzytk`, `data_wypoz`) VALUES (NULL,'$id','a',curdate()";
//  mysqli_query($conn, $sql);
 $result=mysqli_query($conn,$query);
 header('Location: https://kornel1.herokuapp.com/logowanie.php');
?>