<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
	 <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link href="stilovi3.css" rel="stylesheet" type="text/css"/>
     <link href="stilovi2.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  

    <meta charset="UTF-8">
    <title>Katalog</title>
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
                        <li class = "current"><a href = "home.php">Katalog</a></li>
                        
                       <li>  <a href="brendovi.php">Kupovina</a> </li>
					   <li>  <a href="korpa.php">Moja korpa</a> </li>
                       <li><a href="profil.php">Moj profil</a></li>
                         <li><a href="logout.php">Odjavi se</a></li>
                       
                       

                    </ul>
                </nav>

            </div>

        </header>
   <section id = "showcase">
            <div class = "container">
    <p><br> Dobrodošli <?php Print "$user"?>!</p> <!--Displays user's name-->
    <h2>Pogledajte našu ponudu u našem katalogu<h2>
    
   <?php   
    include "konekcija.php";
                $sql="SELECT id,naziv,brend,slika FROM parfem ";
                if (!$q=$mysqli->query($sql)){
                    die ("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
                }
                if ($q->num_rows==0){
                    echo "Nema parfema";
                } 
                 else { ?>

                
                   <?php while ($red=mysqli_fetch_object($q)){
                    ?>
                    <div class="spe-prods">
                 
                 <div class="mainbox">
                  <a href="<?php echo $red->id ?>.php" target="_blank">
                   
                    <p> <?php echo $red->naziv; ?></p>
                   <p> <?php echo $red->brend; ?></p>
                   <?php 

                    echo '<img class="rotprod" src="data:image/jpeg;base64,'.base64_encode($red->slika) .'"/>"'?> 
               </a>
              </div>
                   </div>
                 
               
                <?php
                } }
          
               ?>
             
    
    </div>
  </section>
  </body>
</html>