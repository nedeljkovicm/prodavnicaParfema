<html
 <head>
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link href="stilovi5.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="jquery-1.10.2.js"></script>
	<script type="text/javascript">
     $(document).ready(function () {
     $(".obrisi_link").click(function(){
     var vrednost = ($(this).attr("id")).substring(7);
     var red_tabele = $(this);
     $.get("obrisi.php", { id: vrednost },
     function(data){
     if (data == 1){
     $(red_tabele).parent().parent().remove();
}
});
});
});
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="UTF-8">
    <title>Korpa</title>
  </head>
  <?php
  session_start(); //starts the session
  if($_SESSION['user']){ //checks if user is logged in
  }
  else{
    header("location:index.php"); // redirects if user is not logged in
  }
  $user = $_SESSION['user']; //assigns user value
  ?>
  <body>

     <header>
            <div class = "container">
                
                <div id = "brand"> 
                    <h1><span class = "highlight">Online parfimerija</span></h1>
                    </div>

                <nav> 
                    <ul>
                        <li ><a href = "home.php">Ponuda</a></li>
                       <li class> <a href="brendovi.php">Kupovina</a> </li>
					    <li class = "current">  <a href="korpa.php">Korpa</a> </li>
                       <li><a href="profil.php">Moj profil</a></li>
                         <li><a href="logout.php">Odjavi se</a></li>
                       
                       

                    </ul>
                </nav>
				</div>
				</div>
				</header>
				 <section id = "showcase">
                 <div class = "container">
				 <br><br><br><br><br>
				 <table id="rezervacije">
				  <tr>
                        <th><b>Naziv</b></th>
                        <th><b>Brend</b></th>
                        
						<th><b>Cena</b></th>
					   
						<th><b>Želite li da poništite kupovinu?</b></th>

                    </tr>
				   <?php
include "konekcija.php";
$query="SELECT ko.id, p.naziv,p.brend,p.cena from parfem p inner join korpa ko on p.id=ko.parfemId inner join korisnik k on ko.korisnikId=k.id where ko.status='u obradi' AND k.username = '$user'";
 $rezultat = $mysqli->query($query);
 while($red = $rezultat->fetch_object()){
 $id= $red->id;
 echo "<tr>";
 
 echo "<td>" . $red->naziv . "</td>";
 echo "<td>" . $red->brend. "</td>";
 echo "<td>" . $red->cena . "</td>";

 ?>
 <td><a href="#" class="obrisi_link" id="obrisi_<?php echo $red->id;?>">Poništi</a></td>
 <?php
echo "</tr>" ;
 }
 echo"</div>";
echo "</table>";

$mysqli->close();

?>
</div>
</section>
</body>
</html>