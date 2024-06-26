<?php

    session_start();

    if( !isset($_SESSION["check"])){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>ITEM 2021 - Ini Talkshow Edukasi Movie</title>
    <link rel="icon" href="asset/hicon.png">
</head>
<body>
    <div class="loading-wrapper">
        <div class="loading-inner">
            <img src="asset/LOGO ITEM white.png" alt="" height="80" class="mb-5" loading="lazy">
            <br>
            <div class="spinner-border text-light mb-4" role="status">
                <!-- <span class="sr-only">Loading...</span> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <img src="asset/item1.png" width="200" class="mb-2" lt="">
                <h1 class="title-h1" >Coming Soon</h1>
                <div class="mb-4"></div>
                
            <div class="col-md-4"></div>
        </div>
    </div>

    <div class = "container">
        <div class = "row"> 
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <div class="card p-4 text-left">
                <form action="../admin/api/add_data.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        <label for="image" class="visually-hidden">Image</label>
                        <input type="file" name="image" accept="image/*" required="" placeholder="Input Image">
                        <label class="visually-hidden">Quotes</label>
                        <input type="text" name="quote" cols="40" rows="4" class="form-control" placeholder="Input Quotes" required=""></input>
                        <label class="visually-hidden">Movie</label>
                        <input type="text" name="movie" class="form-control" placeholder=" ex : -Sasa, Power Ranger ">
                        <br>
                        <input class="w-100 btn btn-lg btn-primary" id="upload-button" type="submit"></input>
                        <a href = "logout.php"> Log Out </a>
                    </div>
                </form>
            </div>
            </div>
            
            
        </div>
    </div>
    
      <img src="asset/char/Karakter ITEM 1.png" id="karakter1">
      <img src="asset/char/Karakter ITEM 2.png" id="karakter2">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $(window).on("load",function(){
            $('.loading-wrapper').fadeOut("slow");
        });
    </script>
    
</body>
</html>