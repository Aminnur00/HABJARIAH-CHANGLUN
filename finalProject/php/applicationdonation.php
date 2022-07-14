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
    <a href="adminlanding.php" class="w3-bar-item w3-button">HabJariah@Changlun</a>
        <a href="index.php" class="w3-bar-item w3-button w3-grey w3-hide-small w3-right">Log Keluar</a>
        <a href="adminprofile.php" class="w3-bar-item w3-button w3-hide-small w3-right">PROFIL SAYA</a>


        <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button" title="Notifications">KEDAI <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="applicationdonation.php" class="w3-bar-item w3-button">URUS PERMOHONAN JUALAN </a>
      <a href="listproduct.php" class="w3-bar-item w3-button">SENARAI JUALAN</a>

    </div>
  </div>        
        <div class="w3-dropdown-hover w3-hide-small w3-right">
    <button class="w3-button" title="Notifications">SEDEKAH <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="applicationdonation.php" class="w3-bar-item w3-button">URUS PERMOHONAN BANTUAN  </a>
      <a href="listcampaign.php" class="w3-bar-item w3-button">SENARAI KEMPEN</a>

    </div>
  </div>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
    </div>


    <div class="w3-center w3-padding-32">
        <h1><strong>SENARAI PERMOHONAN BANTUAN</strong></h1> <hr>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">No Telefon</th>
      <th scope="col">Jenis Bantuan</th>
      <th scope="col">Maklumat</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Nombor IC</th>
      <th scope="col">Operasi</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $sqldata = "SELECT * FROM `applydonation` ORDER BY applydonationid asc";
    $stmt = $conn->prepare($sqldata);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetchAll();    
    foreach ($row as $campaign)
{
            $details_id = $campaign['applydonationid'];
            $name = $campaign['name'];
            $phone = $campaign['phone'];
            $type = $campaign['type'];
            $detail = $campaign['detail'];
            $location = $campaign['location'];
            $verifyic = $campaign['verifyic'];
        echo '<tr>
        <th scope="row">'.$details_id.'</th>
        <td>'.$name.'</td>
        <td>'.$phone.'</td>
        <td>'.$type.'</td>
        <td>'.$detail.'</td>
        <td>'.$location.'</td>
        <td>'.$verifyic.'</td>
        <td>
        <button class ="btn btn-primary"><a href="approve1.php?approveid='.$details_id.'" class ="text-light">Terima</a></button>
        <button class ="btn btn-danger"><a href="reject1.php?rejectid='.$details_id.'" class ="text-light">Tolak</a></button>
</td>
      </tr>';
}

    ?>
</table>
</tbody>
<br>
<hr>
<br><br><br>
<div class="w3-center w3-container w3-padding-32">
        <h1><strong>SENARAI PERMOHONAN JUALAN</strong></h1> <hr>
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
<button class ="btn btn-primary"><a href="approve2.php?approveid='.$details_id.'" class ="text-light">Terima</a></button>
<button class ="btn btn-danger"><a href="reject2.php?rejectid='.$details_id.'" class ="text-light">Tolak</a></button>
</td>
      </tr>';
}

    ?>
</table>
</tbody>
<br>
<hr>

</body>
</html>