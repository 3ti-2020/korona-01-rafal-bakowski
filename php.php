<!doctype html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body class="body">
<div class="container">
    
<?php

$servername="34.107.109.202";
$username="root";
$password="zaq1@WSX";
$dbname="rafal_bakowski";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM samochody_parametry";

$result = $conn->query($sql);
   

    
echo("</h1>");
echo("<table class='tabelka'>");
echo("<tr>
<th class='th'>id</th>
<th class='th'>marka</th>
<th class='th'>model</th>
<th class='th'>pojemnosc_silnika</th>
<th class='th'>konie_mechaniczne</th>
</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr class='myrow'>");
echo("<td class='mycol'>".$wiersz['ID']."</td><td class='mycol'>".$wiersz['marka']."</td><td class='mycol imie'>".$wiersz['model']."</td><td class='mycol'>".$wiersz['pojemnosc_silnika']."</td><td class='mycol'>".$wiersz['konie_mechaniczne']."</td>");
echo("</tr>");
};

echo("</table>");

$sql = "SELECT * FROM samochody_wlasciciel";

$result = $conn->query($sql);

echo("</h1>");
echo("<table class='tabelka'>");
echo("<tr>
<th class='th'>id</th>
<th class='th'>marka</th>
<th class='th'>model</th>
<th class='th'>wlasciciel</th>
<th class='th'>kolor</th>
</tr>");

while($wiersz = $result->fetch_assoc()){
   
    echo("<tr class='myrow'>");
echo("<td class='mycol'>".$wiersz['ID']."</td><td class='mycol'>".$wiersz['marka']."</td><td class='mycol imie'>".$wiersz['model']."</td><td class='mycol'>".$wiersz['wlasciciel']."</td><td class='mycol'>".$wiersz['kolor']."</td>");
echo("</tr>");
};

echo("</table>");




?>

</div>
</body>
</html>