<?php
include 'dbconnect.php';
if (isset($_GET['rejectid'])){
    $details_id= $_GET['rejectid'];
    $sqldata= "DELETE FROM `applysale` WHERE applysaleid=$details_id";
    $stmt = $conn->prepare($sqldata);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $row = $stmt->fetchAll();    

    if($result){
        echo "<script>alert('Adakah Anda Pasti Untuk Menolak Permohonan?');</script>";
        echo '<script>window.location.replace("applicationdonation.php")</script>';
        //header('location:applicationdonation.php');
     } else{
         echo "Tidak Berjaya Dipadamkan";
     }
 }
 
  ?>