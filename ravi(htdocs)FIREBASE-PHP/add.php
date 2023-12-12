    <!--USER/CLIENT -->
<form method="post" action="action_add.php">
    <table>
    <tr>
        <th>INITIAL CONTACT DETAILS  (Arichtiect/ID)</th>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="fullname" class="input" placeholder="Full Name"required></td>
        <td><input type="checkbox" id="projmanager_I" name="projmanager_I" value="projmanager_I">
            <label for="projmanager_I" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="timekeeper_I" name="timekeeper_I" value="timekeeper_I">
            <label for="timekeeper_I" class="checkbox-text">TIMEKEEPER</label>
        </td>
    </tr>
    <tr>
        <td>Mobile No</td>
        <td>:</td>
        <td><input type="text" name="contactnumber"  pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        <td><input type="checkbox" id="projengineer_I" name="projengineer_I" value="projengineer_I">
            <label for="projengineer_I" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="foreman_I" name="foreman_I" value="foreman_I">
            <label for="foreman_I" class="checkbox-text">FOREMAN</label>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="address" placeholder="Complete Address"required></td>
        <td><input type="checkbox" id="architect_I" name="architect_I" value="architect_I">
            <label for="architect_I" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="checkbox" id="int_designer_I" name="int_designer_I" value="int_designer_I">
            <label for="int_designer_I" class="checkbox-text">INT. DESIGNER</label>
        </td>
    </tr>
    <tr>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>:</td>
        <td><input type="text" name="idprofFee" placeholder=""required></td>
        <td><input type="checkbox" id="others_I" name="others_I" value="others_I">
            <label for="others_I" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
        <textarea id="others_field_I" name="others_field_I" rows="1" cols="20"></textarea>
        </td>
    </tr>
    <tr>
        <th>PRIMARY CONTACT DETAILS (Arichtiect/ID)</th>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="fullname" class="input" placeholder="Full Name"required></td>
        <td><input type="checkbox" id="projmanager_P" name="projmanager_P" value="projmanager_P">
            <label for="projmanager_P" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="timekeeper_P" name="timekeeper_P" value="timekeeper_P">
            <label for="timekeeper_P" class="checkbox-text">TIMEKEEPER</label>
        </td>
    </tr>
    <tr>
        <td>Mobile No</td>
        <td>:</td>
        <td><input type="text" name="contactnumber"  pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        <td><input type="checkbox" id="projengineer_P" name="projengineer" value="projengineer_P">
            <label for="projengineer_P" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="foreman_P" name="foreman_P" value="foreman_P">
            <label for="foreman_P" class="checkbox-text">FOREMAN</label>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="address" placeholder="Complete Address"required></td>
        <td><input type="checkbox" id="architect_P" name="architect_P" value="architect_P">
            <label for="architect_P" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="checkbox" id="int_designer_P" name="int_designer_P" value="int_designer_P">
            <label for="int_designer_P" class="checkbox-text">INT. DESIGNER</label>
        </td>
    </tr>
    <tr>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>:</td>
        <td><input type="text" name="idprofFee" placeholder=""required></td>
        <td><input type="checkbox" id="others_P" name="others_P" value="others_P">
            <label for="others_P" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
        <textarea id="others_field_P" name="others_field_P" rows="1" cols="20"></textarea>
        </td>
    </tr>
    <tr>
        <th>MAIN CONTACT (OWNER)</th>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="fullname" class="input" placeholder="Full Name"required></td>
        <td><input type="checkbox" id="projmanager_M" name="projmanager_M" value="projmanager_M">
            <label for="projmanager_P" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="timekeeper_M" name="timekeeper_M" value="timekeeper_M">
            <label for="timekeeper_M" class="checkbox-text">TIMEKEEPER</label>
        </td>
    </tr>
    <tr>
        <td>Mobile No</td>
        <td>:</td>
        <td><input type="text" name="contactnumber"  pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        <td><input type="checkbox" id="projengineer_M" name="projengineer_M" value="projengineer_M">
            <label for="projengineer_M" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="foreman_M" name="foreman_M" value="foreman_M">
            <label for="foreman_M" class="checkbox-text">FOREMAN</label>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="address" placeholder="Complete Address"required></td>
        <td><input type="checkbox" id="architect_M" name="architect_M" value="architect_M">
            <label for="architect_M" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="checkbox" id="int_designer_M" name="int_designer_M" value="int_designer_M">
            <label for="int_designer_M" class="checkbox-text">INT. DESIGNER</label>
        </td>
    </tr>
    <tr>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>:</td>
        <td><input type="text" name="idprofFee" placeholder=""required></td>
        <td><input type="checkbox" id="others_M" name="others_M" value="others_M">
            <label for="others_M" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
        <textarea id="others_field_M" name="others_field_M" rows="1" cols="20"></textarea>
        </td>
    </tr>
    <tr> 
        <th> SPECIFICATIONS: </th>
    </tr>   
    <tr>
        <td>Main Kitchen</td>
        <td>:</td>
        <td><input type="checkbox" id="aux_kitchen" name="aux_kitchen" value="aux_kitchen">
            <label for="aux_kitchen" class="checkbox-text">AUX. KITCHEN</label>
        </td>
        <td><input type="checkbox" id="vanity" name="vanity" value="vanity">
            <label for="vanity" class="checkbox-text">VANITY</label>
        </td>
        <td><input type="checkbox" id="office" name="office" value="office">
            <label for="office" class="checkbox-text">OFFICE</label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="checkbox" id="closet" name="closet" value="closet">
            <label for="closet" class="checkbox-text">CLOSET</label>
        </td>
        <td><input type="checkbox" id="entertainment" name="entertainment" value="entertainment">
            <label for="entertainment" class="checkbox-text">ENTERTAINMENT</label>
        </td>
        <td><input type="checkbox" id="others_S" name="others_S" value="others_S">
            <label for="others_S" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
        <textarea id="others_field_S" name="others_field_S" rows="1" cols="20"></textarea>
        </td>
    <tr>
        <td><button type="submit" class="button-confirm">Submit</button></td>
        
    </tr>
</form>
</table>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: auto;
}

form {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

table {
    width: auto;
    border-collapse: collapse;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

input {
    width: auto;
    padding: 8px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

button {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

input[type="checkbox"] {
    margin-right: 10px;
    transform: scale(1.5); /* Adjust the scale factor as needed */
}

.checkbox-text {
    font-size: 14px;
    font-weight: bold;
}

</style>