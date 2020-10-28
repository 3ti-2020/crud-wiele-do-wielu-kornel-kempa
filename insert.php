<?php
$servername = "remotemysql.com";
$username = "yjgnzoishf";
$password = "ZApgJadL9H";
$dbname = "yjgnzoishf";
 $conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "INSERT INTO lib_autor(id_autor, imie) VALUES (NULL, '".$_POST['imie']."') ";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/kor/index.php');
?>

<?php
$servername = "remotemysql.com";
$username = "yjgnzoishf";
$password = "ZApgJadL9H";
$dbname = "yjgnzoishf";
 $conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "INSERT INTO lib_tytul(id_tytul, tytul) VALUES (NULL , '".$_POST['tytul']."') ";
 mysqli_query($conn, $sql);
 header('Location: http://127.0.0.1/kor/index.php');
?> 