<!DOCTYPE html>
<?php
if ((strlen($_GET['ivby'])!==7) || empty($_GET['marks']) || ($_GET['marks']>7)){
  $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
       exit();
}
else{
$ivbyxx = $_GET['ivby'];
$marx = $_GET['marks'];
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
       exit();
}

//$sql=
$sql = "SELECT name FROM MyGuests WHERE user='$ivbyxx'";
$resultx = $conn->query($sql);
$rowx = $resultx->fetch_assoc();
}
?>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet"> 
    <title>See Your Score for Quiz!</title>
     <meta name="theme-color" content="#ffe9c1" />
     <meta name="msapplication-navbutton-color" content="#ffe9c1">
<meta name="apple-mobile-web-app-status-bar-style" content="#ffe9c1">
     <meta name="description" content="See the score you have got!">
     <meta property="og:title" content="Lockdown Quiz Creater For Friends!" />
     <meta property="twitter:url" content="https://lockdownbud.xyz/" />
<meta name="twitter:title" content="See my score for my friend's quiz!" />
      <link rel="stylesheet" href="../assets/css/personalized.css">
  </head>
  <body>
  <div class="overlay">
              <h1 id="que" class="headingmod"><?php echo $rowx['name'] ?>'s 🔒DOWN FRIENDLIST!</h1>
<br> 
<div id="wrapall">
  <p id="theirscore"><span style="color:salmon">You Scored</span> <?php echo $marx ?>/7<span style="color:salmon">!</span></p>
  <br>
  <p class="howwasit" id="awesome">THAT'S A.W.E.S.O.M.E.! &#127881; &#127882;</p>
  <p class="howwasit" id="secondtier">WOOHOO! &#127895; &#127894;</p>
  <p class="howwasit" id="thikthak">WELL, THAT'S OK.. &#128588; &#128524;</p>
  <p class="howwasit" id="mahabekar">OOPS! WORK ON YOUR FRIENDSHIP! 😥😖</p>
</div>
  <br>
  <br>

  <a class="button" href="../index.php">GENERATE YOUR QUIZ!!</a>
  <div class="table-users">
   <div class="theader">Score Board</div>
    <table cellspacing="0">
      <tr>
         <th>Friendship</th>
         <th>Name</th>
         <th>Score</th>
      </tr>
   <?php
   $sql = "SELECT name,skore FROM MyFrends WHERE user='$ivbyxx' ORDER BY skore DESC";
   if ($conn->query($sql) === FALSE) {
//  redirect, error.
       $genurl="/404.html";
       header( "Location: {$genurl}", true, 303 );
       exit();
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        if($row['skore']>6){
$img="rank1.jpg";
}
if($row['skore']>=5 && $row['skore']<=6){
$img="rank2.jpg";
}
if($row['skore']>=3 && $row['skore']<=4){
$img="rank3.jpg";
}
if($row['skore']>=0 && $row['skore']<=2){
$img="rank4.jpg";
}

        echo      '<tr>
         <td><img src="'.$img.'" alt="" /></td>
         <td class="nameclass">'.$row['name'].'</td>
         <td class="scoreclass">'.$row['skore'].'</td>
      </tr>';
    }
  }

?>
          </div>
        </header>
          <script type="text/javascript">
  var marx ="<?php echo $marx ?>";
  </script>
    <script src="../assets/js/personalized.js"></script>
    <style>
  input#image-button{
    background: #ccc url('bluelogo.png') no-repeat top left;
    padding-left: 16px;
    height: 16px;
}
</style>
<div id="hidden_form_container" style="display:none;"></div>
  </body>
</html>