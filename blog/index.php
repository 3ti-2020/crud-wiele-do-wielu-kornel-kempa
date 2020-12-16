<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$servername = "remotemysql.com";
$username = "yjgnzoishf";
$password = "ZApgJadL9H";
$dbname = "yjgnzoishf";
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['akcja'])){ 
    $zmienna = $_GET['akcja'];
    $result = $conn->query("SELECT Distinct tytul, tekst, posty.id FROM `post_tag`, posty, tagi WHERE post_tag.posty_id = posty.id AND post_tag.tagi_id = tagi.id AND tag = '$zmienna'"); 
}else{
    $result = $conn->query("SELECT Distinct tytul, tekst, id FROM posty");  
}     
?>
    <div class="container">
        <div class="itema">
            <h1>BLOG</h1>
        </div>
        <div class="itemb">
        <?php            
            while($wiersz = $result->fetch_assoc()){
                echo("<div class='header'>");
                    echo("<h1>".$wiersz['tytul']."</h1>");
                    $posty = $wiersz["id"];
                    $result2 = $conn->query("SELECT tag FROM `post_tag`, posty, tagi WHERE post_tag.posty_id = posty.id AND post_tag.tagi_id = tagi.id AND post_tag.posty_id = $posty");
                while($wiersz2 = $result2->fetch_assoc()){
                    echo("<tr><b><a href='?akcja=".$wiersz2['tag']."'>".$wiersz2['tag']."</a></b></tr>, ");
                } 
                echo("</div>");
                echo("<div class='main'>");
                    echo("<p>".$wiersz['tekst']."</p>");
                echo("</div>");
            }
        ?>
        </div>
    </div>
    
</body>
</html>