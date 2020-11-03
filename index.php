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
<form action="insert.php" method="post">
    <p>Imie</p>
    <input type="text" name="imie">
    <p>Tytul</p>
    <input type="text" name="tytul"> <br>
    <input type="submit" value="Dodaj"> <br>
    </form>
    
    </div>
    <div class="itemc">
    <?php
    $servername = "remotemysql.com";
    $username = "yjgnzoishf";
    $password = "ZApgJadL9H";
    $dbname = "yjgnzoishf";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $result = $conn -> query("select `yjgnzoishf`.`lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`yjgnzoishf`.`lib_autor`.`imie` AS `imie`,`yjgnzoishf`.`lib_tytul`.`tytul` AS `tytul` from `yjgnzoishf`.`lib_tytul` join `yjgnzoishf`.`lib_autor_tytul` join `yjgnzoishf`.`lib_autor` where `yjgnzoishf`.`lib_autor_tytul`.`id_autor` = `yjgnzoishf`.`lib_autor`.`id_autor` and `yjgnzoishf`.`lib_autor_tytul`.`id_tytul` = `yjgnzoishf`.`lib_tytul`.`id_tytul`");
    echo("<table border='1'>");
    while($row = $result -> fetch_assoc()){
        echo("<tr class='myrow'>");
        echo("<td>".$row['id_autor_tytul']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['tytul']."</td>"."<td>
        <form action='delete.php' method='POST'>
        <input type='hidden' name='id' value=".$row['id_autor_tytul'].">
        <input type='submit' value='delete'>
        </form> </td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
    </div>
   
    
</body>
<script src="main.js">
</html>