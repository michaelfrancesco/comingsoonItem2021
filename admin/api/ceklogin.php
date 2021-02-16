<?php

session_start();

include "connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
    $nrp = $_POST['nrp'];
    $pass =$_POST['pass'];

    //echo $nama . " ". $nrp;

    if($nrp != "" && $pass != ""){
        $sql = "SELECT * FROM `name_list` WHERE `nrp` = ? AND `password` = ? ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nrp, $pass]);
        $row = $stmt -> fetch();
        
        if($stmt-> rowCount()!= 0){
            echo '<script> alert ("Login Success"); </script>';
            // $_SESSION['nrp'] = $row['nrp'];
            header("location: ../index.php");
            $_SESSION["check"] = true;   
        }else{
            echo '<script> alert ("Wrong NRP or Password"); </script>';
            header("location: ../login.php?stat=1");
        }
    }

    // header("location: index.php");
}else{
    exit();
}


?>
