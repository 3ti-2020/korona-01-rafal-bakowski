<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konie mechaniczne</title>
    <link rel="stylesheet" href="konie.css">
</head>
<body>
    <div class="container">

        <div class="item a">
            <a class="powrot" href="index.php">strona główna</a>
                
           <h1>TOP5 konie mechaniczne/pojemność</h1>
           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/1280px-F1.svg.png " width="200px" class="f1" >
           
        </div>
    
        <div class="item b"> 

        <img src="https://carwow-uk-0.imgix.net/model-photos/original/audi_17a5sportco2b_lowaggressive_floret-silver-metallic.png?auto=format&cs=tinysrgb&fit=clip&ixlib=rb-1.1.0&q=60&w=750" width="400px"class="a5" >
        
        <?php
          
          

$servername="34.107.109.202";
$username="root";
$password="zaq1@WSX";
$dbname="rafal_bakowski";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * from samochody_parametry order by pojemnosc_silnika desc limit 5;";

$result = $conn->query($sql);
   

echo("<h3 class='par'>TOP5 POJEMNOŚĆ SILNIKA:");
echo("</h3>");

echo("</h1>");
echo("<table class='tabela'>");
echo("<tr>

<th class='th'>MARKA</th>
<th class='th'>MODEL</th>
<th class='th'>POJEMNOŚĆ SILNIKA</th>

</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr>");
echo("<td class='col'>".$wiersz['marka']."</td><td class='col imie'>".$wiersz['model']."</td><td class='col'>".$wiersz['pojemnosc_silnika']."</td>");
echo("</tr>");
};



echo("</table>");
echo("</br>");


$sql = "SELECT * from samochody_parametry order by konie_mechaniczne desc limit 5;";

$result = $conn->query($sql);

echo("<h3 class='par'>TOP5 KONIE MECHANICZNE:");
echo("</h3>");
echo("</h1>");
echo("<table class='tabela'>");
echo("<tr>
<th class='th'>MARKA</th>
<th class='th'>MODEL</th>
<th class='th'>KONIE MECHANICZNE</th>

</tr>");


while($wiersz = $result->fetch_assoc()){
   
    echo("<tr>");
echo("<td class='col'>".$wiersz['marka']."</td><td class='col imie'>".$wiersz['model']."</td><td class='col'>".$wiersz['konie_mechaniczne']."</td>");
echo("</tr>");
};

echo("</table>"); 
?> 


    
    
    </div>
    
        </div>
</body>
</html>