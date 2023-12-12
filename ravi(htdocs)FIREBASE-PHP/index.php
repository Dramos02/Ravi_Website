<!-- ADMIN -->
<?php

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