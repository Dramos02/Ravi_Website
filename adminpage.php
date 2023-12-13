<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravi Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="adminpage.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">
    
</head>
<body>
<header>

    <div class="user">
        <h3 class="name">ADMIN USER</h3>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#Account_Details" style="background-color: #E1B847;">Account Details</a></li>
            <li><a href="#" style="background-color: #E1B847;">Recent Transactions</a></li>
            <li><a href="adminlogin.html" style="background-color: #E1B847;">Log-Out</a></li>
            <li><p class="end">2023 © RAVI Modular All rights reserved.</p></li>
        </ul>
    </nav>

</header>
<div id="menu" class="fas fa-bars"></div>

<section class="about" id="Account_Details">
<h1 class="heading"> Account <span> Details</span></h1>
<?php include('ravi(htdocs)FIREBASE-PHP/index.php');?>

</div>

</section>

</body>
</html>
