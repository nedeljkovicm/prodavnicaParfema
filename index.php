<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
			 <link href='https://fonts.googleapis.com/css?family=Arima Madurai' rel='stylesheet'>

        <link href="stilovi3.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

        <meta charset="UTF-8">
        <title>Online parfimerija</title>
    </head>
    <body>
        <header>
            <div class = "container">
                
                <div id = "brand"> 
                    <h1><span class = "highlight">Online parfimerija</span> </h1>
                    </div>

                <nav> 
                    <ul>
                        <li class = "current"><a href = "index.php">Početna</a></li>
                       <li>  <a href="login.php">Prijava</a> </li>
                         <li><a href="register.php">Registracija</a></li>
                       
                       

                    </ul>
                </nav>

            </div>

        </header>
        
        <section id = "showcase">
            <div class = "container">
                <h1>Dobrodošli! </h1>
                <p>Prijavite se ili registrujte kako biste započeli kupovinu! </p>
               
                
                <div class="slideshow-container">


<div class="mySlides fade">
  
  <img src = "slike/1.jpg" style="float: center; width: 100%; height: 50%; margin-left: 20%;  margin-bottom: 0.5em;">
  
</div>

<div class="mySlides fade">
  
  <img src = "slike/6.3.jpg" style="float: center; width: 100%; height: 50%; margin-left:20%; margin-bottom: 0.5em;">
 
</div>
<div class="mySlides fade">
  
  <img src = "slike/9.4.jpg" style="float: center; width: 100%; height: 50%; margin-left:20%; margin-bottom: 0.5em;">
 
</div>
<div class="mySlides fade">
  
  <img src = "slike/8.7.jpg" style="float: center; width: 100%; height: 50%; margin-left:20%; margin-bottom: 0.5em;">
 
</div>
<div class="mySlides fade">
  
  <img src = "slike/6.4.jpg" style="float: center; width: 100%; height: 50%; margin-left:20%; margin-bottom: 0.5em;">

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

            </div>
        </section>



        <footer>
            <p> Copyright Online parfimerija &copy; 2018</p>

        </footer>       
    </body>
    <br/>
   
 
</html>
