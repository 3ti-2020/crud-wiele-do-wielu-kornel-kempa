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
    
    </div>
    <div class="itemc">
    <?php
                $servername = "remotemysql.com";
                $username = "yjgnzoishf";
                $password = "ZApgJadL9H";
                $dbname = "yjgnzoishf";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $result = $conn->query("SELECT id_autor_tytul, imie, tytul FROM lib_tytul, lib_autor, lib_autor_tytul WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul");

                echo("<table border=1>");
                echo("
                <th>id</th>
                <th>imie</th>
                <th>tytul</th>
                ");

                while($row = $result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id_autor_tytul']."</td>");
                    echo("<td>".$row['imie']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("</tr>");
                }  
                echo("</table>");

                


            ?>
    </div>
   
    
</body>
</html>