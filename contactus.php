<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./contactus.css">
  <link rel="stylesheet" href="./header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <title>Ravi Modular Website</title>
</head>
<!-- BODY OF THE WEBPAGE -->

<body>

  
  <div class="bodyFlex">
    <!-- DESKTOP PAGE HEADER -->
    <div class="headerWrapper">
      <?php include("header.php"); ?>
    </div>


    <!-- Contact Section -->
    <div class="contentWrapper">
      <div class="contact-container">
        <div class="contact-left">
          <h2>CONTACT</h2>
          <p>Connecting people, a conversation with ease</p>
          <div class="contact-icon">
            <img src="https://i.imgur.com/R44DhpT.jpg" alt="Company Address">
            <p><a href="https://www.facebook.com/ravimodularcabinet" target="_blank" id="profile-link"
                title="Ravi Company Address">Ravi Company Address</a></p>
          </div>
          <div class="contact-icon">
            <img src="https://i.imgur.com/CU90nzu.jpg" alt="Contact Email">
            <p><a href="mailto:ravimodularcabinet@gmail.com" target="_blank" id="profile-link"
                title="Ravi Company Address">Contact Email</a></p>
          </div>
          <div class="contact-icon">
            <img src="https://i.imgur.com/objJFMW.jpg" alt="Social Media">
            <p><a href="https://www.facebook.com/ravimodularcabinet" target="_blank" id="profile-link"
                title="Ravi Company Address">Facebook Webpage</a></p>
          </div>
          <div class="contact-icon">
            <img src="https://i.imgur.com/C94wkIv.jpg" alt="Social Media">
            <p><a href="https://www.instagram.com/ravimodular0121/" target="_blank" id="profile-link"
                title="Ravi Company Address">Instagram Webpage</a></p>
          </div>
        </div>

        <div class="contact-right">
          <h2>FEEDBACK</h2>
          <p>Feedback is the compass that points us towards Improvement</p>
          <div class="contact-icon">
            <img src="https://i.imgur.com/R44DhpT.jpg" alt="Company Address">
            <p><a href="https://www.facebook.com/ravimodularcabinet" target="_blank" id="profile-link"
                title="KOLEHIYO Company Address">KOLEHIYO Company Address</a></p>
          </div>
          <div class="contact-icon">
            <img src="https://i.imgur.com/CU90nzu.jpg" alt="Contact Email">
            <p><a href="mailto:kolehiyo21@gmail.com" target="_blank" id="profile-link"
                title="KOLEHIYO Company Address">KOLEHIYO Contact Email</a></p>
          </div>
          <div class="contact-icon">
            <img src="https://i.imgur.com/OOChP9p.jpg" alt="Social Media">
            <p><a href="https://sites.google.com/view/kolehiyo/home" target="_blank" id="profile-link"
                title="KOLEHIYO Company About">ABOUT KOLEHIYO</a></p>
          </div>
        </div>
      </div>
    </div>

    <!--FOOTER OF THE WEBPAGE-->
    <div class="footerWrapper">
      <?php include("footer.php"); ?>
    </div>
  </div>

  <!--BACKGROUND OF THE WEBPAGE-->
  <?php include("slider.php"); ?>
</body>

</html>