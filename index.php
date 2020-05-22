<!DOCTYPE html>
<html>
  <head>
    <title>Rafał Bakowski</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="glownaa.css">
  </head>

  <body>
    <div class="container">

    <div class="item a">
            <p class="praca">Prace przygotował: Rafał Bakowski</p>
       <h1>Najlepsze samochody w okolicy</h1>
       <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/1280px-F1.svg.png " width="200px" class="f1" >
       
    </div>

    <div class="item b"> 
      <h3 class="par">Samochody moich kolegów i koleżanek:</h3>
      <?php

$servername="34.107.109.202";
$username="root";
$password="zaq1@WSX";
$dbname="rafal_bakowski";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM samochody_wlasciciel";

$result = $conn->query($sql);
   

    
echo("</h1>");
echo("<table class='tabela'>");
echo("<tr>
<th class='th'>ID</th>
<th class='th'>MARKA</th>
<th class='th'>MODEL</th>
<th class='th'>WŁAŚCICIEL</th>
</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr>");
echo("<td class='col'>".$wiersz['ID']."</td><td class='col'>".$wiersz['marka']."</td><td class='col imie'>".$wiersz['model']."</td><td class='col'>".$wiersz['wlasciciel']."</td>");
echo("</tr>");
};

echo("</table>");
?>
     
    </div>

    <div class="item c"> 
      <img src="https://files.clickweb.home.pl/homepl46709/image/ul260is_1.png" width="120px" height="80px">
    </br>
      <ul>
        <a href="konie.php"><li> TOP5 KONIE MECHANICZNE/POJEMNOŚĆ</li></a>
        </br>
          <a href="kolor.php"><li>NAJPOPULARNIEJSZA MARKI I LAKIERY</li></a>
      </ul>
    </br>
      <img src="https://cdn.pixabay.com/photo/2014/04/02/16/19/paint-306917_960_720.png" width="120px" height="80px">  
</br> </br> 
      <a href="java.html">KALKULATOR</a> 
    </div>


    </div>
  </body>
  <script src="kolor.js"></script>
</html>