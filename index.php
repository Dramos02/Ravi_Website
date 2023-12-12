<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <title>Ravi Modular Website</title>
</head>
<!-- BODY OF THE WEBPAGE -->

<body>

  <!-- MOBILE PAGE HEADER
  <div class="mobileHeaderWrap">
    
  </div> -->

  <div class="bodyFlex">
    <!-- DESKTOP PAGE HEADER -->
    <div class="headerWrapper">
      <?php include("header.php"); ?>
    </div>

    <!--TITLE OF THE WEBPAGE-->
    <div class="contentWrapper">
      <div class="homeTitle">
        <img class="custom-header" src="https://i.imgur.com/q3fiLLR.png">
        <p class="quote">Where Function Meets Aesthetic Harmony in Every Architectural Space</p>
      </div>
    </div>

    <!-- PAGE FOOTER -->
    <div class="footerWrapper">
      <?php include("footer.php"); ?>
    </div>
  </div>

  <!--BACKGROUND OF THE WEBPAGE-->
  <?php include("slider.php"); ?>

</body>

</html>