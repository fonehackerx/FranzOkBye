<?php
if (!isset($_POST["score"]) || !isset($_POST["namexx"]) || (preg_match('/\s/',$_POST["invitedby"]) ) || (strlen($_POST["invitedby"])!==7)) {
  echo "Nice try";
  header("Location: http://www.geeksforgeeks.org"); 
exit; 
  }
  else{
$testof=$_POST["invitedby"];
$testof=preg_replace("/[^a-z0-9 \s]/i", "", $testof);
$givenby=$_POST["namexx"];
$marks=(int)$_POST["score"];
$givenby=preg_replace("/[^a-z0-9\s]/i", "", $givenby);
$givenby=strtok($givenby,' ');
$givenby=substr($givenby,0,15);
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
$genurl="/personalized.php?ivby=".$testof."&marks=".$marks;
if ($conn->connect_error) {
  $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
       exit();
     }

//$sql=
$sql = "INSERT INTO MyFrends (user,name,skore) VALUES ('$testof','$givenby','$marks')";
if ($conn->query($sql) === TRUE) {
  //echo "Table entered.";
     header( "Location: {$genurl}", true, 303 );
   exit();
} else {
  $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
       exit();
     }
}
?>