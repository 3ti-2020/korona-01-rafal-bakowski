<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konie mechaniczne</title>
    <link rel="stylesheet" href="kolor.css">
</head>
<body>
    <div class="container">

        <div class="item a">
            <a class="powrot" href="index.php">strona główna</a>
                
           <h1>Popularne marki i lakiery</h1>
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/1280px-F1.svg.png " width="200px" class="f1" >
           
        </div>
    
        <div class="item b"> 
        <img src="https://i.pinimg.com/originals/57/79/8b/57798b153e4968109719588c4bc2c6fd.png" width="300px" class="logo" >
          
          <?php

$servername="34.107.109.202";
$username="root";
$password="zaq1@WSX";
$dbname="rafal_bakowski";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM samochody_wlasciciel WHERE kolor='czarny' or kolor='bialy' order by kolor desc";

$result = $conn->query($sql);
   

echo("<h3 class='par'>POPULARNE LAKIERY:");
echo("</h3>");
echo("</h1>");
echo("<table class='tabela'>");
echo("<tr>
<th class='th'>MARKA</th>
<th class='th'>MODEL</th>
<th class='th'>LAKIER</th>
<th class='th'>WŁAŚCICIEL</th>
</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr>");
echo("<td class='col'>".$wiersz['marka']."</td><td class='col imie'>".$wiersz['model']."</td><td class='col'>".$wiersz['kolor']."</td><td class='col imie'>".$wiersz['wlasciciel']."</td>");
echo("</tr>");
};

echo("</table>");
echo("</br>");

$sql = "SELECT * FROM samochody_wlasciciel WHERE marka='audi' or marka='volkswagen' or marka='opel' order by marka asc";

$result = $conn->query($sql);
   

echo("<h3 class='par'>POPULARNE MARKI:");
echo("</h3>");
echo("</h1>");
echo("<table class='tabela'>");
echo("<tr>
<th class='th'>MARKA</th>
<th class='th'>WŁAŚCICIEL</th>
</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr>");
echo("<td class='col'>".$wiersz['marka']."</td><td class='col'>".$wiersz['wlasciciel']."</td>");
echo("</tr>");
};

echo("</table>");
?>

          
         
        </div>
    
        
    
    
        </div>
</body>
</html>