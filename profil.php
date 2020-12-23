<html>
 <head>
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    
    <link href="stilovi3.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <meta charset="UTF-8">
    <title>Moj profil</title>
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
                        
                       <li>  <a href="brendovi.php">Kupovina</a> </li>
					   <li>  <a href="korpa.php">Korpa</a> </li>
                       <li class = "current"><a href="profil.php">Moj Profil</a></li>
                         <li><a href="logout.php">Odjavi se</a></li>
                       
                       

                    </ul>
                </nav>
				</div>
				</div>
				</header>
             <?php   
                include "konekcija.php";
                $sql="SELECT *FROM korisnik WHERE username='$user'";
				
			
                if (!$q=$mysqli->query($sql)){
                    die ("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
                }
               
                 else { ?>

                
                   <?php while ($red=mysqli_fetch_object($q)){
                    ?>
					<section id = "showcase">
          <div class = "container">
            <br> <br> <br> 
            <form class="form2">
          <p> Ime i prezime: <?php echo $red->imeiprezime; ?></p>
					<p> E-mail: <?php echo $red->email; ?></p>
					<p> Korisničko ime: <?php echo $red->username; ?></p>
					<p> Šifra: <?php echo $red->password; ?></p>
          </form>
         
          <button id="myButton" >Obriši profil :( </button>

        <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
        location.href = "deleteuser.php";
    };
       </script>
          
			</div>
      <br><br><br>
				 <h2>Prethodna kupovina:</h2>
				
 

                <?php
                } }
          
               

              
               
               ?>
			  <?php   
    
        $sql2="SELECT p.naziv, p.brend, p.cena, ko.status from parfem p inner join korpa ko on p.id=ko.parfemId inner join korisnik k on ko.korisnikId=k.id where k.username = '$user' ";
                if (!$q=$mysqli->query($sql2)){
                    die ("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
                }
                if ($q->num_rows==0){
                    echo "Nema prethodnih kupovina";
                } 
                 else {   ?>
                <div style="overflow-x:auto;">
                <table id="rezervacije">
                     <tr>
                        <th><b>Naziv</b></th>
                        <th><b>Brend</b></th>
                        <th><b>Cena</b></th>
				        <th><b>Status</b></th>

                    </tr>
                    <?php   
                    while ($red=$q->fetch_object()){
                    ?>
                    <tr>
    
                        <td><?php echo $red->naziv; ?></td> 
                        <td><?php echo $red->brend; ?></td>
                        <td><?php echo $red->cena; ?></td>
						<td><?php echo $red->status; ?></td>
                        
                    </tr>
    
                    <?php
                     }
                    ?>
                </table>
                   </div>
                  </section>
                <?php
                } 
          
               ?>

        </body>



</html>