<!-- ADMIN -->
<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
?>

<title>Ravi Forms</title>

<table border="1" width="auto">
    <tr>
        <td colspan="5">Initial Contact Details:</td> 
        <td colspan="5">Primary Contact Details:</td>
        <td colspan="5">Main Owner Details:</td>
        <td colspan="8">Specifications</td>
        <td colspan="3">Oven</td>
        <td colspan="3">Cooktop</td>
        <td colspan="3">Refrigerator</td>
        <td colspan="3">Sink</td>
        <td colspan="3">Microwave</td>
        <td colspan="3">Important Remarks</td>
        <td colspan="4">Other Appliances<td>
    </tr>
    <tr>
        <td>Name:</td>
        <td>Contact Number:</td>
        <td>Address</td>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>Profession:</td>

        <td>Name:</td>
        <td>Contact Number:</td>
        <td>Address</td>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>Profession:</td>

        <td>Name:</td>
        <td>Contact Number:</td>
        <td>Address</td>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>Profession:</td>

        <td>Main Kitchen</td>
        <td>Door Front</td>
        <td>Door Front Finish</td>
        <td>Counter Top</td>
        <td>Handle</td>
        <td>Oven Type</td>
        <td>Range</td>
        <td>Range Hood</td>
                
        <td>WIDTH</td>
        <td>DEPTH</td>
        <td>HEIGHT</td>

        <td>WIDTH</td>
        <td>DEPTH</td>
        <td>HEIGHT</td>

        <td>WIDTH</td>
        <td>DEPTH</td>
        <td>HEIGHT</td>

        <td>WIDTH</td>
        <td>DEPTH</td>
        <td>HEIGHT</td>

        <td>WIDTH</td>
        <td>DEPTH</td>
        <td>HEIGHT</td>

        <td>Remarks</td>
        <td>Submitted by:</td>
        <td>Date:</td>

        <td>Model/Brand Name:</td>
        <td>WIDTH</td>
        <td>DEPTH</td>
        <td>HEIGHT</td>

    </tr>
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
        <a href="add.php"><button class="add-data-btn"> ADD DATA </button></a>

        <!-- PRINT button -->
        <button class="print-btn" onclick="printTable()"> PRINT </button>
    </div>

<script>
    function printTable() {
        window.print();
    }
</script>

<style>
table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.button-container {
    margin-top: 20px;
}

.add-data-btn, .print-btn {
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    text-decoration: none;
    margin-right: 10px;
    cursor: pointer;
}

.edit-btn, .delete-btn {
    padding: 5px 10px;
    background-color: #4285f4;
    color: white;
    border: none;
    text-decoration: none;
    cursor: pointer;
}

.add-data-btn:hover, .print-btn:hover, .edit-btn:hover, .delete-btn:hover {
    background-color: #45a049;
}


</style>