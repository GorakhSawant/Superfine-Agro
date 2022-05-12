<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="img/intro.jpg" />
    <title>Superfine Agro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div>
        <?php
        require 'header.php';
        ?>
        <div id="bannerImage1">
            <div class="container">
                <center>
                    <div id="bannerContent">
                        <h1>We sell .</h1>
                        <p>Flat 40% OFF on all premium Music brands.</p>
                        <a href="products.php" class="btn btn-danger">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-200">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/image.jpg" alt="Bg_image">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize"></p>

                            </div>
                        </center>
                    </div>
                </div>

            </div>
        </div>
        <br><br> <br><br><br><br>

    </div>
</body>

</html>