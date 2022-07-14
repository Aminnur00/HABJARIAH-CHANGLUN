<?php
include 'dbconnect.php';
session_start();
if (isset($_SESSION['sessionid'])){
    $useremail = $_SESSION['username'];
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="../images/food/profile.png">
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
    <title>Urus Jualan</title>
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

    <div class="w3-center w3-padding-32 w3">
        <h1><strong>Urus Jualan</strong></h1>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Kategori Jualan</th>
      <th scope="col">Kuantiti</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Lokasi</th>
      <th scope="col">No Telefon</th>
      <th scope="col">Operasi</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $sqldata = "SELECT * FROM `applysale` ORDER BY applysaleid asc";
    $stmt = $conn->prepare($sqldata);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetchAll();    
    foreach ($row as $campaign)
{
            $details_id = $campaign['applysaleid'];
            $name = $campaign['nameproduct'];
            $price = $campaign['price'];
            $type = $campaign['type'];
            $quantity = $campaign['quantity'];
            $condition = $campaign['condition'];
            $location = $campaign['location'];
            $phone = $campaign['phone'];

        echo '<tr>
        <th scope="row">'.$details_id.'</th>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$type.'</td>
        <td>'.$quantity.'</td>
        <td>'.$condition.'</td>
        <td>'.$location.'</td>
        <td>'.$phone.'</td>
        <td>
<button class ="btn btn-primary"><a href="updatesale.php?updateid='.$details_id.'" class ="text-light">Kemaskini</a></button>
<button class ="btn btn-danger"><a href="deletesale.php?deleteid='.$details_id.'" class ="text-light">Padam</a></button>
</td>
      </tr>';
}

    ?>
</table>
</tbody>
<br>
<hr>

