<!DOCTYPE html>
<?php
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if (strlen($uriSegments[2])!==7){
  $genurl="/404.php";
       header( "Location: {$genurl}", true, 303 );
       exit();
}
else{
$servername = "localhost";
$username = "root";
$password = "pass";
$dbname = "test";
//echo($uriSegments[2]);
//echo $uriSegments[2];
//var_dump($uriSegments);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,favs FROM MyGuests WHERE user='$uriSegments[2]'";
$resultx = $conn->query($sql);
if(mysqli_num_rows($resultx)==0)
{
    $genurl="/404.php";
       header( "Location: {$genurl}", true, 303 );
       exit();
  //invalid person
}
else{
$rowx = $resultx->fetch_assoc();
$nname=ucfirst($rowx['name']);
}
//echo $sql;
  //echo($row[0]);
    // output data of each row

    /*

// sql to create table
//show results in the beginning
    /*
$sql = "SELECT * FROM MyFrends ('$userx',name,skore)";
if ($conn->query($sql) === TRUE) {
$result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
  }
  */
}
?>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
 
     <title>Challenge Accepted For Quiz!</title>
          <meta name="theme-color" content="#ffe9c1" />
     <meta name="msapplication-navbutton-color" content="#ffe9c1">
<meta name="apple-mobile-web-app-status-bar-style" content="#ffe9c1">
     <meta name="description" content="I challenge you for the quiz! Answer the quiz to see what kind of friend you are!">
     <meta property="og:title" content="Lockdown Friendship Quiz Challenge!" />
     <meta property="twitter:url" content="https://lockdownbud.xyz/" />
     <meta property="og:image" content="https://ticktick.me/questionpic.png" />
<meta name="twitter:card" content="photo" />
     <meta name="twitter:image" content="https://ticktick.me/questionpic.png" />
<meta name="twitter:title" content="Lockdown Friendship Quiz Challenge!" />
      <link rel="stylesheet" href="../assets/css/testyourfriend.css">
  </head>
  <body>
  <div class="overlay">
    <div  id="progr" class="progress">
</div>
              <h1 id="que" class="headingmod"><span id="yoname"><?php echo $nname ?> </span>Invited you for a Challenge! &#127903;</h1>
            <div id="score">Your score:<span id="livescore">0</span></div>
<br> 
<img id="changelol" width="103px" src="/1.jpg"/>
<br>
<div>
  <div id="love" class="emoji  emoji--love">
  <div class="emoji__heart"></div>
</div>
<div id="wrong" class="emoji  emoji--sad">
  <div class="emoji__face">
    <div class="emoji__eyebrows"></div>
    <div class="emoji__eyes"></div>
    <div class="emoji__mouth"></div>
  </div>
</div> 
<div id="allbuttons" style="display:none">
  <div class="yobuttonwrap">
<div class="button-wrapper">
  <a class="background-button" id="first" href="#" title="Instargam 💟"></a>
</div>
<div class="button-wrapper">
  <a class="background-button" id="second" href="#" title="Facebook 👍"></a>
</div>
<div class="button-wrapper">
  <a class="background-button" id="third" href="#" title="Snapchat 👻"></a>
</div>
<div class="button-wrapper">
  <a class="background-button" id="fourth" href="#" title="Twitter 🐦"></a>
</div>
</div>
</div>
</div>
<p id="intro">Do you really know <span style="color:white;padding:0 5px;border-radius: 5px;background:cadetblue"> <?php echo $nname ?></span>🧐? <br><span style="color:#FF6A3F">Answer questions to see your score! 👇</span></p>
<input style="display:inline-block" type="text" style="margin-top:20px" id="naxe" class="textInput smallFont" maxlength="12" name="userName" placeholder="Type your name here ..." autocomplete="off" required="">            
<button style="display:inline-block" id="submix" class="big-button">Let's Begin! &#9193;</button>
  <br>
    <br>
  <p id="tix">
    😍: CORRECT ANSWER
    <br>😭: SAD ANSWER
  </p>

  <br>
    <p id="seeans">See <?php echo $nname?>'s Friends Score &#128071;</p>
  <div class="table-users">
   <div class="theader">Friendship level 🎗</div>
    <table cellspacing="0">
      <tr id="tabletop">
         <th>Friendship</th>
         <th>Name</th>
         <th>Score</th>
      </tr>
   <?php
   $sql = "SELECT name,skore FROM MyFrends WHERE user='$uriSegments[2]' ORDER BY skore DESC";
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
         <td><img class="scoreimg" src="/'.$img.'" alt="" /></td>
         <td class="nameclass">'.$row['name'].'</td>
         <td class="scoreclass">'.$row['skore'].'</td>
      </tr>';
    }
  }

?>
          </div>
        </header>
        <script data-ad-client="ca-pub-8956492376651861" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script type="text/javascript">
    var cheatcodes=5;
  var testof ="<?php echo $rowx['name'] ?>";
  testof = testof.charAt(0).toUpperCase() + testof.slice(1);
  var testofid="<?php echo $uriSegments[2]?>"
  cheatcodes = "<?php echo $rowx['favs']; ?>"; 
//  alert(  <?php echo $rowx['favs'];?>);
  </script>
    <script src="../assets/js/testyourfriend.js"></script>
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