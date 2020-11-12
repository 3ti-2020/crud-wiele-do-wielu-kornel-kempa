<?php
$servername = "remotemysql.com";
$username = "yjgnzoishf";
$password = "ZApgJadL9H";
$dbname = "yjgnzoishf";
 $conn = new mysqli($servername, $username, $password, $dbname);

$imie = $_POST['imie'];
$tytul = $_POST['tytul'];

$sql_imie = "INSERT INTO `lib_autor`(`id_autor`, `imie`) VALUES (NULL,'$imie')";

$query1 = mysqli_query($conn, $sql_imie);

if($query1){

    $sql_tytul = "INSERT INTO `lib_tytul`(`id_tytul`, `tytul`) VALUES (NULL,'$tytul')";

    $query2 = mysqli_query($conn, $sql_tytul);

}

if($query2){
    $id_autor = "SELECT id_autor FROM `lib_autor` WHERE imie='$imie'";
$result1 = $conn->query($id_autor);
while($row1 = $result1->fetch_assoc()){
    $imieid = $row1['id_autor'];
};

$id_tytul = "SELECT id_tytul FROM `lib_tytul` WHERE tytul='$tytul'";
$result2 = $conn->query($id_tytul);
while($row2 = $result2->fetch_assoc()){
    $tytulid = $row2['id_tytul'];
};

$sql_a_t = "INSERT INTO `lib_autor_tytul`(`id_autor_tytul`, `id_autor`, `id_tytul`) VALUES (NULL,'$imieid','$tytulid')";

$query3 = mysqli_query($conn, $sql_a_t);
}
header('Location: https://kornel1.herokuapp.com/logowanie.php');
?>