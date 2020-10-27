<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kornel Kempa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="itema"><h1>Kornel Kempa</h1></div>
    <div class="itemb">
    <form action="insert.php" method="post">
    <p>Imie</p>
    <input type="text" name="imie">
    <p>Tytul</p>
    <input type="text" name="tytul"> <br>
    <input type="submit" value="Dodaj"> <br>
    </form>
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "kor";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $result_autor = $conn->query("SELECT * FROM lib_autor");
    $result_tytuly = $conn->query("SELECT * FROM lib_tytul");

    echo("<form action='krzyz.php' method='POST'  class='insert'>");
    echo("<select name='autor'>");
    while($wiersz=$result_autor->fetch_assoc() ){
        echo("<option value='".$wiersz['id_autor']."'>".$wiersz['imie']."</option>");
    }
    echo("</select>");

    echo("<select name='tytul'>");
    while($wiersz=$result_tytuly->fetch_assoc() ){
        echo("<option value='".$wiersz['id_tytul']."'>".$wiersz['tytul']."</option>");
    }
    echo("</select>");

    echo("<input type='submit' value='Dodaj'>");
    echo("</form>");
    ?>
    </div>
    <div class="itemc"></div>
   
    
</body>
<script src="main.js">
</html>