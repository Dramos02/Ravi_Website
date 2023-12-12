<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./forms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/238ceb8bd0.js" crossorigin="anonymous"></script>
    <title>Ravi Modular Website</title>
</head>
<!-- BODY OF THE WEBPAGE -->
<body>
    
    <?php include("header.php"); ?>

    <form onsubmit="sendEmail(); reset(); return false;">
        <div class="row">        
            <div class="input-group">
            <input type="text" id="name" required autocomplete="off">
            <label for="name"><i class="fa-solid fa-user"></i> Your Name</label>
        </div>
        <div class="input-group">
            <input type="number" id="number" required autocomplete="off">
            <label for="number"><i class="fa-solid fa-phone"></i> Phone Number</label>
        </div>
        </div>
        <div class="input-group">
            <input type="email" id="email" required autocomplete="off">
            <label for="email"><i class="fa-solid fa-envelope"></i> Contact Email</label>
        </div>
        <div class="input-group">
            <textarea id="message" rows="8" required autocomplete="off"></textarea>
            <label for="message"><i class="fa-solid fa-message"></i> Message</label>
        </div>
        <button type="submit">SUBMIT <i class="fa-solid fa-paper-plane"></i></button>
    </form>

    <!--FOOTER OF THE WEBPAGE-->
    <?php include('footer.php'); ?>
    
    <!--BACKGROUND OF THE WEBPAGE-->
    <?php include('slider.php'); ?>


    <!-- TEMPORARY -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
                Host : "smtp.gmail.com",
                Username : "USERNAME",
                Password : "PASSWORD",
                To : 'kolehiyo21@gmail.com',
                From : document.getElementById("email").value,
                Subject : "New Request Inquiry",
                Body : "Name: " + document.getElementById("name").value
                        + "<br> Email: " + document.getElementById("email").value
                        + "<br> Phone Number: " + document.getElementById("number").value
                        + "<br> Message: " + document.getElementById("message").value


            }).then(
            message => alert(message)
            );
        }
    </script>


</body>
</html>