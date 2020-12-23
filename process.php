<html>
<?php
  session_start(); //starts the session
  if($_SESSION['user']){ //checks if user is logged in
  }
  else{
    header("location:index.php"); // redirects if user is not logged in
  }
  $user = $_SESSION['user']; //assigns user value

include "konekcija.php";
 $id= $_GET['id'];
$sql="SELECT * from parfem 
	   WHERE id = $id ";

$sql1="SELECT id from korisnik where username='$user'";
$rezultat = $mysqli->query($sql);
$rezultat1 = $mysqli->query($sql1);
while($red1 = $rezultat1->fetch_object()){

 $korisnikid=$red1->id;


}
while($red = $rezultat->fetch_object()){
$id= $red->id;


$query="INSERT INTO korpa(parfemId,korisnikId,status)VALUES($id,$korisnikid,'u obradi')";

$mysqli->query($query);
}

header("location:brendovi.php");


?>
</html>