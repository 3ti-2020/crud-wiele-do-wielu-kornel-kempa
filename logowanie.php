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

        <form action="insert.php" method="post">
            <?php
                 require_once "conn.php";
                 $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");

                 $query5 = "SELECT id_autor_tytul, imie, tytul FROM lib_tytul, lib_autor, lib_autor_tytul WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul";
                 $result5=mysqli_query($conn,$query5);

                 echo "<select name="tytul">";
                 while($row = mysqli_fetch_row($result5))
                 {
                     echo "<option value'".$row[1].$row[2]"'>".$row[1].$row[2]."</option>";
                 }
                 echo "</select>";
            ?>
        <form>
    
    </div>
  <div class="itemd">
        <a href="index.html" class="link">KARTA</a>
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-kornel-kempa" class="link">GITHUB</a>
        <a href="index.php" class="link">WYLOGUJ</a>
         
  </div>
    <div class="itemc">
    <?php
            
                            
                            $query="SELECT id_autor_tytul, imie, tytul FROM lib_tytul, lib_autor, lib_autor_tytul WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul";
                            $result=mysqli_query($conn,$query);

                            echo("<table border=1>");
                            echo("
                            <th>id</th>
                            <th>imie</th>
                            <th>tytul</th>
                            <th>Usuń</th>
                            <th>Wypożycz</th>
                            ");

                            while($row = mysqli_fetch_row($result) ){
                                echo("<tr>");
                                echo("<td>".$row[0]."</td>");
                                echo("<td>".$row[1]."</td>");
                                echo("<td>".$row[2]."</td>");
                                echo "<td>
                                    <form action='delete.php' method='POST'>
                                    <input type='hidden' name='id' value=".$row[0].">
                                    <input type='submit' value='delete'>
                                    </form>
                                    </td>";
                                
                                echo("<td>
                                <form action='wypozycz.php' method='POST'>
                                <input type='hidden' name='idtytul' value=".$row[0].">
                                <input type='submit' value='wypozycz'>
                                </form> </td>");
                                echo("</tr>");
                            }
                            echo("</table>");
                        
                mysqli_close($conn);


            ?>
    </div>
   
    
</body>
</html>