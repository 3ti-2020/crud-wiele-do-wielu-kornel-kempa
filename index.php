<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kornel Kempa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="itema"><h1>Kornel Kempa(VER 2.4)</h1></div>
    <div class="itemb">
        <div class="lewy">

            <form action="logowanie.php" method="post">
                <p>Login</p>
                <input type="text" name="login">
                <p>Hasło</p>
                <input type="text" name="haslo"> <br>
                <input type="submit" value="Zaloguj"> <br>
            </form>
        </div>
        <div class="prawy">
            <form action="dodawnie_uzytkownika.php" method="post">
                Tworzenie nowego uzytkownika:<br>
                Wprowadz login: <input type="text" name="loginwlasciwy"><br>
                Wprowadz haslo: <input type="text" name="haslowlasciwy"><br>
                <input type="submit" value="Zarejestruj sie!">
                </div>
            </form>
        </div>
        
            

    
    </div>
  <div class="itemd">
        <a href="index.html" class="link">KARTA</a>
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-kornel-kempa" class="link">GITHUB</a>
         
  </div>
    <div class="itemc">
    <?php
                
                require_once "conn.php";
                $conn=mysqli_connect($servername, $username, $password, $dbname) or die("Błąd połączenia");

                $query="SELECT id_autor_tytul, imie, tytul FROM lib_tytul, lib_autor, lib_autor_tytul WHERE lib_autor_tytul.id_autor=lib_autor.id_autor AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul";
                $result=mysqli_query($conn,$query);

                echo("<table border=1>");
                echo("
                <th>id</th>
                <th>imie</th>
                <th>tytul</th>
                ");

                while($row = mysqli_fetch_row($result) ){
                    echo("<tr>");
                    echo("<td>".$row[0]."</td>");
                    echo("<td>".$row[1]."</td>");
                    echo("<td>".$row[2]."</td>");
                    echo("</tr>");
                }  
                echo("</table>");

                mysqli_close($conn);


            ?>

    </div>
   
    
</body>
</html>