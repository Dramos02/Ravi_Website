    <!--USER/CLIENT -->
<form method="post" action="action_add.php">
    <table border="0" width="800">
</table>
    <tr>
        <td>Full Name</td>
        <td>:</td>
        <td><input type="text" name="fullname" class="input" placeholder="Full Name"required></td>
    </tr>
    <tr>
        <td>Email Address</td>
        <td>:</td>
        <td><input type="email" name="email" placeholder="email@email.com"required></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>:</td>
        <td><input type="text" name="contactnumber"  pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
    </tr>
    <tr>
        <td>Street Address</td>
        <td>:</td>
        <td><input type="text" name="streetaddress"  title="Specific Address" placeholder="23 Main Street, Anytown, PHP 12345" required></td>
    </tr>
    <!--NOT FINAL WITH CITY/STATE/PROVINCE-->
    <tr>
        <td>City</td>
        <td>:</td>
        <td><input type="text" name="city"  title="Specific Address" placeholder="XXXXX City" required></td>
    </tr>
    <tr>
        <td>State/Province</td>
        <td>:</td>
        <td><input type="text" name="stateprovince"  title="Specific Address" placeholder="XXXXXXXX" required></td>
    </tr>
    <tr>
        <td>ZIP/Postal Code:</td>
        <td>:</td>
        <td><input type="text" name="postalcode" pattern="\d{4}" placeholder="1234 / XXXX"required></td>
    </tr>
    <tr>
        <td>Minimum Badget:</td>
        <td>:</td>
        <td><input type="text" name="minbudget"  placeholder="100,000 / XXX,XXX"required></td>
    </tr>
    <tr>
        <td>Maximum Badget:</td>
        <td>:</td>
        <td><input type="text" name="maxbudget"  placeholder="100,000 / XXX,XXX"required></td>
    </tr>

    <tr>
        <td><button type="submit" class="button-confirm">Submit</button></td>
    </tr>
</form>