<!-- ADMIN -->
<?php
session_start();

include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$id = $_POST['id'];

$update = $db->update("ravi", $id,[
    "fullname" => $_POST['fullname'],
    "email" => $_POST['email'],
    "contactnumber" => $_POST['contactnumber'],
    "streetaddress" => $_POST['streetaddress'],
    "city" => $_POST['city'],
    "stateprovince" => $_POST['stateprovince'],
    "postalcode" => $_POST['postalcode'],
    "minbudget" => $_POST['minbudget'],
    "maxbudget" => $_POST['maxbudget'],
]);

if($update){
    $_SESSION['status'] ="Employee Data Updated Successfully";
    header('Location: index.php');
}else {
    $_SESSION['status'] ="Some Went Wrong!! Check Backend...";
    header('Location: index.php');
}
?>