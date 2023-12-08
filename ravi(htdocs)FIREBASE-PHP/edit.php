<!-- ADMIN -->
<?php
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
$id = $_GET['id'];
$retrieve = $db->retrieve("ravi/$id");
$data = json_decode ($retrieve, 1);
?>

<form method="post" action="action_edit.php">
    <table border="0" width="800">

    <tr>
        <td>Full Name</td>
        <td>:</td>
        <td><input type="text" name="fullname" class="input" placeholder="Full Name" value="<?php echo $data['fullname']?>" required></td>
    </tr>
    <tr>
        <td>Email Address</td>
        <td>:</td>
        <td><input type="email" name="email" placeholder="email@email.com" value="<?php echo $data['email']?>" required></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>:</td>
        <td><input type="text" name="contactnumber"  pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX"   value="<?php echo $data['contactnumber']?>" required></td>
    </tr>
    <tr>
        <td>Street Address</td>
        <td>:</td>
        <td><input type="text" name="streetaddress"  title="Specific Address" placeholder="23 Main Street, Anytown, PHP 12345"  value="<?php echo $data['streetaddress']?>" required></td>
    </tr>
    <!--NOT FINAL WITH CITY/STATE/PROVINCE-->
    <tr>
        <td>City</td>
        <td>:</td>
        <td><input type="text" name="city"  title="Specific Address" placeholder="XXXXX City"  value="<?php echo $data['city']?>" required></td>
    </tr>
    <tr>
        <td>State/Province</td>
        <td>:</td>
        <td><input type="text" name="stateprovince"  title="Specific Address" placeholder="XXXXXXXX"  value="<?php echo $data['stateprovince']?>" required></td>
    </tr>
    <tr>
        <td>ZIP/Postal Code:</td>
        <td>:</td>
        <td><input type="text" name="postalcode" pattern="\d{4}" placeholder="1234 / XXXX"  value="<?php echo $data['postalcode']?>" required></td>
    </tr>
    <tr>
        <td>Minimum Badget:</td>
        <td>:</td>
        <td><input type="text" name="minbudget"  placeholder="100,000 / XXX,XXX"  value="<?php echo $data['minbudget']?>" required></td>
    </tr>
    <tr>
        <td>Maximum Badget:</td>
        <td>:</td>
        <td><input type="text" name="maxbudget"  placeholder="100,000 / XXX,XXX"  value="<?php echo $data['maxbudget']?>"required></td>
    </tr>
    <tr>
        <td><input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" class="button-save" value="SAVE"></td>

    </tr>
    </table>
</form>