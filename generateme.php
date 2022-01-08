<?php
  if(isset($_COOKIE["uzerid"])){
    $checkb64=$_COOKIE["uzerid"];
    //echo "Cookie fuckin' exists";
  }
  else{
    $genurl="/index.php";
       header( "Location: {$genurl}", true, 303 );
       exit();
//cookies don't exist, redirect.
}
$shareurl="https://localhost/testyourfriend.php/".$checkb64;

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
     <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet"> 
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Image Compressor</title>
      <link rel="stylesheet" href="assets/css/genme.css">
  </head>
  <body>
  <div class="overlay">
              <h1 class="headingmod">SHARE THIS WITH YOUR FRIENDS! 🤩</h2>
<input id="naxe" type="text" style="margin-top:20px" value="https://localhost/testyourfriend.php/<?php echo $checkb64?>" class="textInput smallFont" maxlength="40" name="userName" readonly="">      
                 <div class="item button-hand" style="--bg-color: #3498db">
<button id="copykrle" onclick="copyme()">Copy the sharing link
      <div class="hands"></div>
    </button>   
  <div class="item button-jittery" style="--bg-color: white;">
    <div class="sharables">
      <td>
<div class="mflast"><a href="whatsapp://send?text=<?php echo $shareurl ?>"><i id="bux" class="fab fa-whatsapp"></i></a></div>
<div class="mflast"><a href="yoyo"><i id="bux" class="fab fa-telegram"></i></a></div>
<div class="mflast"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareurl ?>"><i id="bux" class="fab fa-facebook"></i></a></div>
<div class="mflast"><a href="fb-messenger://share/?link=<?php echo $shareurl ?>"><i id="bux" class='fab fa-facebook-messenger'></i></a></div>
</td>
</div>
</div>
              <h1 class="headingmod">SEE WHAT YOUR FRIENDS SAY: 💬</h1>
  <div class="table-users">
   <div class="theader">Friendship level 🎗</div>
    <table cellspacing="0">
      <tr>
         <th>Friendship</th>
         <th>Name</th>
         <th>Score</th>
      </tr>
   <?php
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
}
   $sql = "SELECT name,skore FROM MyFrends WHERE user='$checkb64' ORDER BY skore DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
        if($row['skore']>=6){
$img="rank1.jpg";
}
if($row['skore']>=4 && $row['skore']<=5){
$img="rank2.jpg";
}
if($row['skore']>=2 && $row['skore']<=3){
$img="rank3.jpg";
}
if($row['skore']>=0 && $row['skore']<=1){
$img="rank4.jpg";
}

        echo      '<tr>
         <td><img class="scoreimg" src="/'.$img.'" alt="" /></td>
         <td class="nameclass">'.ucfirst($row['name']).'</td>
         <td class="scoreclass">'.$row['skore'].'</td>
      </tr>';
    }
  }

?>
          </div>
  </div>
</div>   
          </div>
          <script>
            function copyme() {
  /* Get the text field */
  var copyText = document.getElementById("naxe");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
} 
</script>
        </header>
</html>
