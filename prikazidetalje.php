<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
	  <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link href="stilovi3.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="pronadji.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<?php
if (!isset ($_GET["brend"])){
echo "Parametar brend nije prosleđen!";
} else {
$pomocna=$_GET["brend"];

include "konekcija.php";

$sql="SELECT * from parfem where brend='".$pomocna."'";

$rezultat = $mysqli->query($sql);
//ispis naziva kolona u tabeli
echo " <table id='rezervacije'>
                     <tr>
                        <th><b>Naziv parfema</b></th>
                        <th><b>Brend parfema</b></th>
                        <th><b>Opis</b></th>
                       
                        <th><b>Cena</b></th>
                     
                        <th><b>Kupi</b></th>

                    </tr>";
//ispis podataka o projekciji
while($red = $rezultat->fetch_object()){
 echo "<tr>";
 echo "<td>" . $red->naziv . "</td>";
 echo "<td>" . $red->brend . "</td>";
 echo "<td>" . $red->opis . "</td>";
 echo "<td>" . $red->cena . "</td>";
 ?>
 <td> <a href="process.php?id=<?php echo $red->id; ?> "> <button name="cart" style="align-self: center;">Kupi</button></a></td>
<?php
 echo "</tr>" ;
 }
echo "</table>";

$mysqli->close();
}
?>

</body></html>