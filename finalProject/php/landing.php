<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--ViewPort-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!--W3css References-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-aswsome.min.css"> 
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
    <title>HabJariah@Changlun</title>
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

 <!-- Page content -->
<div class="w3-content" style="max-width:1100px">

<!-- About Section --><!--Image Logo-->
<div id="about" class="w3-row w3-padding-32">
       
<div class=" w3-padding-32 w3-center">
    <br>
      <h1 class="w3-center">Tentang HabJariah@Changlun</h1>
      <h3 class="w3-center">~Kemanusiaan Tanpa Sempadan~ </h3>
      <p class="w3-large">HabJariah@Changlun adalah satu platfom yang dibangunkan bertujuan untuk membantu komuniti muslim di Changlun dengan memberikan akses kepada penduduk setempat untuk membantu golongan yang kurang berkemampuan.  <br>
</div>
</div>
<hr>

<!--Menu content-->
<div class="w3-row w3-padding-64" id="sedekah">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="../images/sedekah.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Sedekah with HabJariah@Changlun</h1><br>
      <h5 class="w3-center">Sedekah Itu Pembuka Rezeki</h5>
      <p class="w3-large">Perumpamaan satu sedekah yang diberi demi ALLAH SWT ialah seperti sebiji benih yang disemai lalu tumbuh dan mengeluarkan 7 tangkai, lalu pada tiap-tiap itu ada 100 biji (Surah Al-Baqarah:261).</p>
    </div>
  </div>
  
  <hr>
<hr>

<!--Menu content-->
<div class="w3-row w3-padding-64" id="kedai">
<div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Kedai HabJariah@Chaglun</h1><br>
      <h5 class="w3-center">Platform e-dagang mesra muslim anda</h5>
      <p class="w3-large">Adakah anda mempunyai barangan jualan yang bersesuaian dengan kehendak penerima? Atau anda ingin menderma barangan kepada insan yang memerlukan? Inilah masa anda untuk berniaga sambil beramal. Iklankan produk anda disini.</p>
    </div>
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="../images/kedai.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

  </div>
  
  <hr>
<hr>
<!--Contact Us Info-->
<div id="contact" class=" w3-container w3-padding-20 w3-center">
<div class=" w3-padding-32 w3-center">
    <h1 class="w3-center">Maklumat Perhubungan</h1><br>
    <h3 class="w3-cursive">Sila berhubung dengan kami melalui:-</h3>
    </div>
</div>
<div id="contactinfo" class="w3-container w3-row w3-padding-20">
<div class="w3-col l6 w3-padding-20">
    <h2 class="w3-center"> Nombor Telefon</h2>
    <h3 class="w3-center">017-9061876 (Aminnur)<br> 09-2961876(Pejabat)</h3><br> 
</div> 
<div class="w3-col l6 w3-padding-20">
    <h2 class="w3-center">Alamat Email</h2>
    <h3 class="w3-center">habjariahchanglun@gmail.com</h3> 
</div>
</div>
<hr>

<!--Contact Form-->
<div id="form" class="w3-container w3-row w3-padding-32 w3-sand">
<div class=" w3-padding-32 w3-center">
    <h1 class="w3-center">Hubungi Kami </h1><br>

    <form action="contactus.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <h2 class="w3-center">Bagaimana Kami Boleh Membantu Anda?</h2>
        <div class="w3-row w3-section"> <!--Name Section-->
            <div class="w3-col" style="width: 50px;"> <i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="name" type="text" placeholder="Nama">
            </div>
        </div>

        <div class="w3-row w3-section"> <!--Email Section-->
            <div class="w3-col" style="width: 50px;"> <i class="w3-xxlarge fa fa-envelope"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="Emel">
            </div>
        </div>

        <div class="w3-row w3-section"> <!--Phone Section-->
            <div class="w3-col" style="width: 50px;"> <i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="phone" type="number" placeholder="Nombor Telefon">
            </div>
        </div>

        <div class="w3-row w3-section"> <!--Subject Section-->
            <div class="w3-col" style="width: 50px;"> <i class="w3-xxlarge fa fa-book"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="subject" type="text" placeholder="Perkara">
            </div>
        </div>

        <div class="w3-row w3-section"> <!--Message Section-->
            <div class="w3-col" style="width: 50px;"> <i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
                <textarea class="w3-input w3-border" id="idmessage" name="message" rows="4" cols="50" width="100%" placeholder="Please enter your message"></textarea>
            </div>
        </div>
        <button class="w3-button w3-block w3-section w3-blue w3-riplle w3-padding"> Hantar Mesej </button>
    </form>
</div>
</div><hr>

<!--Location-->
<div id="location" class=" w3-container w3-padding-32 w3-center">
<div class=" w3-padding-32 w3-center">
    <h1 class="w3-center">Lokasi Kami</h1>
    <div class="container">
    <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4748.849875028041!2d100.50750102945135!3d6.45023232832289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304cae152c08f777%3A0x76d78a9b0a4b933d!2sUniversiti%20Utara%20Malaysia!5e0!3m2!1sen!2smy!4v1652045341231!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <p>UNIVERSITI UTARA MALAYSIA<br>06010 Sintok, Kedah</p>
    </div><hr>
</div>
</div>

<!--Footer-->
<footer class="w3-container w3-center w3-sand">
<p>Copyright: HabJariah@Changlun</p>

</footer>

</body>
</html>