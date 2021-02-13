<?php

include "api/connect.php";

    $target_dir = "picts/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($_SERVER['REQUEST_METHOD']=="POST"){

    $quote = $_POST['quote'];
    $movie = $_POST['movie'];
    $imgname = $target_dir . basename($_FILES["image"]["name"]);
    $image = $_FILES['image']['name'];

    //echo $nama . " ". $nrp;

    if($image != "" && $quote != ""){
        $sql = "INSERT INTO `quotes`(`id`, `quote`, `movie`, `pic_dir`) VALUES (default,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$quote, $movie, $imgname]);
        
        //check image 1
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check != false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        //check image 2
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                header("location: admin/index.html");
                echo '<script> alert ("Upload Success"); </script>';
            } else {
                echo '<script> alert ("Failed to Upload Data"); </script>';
            }
        }
    }
}


?>
