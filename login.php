<?php              
session_start();      
require_once "conn.php";          
$polonczenie = @new mysqli($servername, $username, $password, $dbname);                        
$login = $_POST['login'];         
$haslo = $_POST['haslo'];                      
$sql = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";                     
if($resultat = @$polonczenie->query($sql)){             
    $ilu_userow = $resultat->num_rows;             
    if($ilu_userow>0){                 
        $wiersz = $resultat->fetch_assoc();                 
        $_SESSION['login'] = $wiersz['login'];                                                                            
        unset($_SESSION['blad']);                 
        $resultat->free_result();                                  
        header('Location: logowanie.php');             
    }else            
    {                 
        $SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';                 
        header('Location: index.php');             
    }         
}