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
  <div class="itemd">
        <a href="index.html" class="link">KARTA</a>
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-kornel-kempa" class="link">GITHUB</a>
        <a href="index.php" class="link">WYLOGUJ</a>
         
  </div>
    <div class="itemc">
    <?php
                
        
                //if(isset($_POST['login']) && isset($_POST['haslo']))
                //{
                    
                    //$login = $_POST['login'];
                    //$haslo = $_POST['haslo'];
                    
                    
                    
                    require_once "conn.php";
                    $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
                    
                    //$query2 = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";
                    //if($result2 = mysqli_query($conn, $query2))
                    //{
                        //$uzytkownik = mysqli_num_rows($result2);
                        //if($uzytkownik > 0)
                        //{   
                            //$wiersz = mysqli_fetch_array($result2);
                            
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


                
                        //}
                    //}

                    
                //}


                if($_POST)
                mysqli_close($conn);


            ?>

<?php
    require_once "conn.php";
    $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");
    $query="SELECT id_wypoz, lib_wypoz.id_tytul, lib_tytul.tytul, uzytkownicy.login, data_wypoz FROM lib_wypoz,uzytkownicy,lib_tytul WHERE lib_wypoz.id_tytul = lib_tytul.id_tytul AND lib_wypoz.id_uzytk=uzytkownicy.id";
    $result=mysqli_query($conn,$query);
    
    echo("<table class='tabelka' border='1'>");
    echo("<th>Id</th>");
    echo("<th>Id tytuł</th>");
    echo("<th>Tytuł</th>");
    echo("<th>Login</th>");
    echo("<th>Data</th>");
    echo("<th>Oddaj</th>");
    while($row = $result -> fetch_assoc()){
        echo("<tr class='myrow'>");
        echo("<td>".$row['id_wypoz']."</td>"."<td>".$row['id_tytul']."</td>"."<td>".$row['tytul']."</td>"."<td>".$row['login']."</td>"."<td>".$row['haslo']."</td>"."<td>".$row['data_wypoz']."</td>");
        echo("<td>
        <form action='oddaj.php' method='POST'>
        <input type='hidden' name='idoddaj' value=".$row['id_wypoz'].">
        <input type='submit' value='Oddaj'>
        </form> </td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>
    
    </div>
   
    
</body>
</html>