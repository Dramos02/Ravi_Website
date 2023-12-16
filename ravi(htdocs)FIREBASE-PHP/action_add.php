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
  ],
  "specifications" => [
    "kitchen_field" => $_POST['kitchen_field'], /* Main Kitchen */
    "doorfront" => $_POST['doorfront'],
    "doorfront_Finish" => $_POST['doorfront_Finish'],
    "countertop" => $_POST['countertop'],
    "handle" => $_POST['handle'],
    "oven_type" => $_POST['oven_type'],
    "range_type" => $_POST['range_type'],
    "rangeHoodType_Field" => $_POST['rangeHoodType_Field'],
    "width_Oven" => $_POST['width_Oven'],
    "depth_Oven" => $_POST['depth_Oven'],
    "height_Oven" => $_POST['height_Oven'],
    "width_Cooktop" => $_POST['width_Cooktop'],
    "depth_Cooktop" => $_POST['depth_Cooktop'],
    "height_Cooktop" => $_POST['height_Cooktop'],
    "width_Refrigerator" => $_POST['width_Refrigerator'],
    "depth_Refrigerator" => $_POST['depth_Refrigerator'],
    "height_Refrigerator" => $_POST['height_Refrigerator'],
    "width_Sink" => $_POST['width_Sink'],
    "depth_Sink" => $_POST['depth_Sink'],
    "height_Sink" => $_POST['height_Sink'],
    "width_Microwave" => $_POST['width_Microwave'],
    "depth_Microwave" => $_POST['depth_Microwave'],
    "height_Microwave" => $_POST['height_Microwave'],
    "remarks" => $_POST['remarks'],
    "submittedby" => $_POST['submittedby'],
    "submission_date" => $_POST['submission_date'],
    "model_brand" => $_POST['model_brand'],
    "width_model_brand" => $_POST['width_model_brand'],
    "depth_model_brand" => $_POST['depth_model_brand'],
    "height_model_brand" => $_POST['height_model_brand'],
    "pic_plan_name" => $_POST['pic_plan_name'],
    "pic_loc_name" => $_POST['pic_loc_name']
  ]
];

$insert = $db->insert("ravi", $raviData);

if ($insert) {
  $_SESSION['status'] = "Inquries submitted, Wait for our call till we Verify you!";
  header('Location: index.php');
} else {
  $_SESSION['status'] = "Something Went Wrong!! Check Backend...";
  header('Location: index.php');
}

?>