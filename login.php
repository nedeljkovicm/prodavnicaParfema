<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
		 <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>

    <link href="stilovi3.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

    <meta charset="UTF-8">
    <title>Prijava</title>
  </head>
  <body>
    <header>
    <h2>Prijava</h2>
   
  </header>
  <section id ="showcase">

 <div class="container">
   <img src = "slike/8.1.jpg" style="float: right; margin-top:100px; height:70%; width: 50%; margin-right: 1%; margin-bottom: 0.5cm; margin-left: 15px ; border-radius: 25px;">
   <br><br><br><br>
  <div class="form1"> 

                        
    <form action="checklogin.php" method="post">
      <br>
      <br>
      Korisničko ime:<br/> <br>  <input type="text" name="username" required="required"/> <br/> <br> 
      Šifra:<br/> <br> <input type="password" name="password" required="required" /> <br>
      <br><br>
      <input type="submit" value="Prijava"/> <br><br>
      <input type="reset" value="Poništi"/>
      <br><br><br>
       <a href="index.php"> <-NAZAD NA POČETNU </a><br/><br><br>
    </form>
  </div>
  </div>
</section>

  </body>
</html>