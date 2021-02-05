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

    <div class="button">
        <button type="button" id="cek" class="btn" data-bs-toggle="modal" data-bs-target="#myModal">Click Me</button>

    </div>

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Movie Quote</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php
                include "api/connect.php";

                $sql = "SELECT * FROM quotes order by rand() LIMIT 1";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
        
                if ($stmt ){
                    while($row = $stmt->fetch()){ ?>
                        <div class="quote">
                            <?php echo $row ["quote"];?>
                        </div>
                        <div class="movie">
                            <?php echo $row ["movie"];?>
                        </div>
                        <img src = "<?php echo $row["pic_dir"];?>" width="430" class="center">
                            <?php
                    }
                }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <!-- jquery scroll" jangan hapus oi -->
    <!-- <div id="panel">TEST</div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $(window).on("load",function(){
            $('.loading-wrapper').fadeOut("slow");
        });

        // $("#saveme").click(function(){
        //     $("#panel").slideToggle("slow");
        // });

    </script>
</body>
</html>