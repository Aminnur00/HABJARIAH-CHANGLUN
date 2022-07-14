<?php
include 'dbconnect.php';
if (isset($_GET['deleteid'])){
    $details_id= $_GET['deleteid'];
    $sqldata= "DELETE FROM `applysale` WHERE applysaleid=$details_id";
    $stmt = $conn->prepare($sqldata);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetchAll();    

    if($result){
        echo "<script>alert('Adakah Anda Pasti Untuk Padam Jualan?');</script>";
        echo '<script>window.location.replace("managesale.php")</script>';
       //header('location:managesale.php');
    } else{
        echo "Tidak Berjaya Dipadamkan";
    }
}

 ?>
