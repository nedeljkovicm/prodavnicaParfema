<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>
    <link href="stilovi3.css" rel="stylesheet" type="text/css"/>
     <link href="stilovi2.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

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
                    <h1><span class = "highlight">Online parfimerija</span> </h1>
                    </div>

                <nav> 
                    <ul>
                        <li><a href = "home.php">Katalog</a></li>
                        
                       <li>  <a href="brendovi.php">Kupovina</a> </li>
					   <li>  <a href="korpa.php">Moja korpa</a> </li>
                       <li class><a href="profil.php">Moj profil</a></li>
                         <li><a href="logout.php">Odjavi se</a></li>
                       
                       

                    </ul>
                </nav>

            </div>

        </header>
   <section id = "showcase">
            <div class = "container">
   
   <?php 
   
    include "konekcija.php";
                $sql="SELECT * FROM parfem WHERE id=1";
                if (!$q=$mysqli->query($sql)){
                    die ("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
                }
                if ($q->num_rows==0){
                    echo "Nema parfema";
                } 
                 else { ?>

                
                   <?php while ($red=mysqli_fetch_object($q)){
                    ?>
                   
                 
               
                  
                   
              <div id="slides"  style="float:left; margin-top: 110px; width:50%; margin-right:2%; margin-bottom: 0.5cm; border-radius: 10px;">  
      
     <img src="slike/MarcJacobsDaisy.1.jpg" style="height:100%">
      <img src ="slike/9.4.jpg"  style="height: 100%">
      
      <img src="slike/9.6.jpg"  style="height: 100% ">
	  
     
     
    </div>
  <div style="margin-top: 110px float:right;">
                    <h1> <?php echo $red->naziv; ?></h1>
					<p> <?php echo $red->brend; ?></p>
                     <p> <?php echo $red->opis; ?></p>
					 <p> €<?php echo $red->cena; ?></p>

					 
                    

                
  </div>


  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  
  <script src="jquery.slides.min.js"></script>
   <script>
    $(function() {
      $('#slides').slidesjs({
        
        navigation: false
      });
    });
  </script>
             
                
               
                <?php
                } }
          
               ?>
             
    
    </div>
  </section>
  </body>
</html>