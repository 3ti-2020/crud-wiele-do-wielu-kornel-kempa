<?php
 $servername = "remotemysql.com";
 $username = "yjgnzoishf";
 $password = "ZApgJadL9H";
 $dbname = "yjgnzoishf";
  $conn = new mysqli($servername, $username, $password, $dbname);
 $id = $_POST['id'];
 $sql = "DELETE from lib_autor_tytul WHERE id_autor_tytul='$id'";
 mysqli_query($conn, $sql);
 header('Location: https://kornel1.herokuapp.com/');
?>