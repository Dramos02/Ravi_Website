<!-- ADMIN -->
<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
?>

<title>Ravi Forms</title>
<link rel="icon" href="https://i.imgur.com/nMdo4LG.jpg">


<div class="background"></div>

<div class="content">
  <table width="auto" align="center">
    <thead>
      <tr>
        <th colspan="5">Initial Contact Details:</th>
        <th colspan="5">Primary Contact Details:</th>
        <th colspan="5">Main Owner Details:</th>
        <th colspan="8">Specifications</th>
        <th colspan="3">Oven</th>
        <th colspan="3">Cooktop</th>
        <th colspan="3">Refrigerator</th>
        <th colspan="3">Sink</th>
        <th colspan="3">Microwave</th>
        <th colspan="3">Important Remarks</th>
        <th colspan="3">Other Appliances
        <th>
      </tr>
      <tr>
        <th>Name:</th>
        <th>Contact Number:</th>
        <th>Address</th>
        <th>% ID Prof. Fee or Fixed PF Amount</th>
        <th>Profession:</th>

        <th>Name:</th>
        <th>Contact Number:</th>
        <th>Address</th>
        <th>% ID Prof. Fee or Fixed PF Amount</th>
        <th>Profession:</th>

        <th>Name:</th>
        <th>Contact Number:</th>
        <th>Address</th>
        <th>% ID Prof. Fee or Fixed PF Amount</th>
        <th>Profession:</th>

        <th>Main Kitchen</th>
        <th>Door Front</th>
        <th>Door Front Finish</th>
        <th>Counter Top</th>
        <th>Handle</th>
        <th>Oven Type</th>
        <th>Range</th>
        <th>Range Hood</th>

        <th>WIDTH</th>
        <th>DEPTH</th>
        <th>HEIGHT</th>

        <th>WIDTH</th>
        <th>DEPTH</th>
        <th>HEIGHT</th>

        <th>WIDTH</th>
        <th>DEPTH</th>
        <th>HEIGHT</th>

        <th>WIDTH</th>
        <th>DEPTH</th>
        <th>HEIGHT</th>

        <th>WIDTH</th>
        <th>DEPTH</th>
        <th>HEIGHT</th>

        <th>Remarks</th>
        <th>Submitted by:</th>
        <th>Date:</th>

        <th>Model/Brand Name:</th>
        <th>WIDTH</th>
        <th>DEPTH</th>
        <th>HEIGHT</th>

      </tr>
    </thead>
    <?php
    $data = $db->retrieve("ravi");
    $data = json_decode($data, 1);

    if (is_array($data)) {
      foreach ($data as $id => $ravi) {
        echo "<tr>
                <td>{$ravi['initial']['initial_name']}</td>
                <td>{$ravi['initial']['initial_contactnumber']}</td>
                <td>{$ravi['initial']['initial_address']}</td>
                <td>{$ravi['initial']['initial_idprofFee']}</td>
                <td>{$ravi['initial']['initial_profession']}</td>

                <td>{$ravi['primary']['primary_name']}</td>
                <td>{$ravi['primary']['primary_contactnumber']}</td>
                <td>{$ravi['primary']['primary_address']}</td>
                <td>{$ravi['primary']['primary_idprofFee']}</td>
                <td>{$ravi['primary']['primary_profession']}</td>

                <td>{$ravi['owner']['owner_name']}</td>
                <td>{$ravi['owner']['owner_contactnumber']}</td>
                <td>{$ravi['owner']['owner_address']}</td>
                <td>{$ravi['owner']['owner_idprofFee']}</td>
                <td>{$ravi['owner']['owner_profession']}</td>

                <td>{$ravi['specifications']['kitchen_field']}</td>
                <td>{$ravi['specifications']['doorfront']}</td>
                <td>{$ravi['specifications']['doorfront_Finish']}</td>
                <td>{$ravi['specifications']['countertop']}</td>
                <td>{$ravi['specifications']['handle']}</td>
                <td>{$ravi['specifications']['oven_type']}</td>
                <td>{$ravi['specifications']['range_type']}</td>
                <td>{$ravi['specifications']['rangeHoodType_Field']}</td>

                <td>{$ravi['specifications']['width_Oven']}</td>
                <td>{$ravi['specifications']['depth_Oven']}</td>
                <td>{$ravi['specifications']['height_Oven']}</td>

                <td>{$ravi['specifications']['width_Cooktop']}</td>
                <td>{$ravi['specifications']['depth_Cooktop']}</td>
                <td>{$ravi['specifications']['height_Cooktop']}</td>

                <td>{$ravi['specifications']['width_Refrigerator']}</td>
                <td>{$ravi['specifications']['depth_Refrigerator']}</td>
                <td>{$ravi['specifications']['height_Refrigerator']}</td>

                <td>{$ravi['specifications']['width_Sink']}</td>
                <td>{$ravi['specifications']['depth_Sink']}</td>
                <td>{$ravi['specifications']['height_Sink']}</td>
        
                <td>{$ravi['specifications']['width_Microwave']}</td>
                <td>{$ravi['specifications']['depth_Microwave']}</td>
                <td>{$ravi['specifications']['height_Microwave']}</td>

                <td>{$ravi['specifications']['remarks']}</td>
                <td>{$ravi['specifications']['submittedby']}</td>
                <td>{$ravi['specifications']['submission_date']}</td>

                <td>{$ravi['specifications']['model_brand']}</td>
                <td>{$ravi['specifications']['width_model_brand']}</td>
                <td>{$ravi['specifications']['depth_model_brand']}</td>
                <td>{$ravi['specifications']['height_model_brand']}</td>
                


                <td><a href='edit.php?id=$id'><button class='edit-btn'> EDIT </button></a></td>
                <td><a href='delete.php?id=$id'><button class='delete-btn'> DELETE </button></a></td>
            </tr>";
      }
    }
    ?>
  </table>
  <div class="button-container">
    <!-- ADD DATA button -->
    <!-- <a href="add.php"><button class="add-data-btn"> ADD DATA </button></a> -->

    <!-- PRINT button -->
    <button class="print-btn" onclick="printTable()"> PRINT </button>
  </div>
</div>

<script>
  function printTable() {
    window.print();
  }
</script>

<style>

  body {
    /* justify-content: center; */

    /* position: fixed; */
    background-image: url("https://i.imgur.com/WMIgT70.jpg");
    background-repeat: repeat;
    background-size: cover;
    height: 100%;
    /* filter: brightness(0.2); */
    z-index: -1;

    /* opacity: 0.9;
    margin: 0;
    padding: 0; */
  }

  table {
    align-content: center;

    font-size: 12px;
    font-weight: 300;
    font-family: 'Raleway', sans-serif;

    background-color: #f2f2f2;
    border-collapse: collapse;
    border: none;

    width: 100%;

    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
    margin-bottom: 10px;

    text-align: center;
    overflow: hidden;

    border-radius: 60px;

    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;

  }

  thead {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
  }


  th {
    padding: 1rem 2rem;
    text-transform: uppercase;
    letter-spacing: 0.1rem;

    font-weight: 600;
    font-size: 0.7rem;

  }


  td {
    /* border: none !important; */
    padding: 1rem 2rem;

    font-size: 0.7rem;
    font-weight: 300;
  }

  .button-container {
    margin-top: 30px;
    margin-bottom: 30px;
    margin-left: 30px;

  }

  tr {
    /* border-bottom: 1; */
    /* border-bottom:none; */
  }

  .add-data-btn,
  .print-btn {
    align-items: center;
    justify-content: center;
    padding: 0.7rem 4rem;

    font-family: 'Raleway', sans-serif;
    font-size: 12px;
    text-align: center;
    text-decoration: none;

    background-color: white;
    backface-visibility: hidden;
    border: 0.2rem solid transparent;
    border-radius: 40px;

    color: black;

    margin-right: 40px;
    margin-left: 40px 10px;
  }

  .edit-btn,
  .delete-btn {
    align-items: center;
    justify-content: center;
    padding: 0.6rem 2rem;

    font-family: 'Raleway', sans-serif;
    font-size: 15px;
    text-align: center;

    text-decoration: none;
    background-color: black;

    color: white;

    backface-visibility: hidden;
    border: 0.1rem solid transparent;
    border-radius: 40px;
  }

  .add-data-btn:hover,
  .print-btn:hover,
  .edit-btn:hover,
  .delete-btn:hover {
    border-color: black;
    transition: transform 0.2s cubic-bezier(0.235, 0, 0.05, 0.95);
    transform: perspective(1px) scale3d(1.044, 1.044, 1) translateZ(0) !important;

  }
</style>