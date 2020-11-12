<?php
if(isset($_POST['id']))
{   
    require_once "conn.php"; 
    $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
    $id = $_POST['id'];
    $sql = "DELETE * from lib_autor_tytul WHERE id_autor_tytul='$id'";
 
    mysqli_query($conn, $sql)
    echo "Usunieto";
 }else{
     echo "Wystąpił blad";
 }
 
 //header('Location: https://kornel1.herokuapp.com/logowanie.php');
?>