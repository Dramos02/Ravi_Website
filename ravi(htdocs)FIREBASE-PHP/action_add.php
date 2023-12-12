<!--USER/CLIENT -->
<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$raviData = [
  "initial" => [
    "initial_name" => $_POST['initial_name'],
    "initial_contactnumber" => $_POST['initial_contactnumber'],
    "initial_address" => $_POST['initial_address'],
    "initial_idprofFee" => $_POST['initial_idprofFee'],
    "initial_profession" => $_POST['initial_profession']
  ],
  "primary" => [
    "primary_name" => $_POST['primary_name'],
    "primary_contactnumber" => $_POST['primary_contactnumber'],
    "primary_address" => $_POST['primary_address'],
    "primary_idprofFee" => $_POST['primary_idprofFee'],
    "primary_profession" => $_POST['primary_profession']
  ],
  "owner" => [
    "owner_name" => $_POST['owner_name'],
    "owner_contactnumber" => $_POST['owner_contactnumber'],
    "owner_address" => $_POST['owner_address'],
    "owner_idprofFee" => $_POST['owner_idprofFee'],
    "owner_profession" => $_POST['owner_profession']
  ]
];

$insert = $db->insert("ravi", $raviData);

if ($insert) {
  $_SESSION['status'] = "Inquries submitted, Wait for our call till we Verify you!";
  header('Location: index.php');
} else {
  $_SESSION['status'] = "Some Went Wrong!! Check Backend...";
  header('Location: index.php');
}
?>