<!-- ADMIN -->
<?php

include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
?>

<title>Ravi Forms</title>

<table border="1" width="auto">
    <tr>
        <td colspan="3">Contact Information:</td>
        <td colspan="4">Address:</td>
        <td colspan="2">Budget Range:</td>
    </tr>
    <tr>
        <td>Full Name:</td>
        <td>Email Address:</td>
        <td>Phone Number:</td>
        <td>Street Address:</td>
        <td>City:</td>
        <td>State/Province:</td>
        <td>ZIP/Postal Code:</td>
        <td>Minimum Budget:</td>
        <td>Maximum Budget:</td>
    </tr>
  
    <?php
    $data = $db->retrieve("ravi");
    $data = json_decode($data, 1);

    if (is_array($data)) {
        foreach ($data as $id => $ravi) {
            echo "<tr>
                <td>{$ravi['fullname']}</td>
                <td>{$ravi['email']}</td>
                <td>{$ravi['contactnumber']}</td>
                <td>{$ravi['streetaddress']}</td>
                <td>{$ravi['city']}</td>
                <td>{$ravi['stateprovince']}</td>
                <td>{$ravi['postalcode']}</td>
                <td>{$ravi['minbudget']}</td>
                <td>{$ravi['maxbudget']}</td>
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