<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./forms.css">
  <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/238ceb8bd0.js" crossorigin="anonymous"></script>
  <title>Ravi Modular Website</title>
</head>
<!-- BODY OF THE WEBPAGE -->

<body>

  <div class="bodyFlex">
    <!-- HEADER OF THE WEBPAGE -->
    <div class="headerWrapper">
      <?php include("header.php"); ?>
    </div>

    <div class="contentWrapper">
      <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-storage.js"></script>
      <script src="./ravi(htdocs)FIREBASE-PHP/addscript.js"></script>
      <?php include("ravi(htdocs)FIREBASE-PHP/add.php"); ?>
    </div>

    <!-- FOOTER OF THE WEBPAGE -->
    <div class="footerWrapper">
      <?php include('footer.php'); ?>
    </div>
  </div>

  <!--BACKGROUND OF THE WEBPAGE-->
  <?php include('slider.php'); ?>
</body>

</html>