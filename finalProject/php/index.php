<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ViewPort-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--W3css References-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> <!--Icon References-->
    <style>
        body,html {height: 100%;}
        body,h1,h2,h3,h4,h5,h6 {font-family: 'Times New Roman', Georgia, serif;}
        
        @media screen and (min-width: 1920px) {
            body {
                max-width: 60%;
                margin: auto;
            }
        }
        .container {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 56.25%
        }
        .responsive-iframe {
            position: absolute;
            top: 0%;
            left: 0%;
            bottom: 0%;
            right: 0%;
            width: 100%;
            height: 100%;
            border: none;
        }
        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("../images/header.jpg");
            min-height: 75%;
        }
        .button {

        }
        .column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
    </style>
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
    <title>HabJariah@Changlun</title>
</head>
<body>
    <!--Navbar on top-->
    <div class ="w3-bar w3-sand w3-padding w3-card" style="letter-spacing: 3px;">
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
    <!--Page Header-->
    <header id="header" class="bgimg w3-display-container w3-greyscale-min">
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
<!-- Page content -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
      <div class="w3-round w3-card w3-sand">
          
    <h5 class="w3-text-black w3-center" style="font-size: calc(1px + 3vw);" style="text-shadow: 1px 1px #444;">Sila Daftar Pengguna<br></h5>
   
   
    <div class="card">
    <a href="adminregister.php" class="w3-btn w3-xlarge w3-hover-grey">ADMIN</a>
    </div>

    <div class="card">
    <a href="register1.php" class="w3-btn w3-xlarge w3-hover-grey">PENDERMA/PENERIMA/PENJUAL</a>
    </div>


      </div>
      <br>
      <hr>
      <hr>


    <div class="w3-round w3-card w3-sand">
          
          <h5 class="w3-text-black w3-center" style="font-size: calc(1px + 3vw);" style="text-shadow: 1px 1px #444;">Sudah mendaftar? Sila Log Masuk<br></h5>
         
          <div class="card">
          <a href="adminlogin.php" class="w3-btn w3-xlarge w3-hover-grey">ADMIN</a>
          </div>
      
          <div class="card">
          <a href="login1.php" class="w3-btn w3-xlarge w3-hover-grey">PENDERMA/PENERIMA/PENJUAL</a>
        </div>
      </div>
        <br><br>

      </div>
<!--Footer-->
<footer class="w3-container w3-center w3-sand">
    <p>Copyright: HabJariah@Changlun</p>
</footer>



</body>
</html>