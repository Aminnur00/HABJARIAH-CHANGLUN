<?php
include_once ("dbconnect.php");
$details_id = $_GET['id'];
$sqlquery = "SELECT * FROM applydonation WHERE applydonationid = $details_id";
$stmt = $conn->prepare($sqlquery);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();

foreach ($rows as $campaign)
{
            $details_id = $campaign['applydonationid'];
            $name = $campaign['name'];
            $phone = $campaign['phone'];
            $type = $campaign['type'];
            $detail = $campaign['detail'];
            $location = $campaign['location'];
            $verifyic = $campaign['verifyic'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ViewPort-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--W3css References-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../images/profile.png">
    <link rel="stylesheet" href="../css/style.css">
    <script src= "../javascript/script.js"></script>
    <script>
         function myFunction() {
            var x = document.getElementById("idnavbar");
            if (x.className.indexOf("w3-show") == -1){
                x.className += " w3-show";
            } else {
                x.className = x.className.replace(" w3-show", "");
            }  
        }
    </script>
    <style>
        body,html {height: 100%;}
        body,h1,h2,h3,h4,h5,h6 {font-family: 'Times New Roman', Georgia, serif;}
        
        @media screen and (min-width: 1920px) {
            body {
                max-width: 60%;
                margin: auto;
            }
        }
        .bgimg1 {
            background-position: center;
            background-size: cover;
            background-image: url("../images/header.jpg");
            min-height: 75%;
        }
    </style>
    <title>Perincian Kempen</title>
</head>
<body onload="loadCookies()">
     <!--Navbar on top-->
     <div class ="w3-bar w3-sand w3-padding w3-card" style="letter-spacing: 3px;">
    <a href="index.php" class="w3-bar-item w3-button w3-grey w3-hide-small w3-right">Log Keluar</a>

        <a href="landing.php" class="w3-bar-item w3-button">HabJariah@Changlun</a>
        <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-right">PROFIL SAYA</a>

        <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-right">HUBUNGI KAMI</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-right">TENTANG KAMI</a>

        <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button" title="Notifications">KEDAI <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="listproduct.php" class="w3-bar-item w3-button">SAYA INGIN MEMBELI / MENDERMA</a>
      <a href="applysales.php" class="w3-bar-item w3-button">SAYA INGIN MENJUAL</a>
      <a href="managesale.php" class="w3-bar-item w3-button">URUS JUALAN SAYA</a>
    </div>
  </div>

        <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button" title="Notifications">SEDEKAH <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="applydonation.php" class="w3-bar-item w3-button">SAYA PERLU BANTUAN</a>
      <a href="listcampaign.php" class="w3-bar-item w3-button">SENARAI KEMPEN</a>
    </div>
  </div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
    </div>
    
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
      
      <div class="w3-row w3-card">
        <div class="w3-half w3-center">
            <img class="w3-image w3-margin w3-center" style="height:50%;width:50%;max-width:330px" src="../images/application/<?php echo $verifyic?>.png">
        </div>
        <div class="w3-half w3-container">
            <?php 
            echo "<h3 class='w3-center'><b>$name</h3></b>
            <p>Tentang Kempen Ini:<br>$detail</p>
            <p>Nombor Telefon:<br>$phone</p>
            <p>Lokasi:<br>$location</p>
            <p> <a href='derma1.php?productid=$name' class='w3-btn w3-blue w3-round'>Derma</a><p><br>";
            
            ?>
        </div>
        </div>
    </div>
    </div>
   <!--Footer-->

        </body>
        </html>