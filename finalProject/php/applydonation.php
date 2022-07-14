<?php
    
    if(isset($_POST["submit"])){
        include 'dbconnect.php';
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $type = $_POST["type"];
        $detail = $_POST["detail"];
        $location = $_POST["location"];
        $verifyic = $_POST["verifyic"];
        $sqlregister = "INSERT INTO `applydonation`(`name`, `phone`, `type`, `detail`, `location`, `verifyic`)
         VALUES('$name', '$phone', '$type', '$detail', '$location', '$verifyic')";
    
        try{
            $conn->exec($sqlregister);
            if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])){
                uploadImage($verifyic);
                echo "<script>alert('Permohonan Berjaya. Sila tunggu pengesahan daripada pihak Admin')</script>";
                echo "<script>window.location.replace('listcampaign.php')</script>";
            }    
            
        }catch (PDOException $e) {
                echo"<script>alert('Permohonan tidak berjaya. Sila cuba lagi')</script>";
                echo "<script>window.location.replace('applydonation.php')</script>";
            }
    }

        function uploadImage($verifyic){
            $target_dir = "../images/application/";
            $target_file = $target_dir . $verifyic . ".png";
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ViewPort-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--W3css References-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-aswsome.min.css"> 
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
    <title>Permohonan Bantuan</title>
</head>
<body onload="loadCookies()">
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
    <!--Page Header-->
    <header id="header" class="bgimg1 w3-display-container w3-greyscale-min">
        <div class="w3-display-middle w3-center">
        <h1 class="w3-text-black" style="font-size: calc(15px + 5vw);" style="text-shadow: 1px 1px #444;">Selamat Datang Ke<br></h1>
            <h1 class="w3-text-black" style="font-size: calc(15px + 5vw);" style="text-shadow: 1px 1px #444;">HabJariah@Changlun<br></h1>
            <h5 class="w3-cursive w3-text-black" style="font-size: calc(5px + 4vw);" style="text-shadow: 1px 1px #444;">--</h5>
        </div>
        <div class="w3-display-bottomright w3-center w3-padding-large w3-hide-small">
            <h4 class="w3-text-white w3-tag">Changlun dan lokasi sekitarnya</h4>
        </div>
        <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
            <h4 class="w3-text-white w3-tag">Hubungi Kami Jika Memerlukan Bantuan</h4>
        </div>
      </header>
    </div>

    <!--Add Product Form-->
    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card">
            <div class="w3-container w3-sand">
                <p>PERMOHONAN BANTUAN</p>
            </div>
            <form class="w3-container w3-padding " name="registerForm" action="applydonation.php" method="post" onsubmit="return confirmDialog()" enctype="multipart/form-data">
                

            <p>
                <label class="w3-text-black"><b>Nama Pemohon</b></label>
                <input class="w3-input w3-border w3-round" name="name" type="text" id="idname" required>
            </p>

            <p>
                <label class="w3-text-black"><b>Nombor Telefon</b></label>
                <input class="w3-input w3-border w3-round" name="phone" type="text" id="idphone" required>
            </p> 

            <p>
                <label class="w3-text-black"><b>Jenis Bantuan (Kewangan/Barang Keperluan/Lain-lain)</b></label>
                <input class="w3-input w3-border w3-round" name="type" type="text" id="idtype" required>
            </p>  

            <p>
                <label class="w3-text-black"><b>Perincian Bantuan</b></label>
                <input class="w3-input w3-border w3-round" name="detail" type="text" id="iddetail" required>
            </p> 

            <p>
                <label class="w3-text-black"><b>Lokasi </b></label>
                <input class="w3-input w3-border w3-round" name="location" type="text" id="idlocation" required>
            </p> 

            <p>
                <label class="w3-text-black"><b>Nombor Kad Pengenalan bagi tujuan pengesahan <br>(Contoh:000000-00-0000)</br></b></label>
                <input class="w3-input w3-border w3-round" name="verifyic" type="text" id="idverifyic" required>
            </p> 

            
            <p>
                <label class="w3-text-black"><b>Gambar Berkaitan (Jika Ada)</b></label>
            <div class="w3-container w3-border w3-center w3-padding">
                    <img class="w3-image w3-round w3-margin w3-center"
                    src="../images/profile.png" style="width:100%;
                    max-width:600px"><br>
                    <input type="file" onchange="previewFile()" name="fileToUpload"
                    id="fileToUpload"><br>
                </div>

            <p>
                <button class='w3-btn w3-round w3-grey w3-block' name="submit">Mohon Sekarang</button>
            </p>
    </form>
    </div>  
    </div>

<!--Footer-->

<footer class="w3-footer w3-center w3-sand">
    <p>Copyright: HabJariah@Changlun</p>
</footer>

    </body>
</html>
