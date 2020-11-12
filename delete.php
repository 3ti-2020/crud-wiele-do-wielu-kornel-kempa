
    <?php
 
        require_once "conn.php"; 
        $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
        $id = $_POST['idusun'];
        $sql = "DELETE * FROM lib_autor_tytul WHERE id_autor_tytul='$idusun'";
    
        mysqli_query($conn, $sql)
        echo "Usunieto";
        header('Location: https://kornel1.herokuapp.com/logowanie.php');
    
    
    
    ?>
