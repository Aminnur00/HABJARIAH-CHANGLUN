<?php
include 'dbconnect.php';
session_start();
if (isset($_SESSION['sessionid'])){
    $useremail = $_SESSION['username'];
}


 $sqldata = "SELECT * FROM `userdb` ORDER BY id DESC";

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
    <title>Lihat Profil </title>

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
        <h1><strong>PROFIL SAYA</strong></h1>
</div><hr>
<div class="w3-container w3-padding-16 form-container">
        <div class="w3-card w3-round">
            <div class="w3-container w3-sand w3-round">
            <?php
             $cart = "cart";
                foreach ($rows as $product){
                    $username = $product['username'];
                    $name = $product['name'];
                    $email = $product["email"];
                    $phone = $product["phone"];}
                    ?>
    </div>
        <form name="signupForm" class="w3-container" action="adminregister.php" method="post">
           
             <p>
                <label class="w3-text-black"><b>Nama Pengguna</b></label>
                <div class="w3-container w3-center"><p><?php echo $username?> </p></div><hr>
            </p>
            <p>
                <label class="w3-text-black"><b>Nama Penuh Pengguna (Seperti Di Kad Pengenalan)</b></label>
                <div class="w3-container w3-center"><p><?php echo $name?> </p></div><hr>
            </p>

             <p>
                <label class="w3-text-black"><b>Email</b></label>
                <div class="w3-container w3-center"><p><?php echo $email?> </p></div><hr>
            </p>

            <p>
                <label class="w3-text-black"><b>Nombor Telefon</b></label>
                <div class="w3-container w3-center"><p><?php echo $phone?> </p></div><hr>
            </p>  
           <button class='w3-btn w3-round w3-sand w3-block'><a href="updateprofile.php?update='.$details_id.'" class ="text-light w3-center">Kemaskini Profil</a></button>
<p> </p>
    </form>
        
    </div>
    </div>
<hr>