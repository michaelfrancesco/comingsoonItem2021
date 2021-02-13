<?php
include "api/connect.php";
if (isset ($_SESSION['nrp'])){
    header ("location: index.php");
}
if (isset($_GET['stat'])) {
if ($_GET['stat']== 1) {
    echo "<script> alert ('Wrong Password and NRP'); </script> ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>ITEM 2021 - Ini Talkshow Edukasi Movie</title>
    <link rel="icon" href="./asset/hicon.png">
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
                <div class="card p-4 text-left">
        <body class="text-center" data-new-gr-c-s-check-loaded="14.986.0" data-gr-ext-installed="">
            <h1 class="title-h1">Login</h1>
            <main class="form-signin">
                <form action="api/ceklogin.php" method="POST">
                    <h1 class="h3 mb-3 fw-normal">Login Portal</h1>
                    <label for="nrp" class="visually-hidden">Nrp</label>
                    <input type="nrp" name="nrp" id="nrp" class="form-control" placeholder="Ex: c141901xxx" required="">
                    <label for="password" class="visually-hidden">Password</label>
                    <input type="password" id="password" name="pass" class="form-control" placeholder="Password" required="">
                    <button class="w-100 btn btn-lg btn-primary" id="login-button" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">© 2020-2021</p>
                </form>
            </main>
        </body>
    </div>
                
            <div class="col-md-4"></div>
        </div>
    </div>
    

      <img src="asset/char/Karakter ITEM 1.png" id="karakter1">
      <img src="asset/char/Karakter ITEM 2.png" id="karakter2">

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script>
        $(window).on("load",function(){
            $('.loading-wrapper').fadeOut("slow");
        });
    </script>
</body>
</html>