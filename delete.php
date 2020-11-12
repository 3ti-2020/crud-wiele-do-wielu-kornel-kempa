<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    if(isset($_POST['id']))
    {   
        require_once "conn.php"; 
        $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
        $id = $_POST['id'];
        $sql = "DELETE * from lib_autor_tytul WHERE id_autor_tytul='$id'";
    
        mysqli_query($conn, $sql)
        echo "Usunieto";
        header('Location: https://kornel1.herokuapp.com/logowanie.php');
    }else{
        echo "Wystąpił blad";
        header('Location: https://kornel1.herokuapp.com/logowanie.php');
    }
    
    
    ?>

</body>
</html>