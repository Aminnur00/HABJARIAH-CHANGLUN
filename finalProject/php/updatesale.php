<?php       
 include 'dbconnect.php';
 
 

    if(isset($_POST["submit"])){
        $details_id= $_GET=['updateid'];
        $name = $_POST["nameproduct"];
        $price = $_POST["price"];
        $type = $_POST["type"];
        $quantity = $_POST["quantity"];
        $condition = $_POST["condition"];
        $location = $_POST["location"];
        $phone = $_POST["phone"];

    $sqldata= "UPDATE `applysale` SET `applysaleid`='$details_id',`nameproduct`='$name',price='$price',type='$type ',quantity='$quantity'
    ,condition='$condition',location='$location',phone='$phone' WHERE `applysaleid` = '$details_id'";
    $stmt = $conn->prepare($sqldata);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetchAll();   
    if($result){
        echo "Kemaskini Berjaya";
     } else{
         echo "Tidak Berjaya Dipadamkan";
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
    <!--Navbar on top-->
    <div class ="w3-bar w3-sand w3-padding w3-card" style="letter-spacing: 3px;">
        <a href="landing.php" class="w3-bar-item w3-button">HabJariah@Changlun</a>
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

    <!--Add Product Form-->
    <div class="w3-container w3-padding-64 form-container">
        <div class="w3-card">
            <div class="w3-container w3-sand">
                <p>PERMOHONAN JUALAN</p>
            </div>
            <form class="w3-container w3-padding " name="registerForm" action="updatesale.php" method="post" onsubmit="return confirmDialog()" enctype="multipart/form-data">
                

            <p>
                <label class="w3-text-black"><b>Nama Produk</b></label>
                <input class="w3-input w3-border w3-round" name="nameproduct" type="text" id="idnameproduct" >
            </p>

            <p>
                <label class="w3-text-black"><b>Harga Produk</b></label>
                <input class="w3-input w3-border w3-round" name="price" type="text" id="idprice" >
            </p> 

            <p>
                <label class="w3-text-black"><b>Jenis Produk</b></label>
                <input class="w3-input w3-border w3-round" name="type" type="text" id="idtype" >
            </p>  

            <p>
                <label class="w3-text-black"><b>Kuantiti Produk</b></label>
                <input class="w3-input w3-border w3-round" name="quantity" type="text" id="idquantity" >
            </p> 

            <p>
                <label class="w3-text-black"><b>Kondisi Produk</b></label>
                <input class="w3-input w3-border w3-round" name="condition" type="text" id="idcondition" >
            </p> 

            <p>
                <label class="w3-text-black"><b>Nombor Telefon</b></label>
                <input class="w3-input w3-border w3-round" name="phone" type="text" id="idphone" >
            </p> 
            
            <p>
                <label class="w3-text-black"><b>Lokasi Jualan </b></label>
                <input class="w3-input w3-border w3-round" name="location" type="text" id="idlocation" >
            </p> 

            <p>
        

            <p>
                <button class='w3-btn w3-round w3-grey w3-block' name="submit">Kemaskini</button>
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
