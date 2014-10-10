<?php
require "includes/noCache.inc";
?>

<html>
  <head>

    <title>T-17 Heavy Industries</title>
    <meta name="description" content="Indepedent game developers T-17 Heavy Industries home page">

    <?php require "includes/header.inc" ?>

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>

  </head>

  <body>

    <?php require "includes/topBanner.inc" ?>

    <div class="main">

      <!--<h1 style="text-align:center;font-family:Roboto;"> T-17 Heavy Industries </h1> -->
      <!--<hr> -->

      <div class = "carousel">
        <div><img src="images/Feature_Graphic.png"></div>
        <div><img src="images/phoneVertical.png"></div>
        <div><img src="images/sTabletHorizontal.png"></div>
        <div><img src="images/tabletVertical.png"></div>
        <div><img src="images/sTabletVertical.png"></div>
      </div>

      <hr>

      <h3 class="text_h" style= "margin-top:20px;">Back and Forth is Released!</h3>

      <p style="font-family:Roboto; text-align:center;">Back and Forth is now on the Google Play Store.  Download it now to solve puzzles
        and to create your own.
      </p>

      
      <div class = "link_box_left">
        <p>Paid</p>
        <a href "https://play.google.com/store/apps/details?id=com.t17heavyindustries.back_and_forth">
          <img src = "images/fire.png">
        </a>
      </div>
      <div class = "link_box_right">
        <p>Free</p>
        <a href "https://play.google.com/store/apps/details?id=com.t17heavyindustries.back_and_forth_free">
          <img src = "images/desert.png">
        </a>
      </div>

    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

  

  </body>
</html>

<?php
ob_end_flush();
?>
