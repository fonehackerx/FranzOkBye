<?php
 if(isset($_COOKIE["uzerid"])){
    $checkb64=$_COOKIE["uzerid"];
  //  echo "Cookie fuckin' exists";
      $genurl="/generateme.php";
       header( "Location: {$genurl}", true, 303 );
    //REDIRECT TO GENERATED LINK OF COOKIEEEEEEEEE
    die();
  }
  else{
  	//echo ($_POST['sendnumber']);
    if (((strlen($_POST['name'])>0) && (strlen((int)$_POST['sendnumber'])<=7))) {
    	$name=preg_replace("/[^a-z0-9\s]/i", "", $_POST['name']);
    	$name=substr($name,0,15);
      $name=strtok($name,' ');
   $mylist = $_POST['sendnumber'];
  // echo $name."        ".$mylist;
function genrenx($length = 7) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$checkb64=genrenx();
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	      $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
die();
}

// sql to create table
//$sql = "CREATE TABLE MyGuests (user VARCHAR(30), name VARCHAR(30),favs INT(15))";
$sql = "INSERT INTO MyGuests (user,name,favs) VALUES ('$checkb64','$name','$mylist')";
if ($conn->query($sql) === TRUE) {
  //echo "Table entered.";
  setcookie("uzerid", $checkb64, time() + (86400 * 30), "/");
        $genurl="/generateme.php";
       header( "Location: {$genurl}", true, 303 );
  //echo "Cookie added.";
} 
else {
  	   $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
         //REDIRECT TO QUESTION PAGE
  die();
}
}
else{
  $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
}
}
?>