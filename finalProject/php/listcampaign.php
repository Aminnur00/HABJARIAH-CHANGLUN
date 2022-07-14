<?php
include 'dbconnect.php';
session_start();
if (isset($_SESSION['sessionid'])){
    $useremail = $_SESSION['username'];
}


 $sqldata = "SELECT * FROM `applydonation` ORDER BY applydonationid DESC";

 $results_per_page= 10;
 if (isset($_GET['pagenum'])) {
     $pagenum = (int)$_GET['pagenum'];

     $page_first = ($pagenum - 1) * $results_per_page;
  } else {
         $pagenum =1;
         $page_first = ($pagenum - 1) * $results_per_page;
     }

 $stmt = $conn->prepare($sqldata);
 $stmt->execute();
 $result_num = $stmt->rowCount();
 $num_page = ceil($result_num / $results_per_page);

 $stmt = $conn->prepare($sqldata);
 $stmt->execute();
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 $rows = $stmt->fetchAll();

 ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ViewPort-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--W3css References-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../images/food/profile.png">
    <link rel="stylesheet" href="../css/style.css">
    <script src= "../javascript/script.js"></script>
    <title>Senarai Kempen</title>
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

<hr>
    <div class="w3-center w3-padding-10 ">
        <h1><strong>SENARAI KEMPEN</strong></h1>
</div>
<div class="w3-grid-template">
             <?php
             $cart = "cart";
                foreach ($rows as $food){
                    $id = $food['applydonationid'];
                    $name = $food['name'];
                    $phone = $food['phone'];
                    $type = $food['type'];
                    $detail = $food['detail'];
                    $location = $food['location'];
                    $verifyic = $food['verifyic'];
                    
                    echo "<div class='w3-center w3-padding-small'><div class = 'w3-card w3-round-large'>
                    <div class='w3-padding-small'><a href='detailcampaign.php?id=$id'><img class='w3-container w3-image' 
                    src=../images/application/$verifyic.png onerror=this.onerror=null;this.src='../images/books/default.jpg'></a></div><h5><strong>$name</h5>
                    <b>$detail</b><br>$location<br><br>
                    <input type='button' class='w3-button w3-blue w3-round' id='button_id' value='Derma' onClick='addCart($id);'><br><br>
                    </div></div>";
                    //<a href='index.php?bookid=$bookid&submit=$cart' class='w3-btn w3-blue w3-round'>Add to Cart</a><br><br>
                }
             ?>
        </div>
    </div>


        </body>
        </html>