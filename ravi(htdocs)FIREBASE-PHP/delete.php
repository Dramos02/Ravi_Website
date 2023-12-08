<?php
session_start();

include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];

if($id != ""){
    $delete = $db->delete("ravi",$id);
    echo "employee data deleted..";
}

if($delete){
    $_SESSION['status'] ="Employee Data Deleted!";
    header('Location: index.php');
}else {
    $_SESSION['status'] ="Some Went Wrong!! Check Backend...";
    header('Location: index.php');
}
?>