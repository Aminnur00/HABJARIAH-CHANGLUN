<!--Database Section-->
<?php
if (isset($_POST["submit"])) {
    include 'dbconnect.php';
    $username = $_POST["username"];
    $pass = sha1($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM admindb WHERE username = '$username' AND password = '$pass'");
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();

    if ($number_of_rows > 0) {
        session_start();
        $_SESSION["sessionid"] = session_id();
        $_SESSION["username"] = $username;
        echo "<script>alert('Log Masuk Berjaya');</script>";
        echo '<script>window.location.replace("adminlanding.php")</script>';

    } else {
        echo "<script>alert('Log Masuk Gagal. Sila cuba lagi.');</script>";
    }
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
    <title>Log Masuk</title>
</head>
<body onload="loadCookies()">
    <!--Navbar on top-->
    <div class ="w3-bar w3-sand w3-padding w3-card" style="letter-spacing: 3px;">
    <a href="adminlanding.php" class="w3-bar-item w3-button">HabJariah@Changlun</a>
        <a href="listcampaign.php" class="w3-bar-item w3-button w3-hide-small w3-right">SENARAI KEMPEN</a>
        <a href="landing2.php" class="w3-bar-item w3-button w3-hide-small w3-right">KEDAI</a>
        <a href="landing1.php" class="w3-bar-item w3-button w3-hide-small w3-right">SEDEKAH</a>
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
    </div>


    <!--Right-sided navbar Dropdown menu. Shows on small screen-->
    <div id="idnavbar" class="w3-bar-block w3-sand w3-hide w3-hide-large w3-hide-medium">
        <a href="about.php" class="w3-bar-item w3-button w3-center">ABOUT US</a>
        <a href="#menu" class="w3-bar-item w3-button w3-center">MENU</a>
        <a href="#contact" class="w3-bar-item w3-button w3-center">PAYMENT HISTORY</a>
        <a href="#location" class="w3-bar-item w3-button w3-center">CART</a>
        <a href="login.php" class="w3-bar-item w3-button w3-center">LOGIN</a>
        <a href="register.php" class="w3-bar-item w3-button w3-center">REGISTER</a>
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

    <!--Login Form-->
    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card w3-round">
            <div class="w3-container w3-sand w3-round">
                <h2>Log Masuk (Admin)</h2>
                <p>Selamat Datang ke HabJariah@Changlun. Sila Masukkan butiran berikut untuk log masuk.</p>
    </div>
        <form name="loginForm" class="w3-container" action="adminlogin.php" method="post">
            <p>
                <label class="w3-text-black"><b>Nama Pengguna</b></label>
                <input class="w3-input w3-border w3-round" name="username" type="text" id="idusername" required>
            </p>

            <p>
                <label class="w3-text-black"><b>Kata Laluan</b></label>
                <input class="w3-input w3-border w3-round" name="password" type="password" id="idpassword" required>
            </p>  

            <p>
                <input class="w3-check" name="remember" type="checkbox" id="idremember" onclick="rememberMe()" >
                <label class="w3-text-black"><b>Simpan maklumat log masuk.</b></label>
            </p>

            <p>
                <button class='w3-btn w3-round w3-sand w3-block' name="submit">Log Masuk Sekarang</button>
            </p>
            <p>Lupa Kata Laluan? <a href="adminforget.php">Set Semula Di Sini</a></p>
            <p>Pengguna Baharu? <a href="adminregister.php">Daftar Sekarang</a></p>

    </form>
    </div>
    </div>

<!--Footer-->
<footer class="w3-container w3-center w3-sand">
    <p>Copyright: HabJariah@Changlun</p>
</footer>

<!--Accept Cookie-->
<div id="cookieNotice" class="w3-right w3-block" style="display: none;">
<div class="w3-sand">
    <h4>Cookie Consent</h4>
    <p>This website uses cookies or similar technologies, to enhance your browsing experience and provide personalized recommedations.
        By continuing to use our website, you aggre to our
        <a style="color:#115cfa;" href="/privacy-policy">Privacy Policy</a></p>

        <div class="w3-button">
            <button onclick="acceptCookieConsent();">Accept</button>
    </div>
    </div>

<!--Cookie Consent-->
    <script>
        let cookie_consent = getCookie("user_cookie_consent");
        if (cookie_consent != ""){
            document.getElementById("cookieNotice").style.display = "none";

        } else {
            document.getElementById("cookieNotice").style.display = "block";
        }
        </script>
    </body>
</html>