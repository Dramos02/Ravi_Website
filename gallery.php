<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="gallery.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <title>Ravi Modular Gallery</title>

</head>

<body>

  <div class="bodyFlex">
    <div class="headerWrapper">
      <?php include("header.php"); ?>
    </div>

    <div class="contentWrapper">
      <!-- IMAGE GALLERY -->
      <div class="container">
        <div class="heading">
          <h3>RAVI <span>Gallery</span></h3>
        </div>
        <div class="box">
          <div class="rows">
            <img src="https://i.imgur.com/XRBqjFJ.jpg" alt="">
            <img src="https://i.imgur.com/4pPLUl8.jpg" alt="">
            <img src="https://i.imgur.com/pOep9Cd.jpg" alt="">
            <img src="https://i.imgur.com/ZsRrtye.jpg" alt="">
            <img src="https://i.imgur.com/WS7o3DS.jpg" alt="">

          </div>
          <div class="rows">
            <img src="https://i.imgur.com/OFfMBE7.jpg" alt="">
            <img src="https://i.imgur.com/gtNoON2.jpg" alt="">
            <img src="https://i.imgur.com/sYkwqGX.jpg" alt="">
            <img src="https://i.imgur.com/TWe3f40.jpg" alt="">
            <img src="https://i.imgur.com/PLVh0Lq.jpg" alt="">

          </div>
          <div class="rows">
            <img src="https://i.imgur.com/hMvxBtt.jpg" alt="">
            <img src="https://i.imgur.com/5NYG6BN.jpg" alt="">
            <img src="https://i.imgur.com/2YRP1Zr.jpg" alt="">
            <img src="https://i.imgur.com/iQXP8e5.jpg" alt="">
            <img src="https://i.imgur.com/IYvnuMB.jpg" alt="">

          </div>

          <div class="rows">
            <img src="https://i.imgur.com/hMvxBtt.jpg" alt="">
            <img src="https://i.imgur.com/5NYG6BN.jpg" alt="">
            <img src="https://i.imgur.com/2YRP1Zr.jpg" alt="">
            <img src="https://i.imgur.com/iQXP8e5.jpg" alt="">
            <img src="https://i.imgur.com/IYvnuMB.jpg" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="footerWrapper">
      <?php include("footer.php"); ?>
    </div>
  </div>

  <?php include("slider.php"); ?>

</body>

</html>