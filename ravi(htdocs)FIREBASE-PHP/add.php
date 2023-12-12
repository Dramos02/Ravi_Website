    <!--USER/CLIENT -->
<form method="post" action="action_add.php">
    <table>
    <tr>
        <th>INITIAL CONTACT DETAILS  (Arichtiect/ID)</th>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="initial_name" class="input" placeholder="Full Name"required></td>
        <td><input type="checkbox" id="projmanager" name="profession[]"value="projmanager">
            <label for="projmanager" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="timekeeper" name="timekeeper_I" value="timekeeper">
            <label for="timekeeper" class="checkbox-text">TIMEKEEPER</label>
        </td>
    </tr>
    <tr>
        <td>Mobile No</td>
        <td>:</td>
        <td><input type="text" name="initial_contactnumber"  class="input" pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        <td><input type="checkbox" id="projengineer" name="profession[]" value="projengineer">
            <label for="projengineer" class="checkbox-text">PROJ ENGINEER</label>
        </td>
        <td><input type="checkbox" id="initial_foreman" name="profession[]" value="foreman">
            <label for="foreman" class="checkbox-text">FOREMAN</label>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="initial_address" class="input" placeholder="Complete Address"required></td>
        <td><input type="checkbox" id="architect" name="profession[]" value="architect">
            <label for="architect" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="checkbox" id="int_designer_I" name="profession[]" value="int_designer">
            <label for="int_designer" class="checkbox-text">INT. DESIGNER</label>
        </td>
    </tr>
    <tr>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>:</td>
        <td><input type="text" name="initial_idprofFee" class="input" placeholder=""required></td>
        <td><input type="checkbox" id="others_I" name="profession[]" value="others">
            <label for="others" class="checkbox-text">OTHERS: PLS SPECIFY</label>
        </td>
        <td>
        <textarea id="others_field" name="others_field" rows="1" cols="20"></textarea>
        </td>
    </tr>
    <tr>
        <th>PRIMARY CONTACT DETAILS (Arichtiect/ID)</th>
    <tr>
        <td>Name</td>
        <td>:</td>
        <td><input type="text" name="primary_name" class="input" placeholder="Full Name"required></td>
        <td><input type="checkbox" id="projmanager" name="projmanager" value="projmanager">
            <label for="projmanager" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="timekeeper" name="timekeeper" value="timekeeper">
            <label for="timekeeper" class="checkbox-text">TIMEKEEPER</label>
        </td>
    </tr>
    <tr>
        <td>Mobile No</td>
        <td>:</td>
        <td><input type="text" name="primary_contactnumber" class="input" pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        <td><input type="checkbox" id="projengineer" name="projengineer" value="projengineer">
            <label for="projengineer" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="foreman" name="foreman" value="foreman">
            <label for="foreman" class="checkbox-text">FOREMAN</label>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="primary_address" class="input" placeholder="Complete Address"required></td>
        <td><input type="checkbox" id="architect_P" name="architect_P" value="architect">
            <label for="architect" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="checkbox" id="int_designer_P" name="int_designer" value="int_designer">
            <label for="int_designer" class="checkbox-text">INT. DESIGNER</label>
        </td>
    </tr>
    <tr>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>:</td>
        <td><input type="text" name="primary_idprofFee" class="input" placeholder=""required></td>
        <td><input type="checkbox" id="others" name="others" value="others">
            <label for="others" class="checkbox-text">OTHERS: PLS SPECIFY</label>
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
        <td><input type="text" name="owner_name" class="input" placeholder="Full Name"required></td>
        <td><input type="checkbox" id="projmanager" name="projmanager" value="projmanager">
            <label for="projmanager" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="timekeeper" name="timekeeper_M" value="timekeeper">
            <label for="timekeeper" class="checkbox-text">TIMEKEEPER</label>
        </td>
    </tr>
    <tr>
        <td>Mobile No</td>
        <td>:</td>
        <td><input type="text" name="owner_contactnumber" class="input" pattern="09\d{9}" title="Please enter 11 digits start with 09" placeholder="09XXXXXXX" required></td>
        <td><input type="checkbox" id="projengineer" name="projengineer" value="projengineer">
            <label for="projengineer_M" class="checkbox-text">PROJ MANAGER</label>
        </td>
        <td><input type="checkbox" id="foreman" name="foreman" value="foreman">
            <label for="foreman" class="checkbox-text">FOREMAN</label>
        </td>
    </tr>
    <tr>
        <td>Address</td>
        <td>:</td>
        <td><input type="text" name="owner_address" class="input" placeholder="Complete Address"required></td>
        <td><input type="checkbox" id="architect" name="architect" value="architect">
            <label for="architect" class="checkbox-text">ARCHITECT</label>
        </td>
        <td><input type="checkbox" id="int_designer" name="int_designer" value="int_designer">
            <label for="int_designer" class="checkbox-text">INT. DESIGNER</label>
        </td>
    </tr>
    <tr>
        <td>% ID Prof. Fee or Fixed PF Amount</td>
        <td>:</td>
        <td><input type="text" name="owner_idprofFee" class="input" placeholder=""required></td>
        <td><input type="checkbox" id="others" name="others" value="others">
            <label for="others" class="checkbox-text">OTHERS: PLS SPECIFY</label>
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
    </tr>   
    <tr>
        <td>Door Front</td>
        <td><input type="text" name="doorfront" class="input" placeholder=""required></td>
        <td>Door Front Finish</td>
        <td><input type="text" name="doorfront_Finish" placeholder=""required></td>
    </tr>
    <tr>
        <td>Counter Top</td>
        <td><input type="text" name="countertop" class="input" placeholder=""required></td>
        <td>Handle</td>
        <td><input type="text" name="handle"  class="input" placeholder=""required></td>
    </tr>
    <tr>
        <td>Own Type</td>
        <td><input type="checkbox" id="built_in" name="built_in" value="built_in">
            <label for="built_in" class="checkbox-text">BUILT IN</label>
        </td>
        <td><input type="checkbox" id="free_standing" name="free_standing" value="free_standing">
            <label for="free_standing" class="checkbox-text">FREE STANDING</label>
        </td>
    </tr>
    <tr>
        <td>Oven</td>
        <td><input type="text" name="width_Oven" class="input" placeholder=""required>
        <label class="checkbox-text">WIDTH</label></td>
        <td><input type="text" name="depth_Oven" class="input" placeholder=""required>
        <label class="checkbox-text">DEPTH</label></td>
        <td><input type="text" name="height_Oven" class="input" placeholder=""required>
        <label class="checkbox-text">HEIGHT</label></td>
    </tr>
    <tr>
        <td>Cooktop</td>
        <td><input type="text" name="width_Cooktop" class="input" placeholder=""required>
        <label class="checkbox-text">WIDTH</label></td>
        <td><input type="text" name="depth_Cooktop" class="input" placeholder=""required>
        <label class="checkbox-text">DEPTH</label></td>
        <td><input type="text" name="height_Cooktop" class="input" placeholder=""required>
        <label class="checkbox-text">HEIGHT</label></td>
    </tr>
    <tr>
        <td>Range</td>
        <td><input type="checkbox" id="built_in_Range" name="built_in_Range" value="built_in_Range">
            <label for="built_in_Range" class="checkbox-text">BUILT IN</label>
        </td>
        <td><input type="checkbox" id="free_standing_Range" name="free_standing_Range" value="free_standing_Range">
            <label for="free_standing_Range" class="checkbox-text">FREE STANDING</label>
        </td>
    </tr>
    <tr>
        <td>RangeHood</td>
        <td><input type="checkbox" id="duct_type" name="duct_type" value="duct_type">
            <label for="duct_type" class="checkbox-text">DUCT TYPE</label>
        </td>
        <td><input type="checkbox" id="filter_type" name="filter_type" value="filter_type">
            <label for="filter_type" class="checkbox-text">FILTER TYPE</label>
        </td>
        <td><input type="checkbox" id="nine_9m" name="nine_9m" value="nine_9m">
            <label for="nine_9m" class="checkbox-text">900mm</label>
        </td>
        <td><input type="checkbox" id="six_6m" name="six_6m" value="six_6m">
            <label for="six_6m" class="checkbox-text">600mm</label>
        </td>
    </tr>
    <tr>
        <td>Refrigerator</td>
        <td><input type="text" name="width_Refrigerator" class="input" placeholder=""required>
        <label class="checkbox-text">WIDTH</label></td>
        <td><input type="text" name="depth_Refrigerator" class="input" placeholder=""required>
        <label class="checkbox-text">DEPTH</label></td>
        <td><input type="text" name="height_Refrigerator" class="input" placeholder=""required>
        <label class="checkbox-text">HEIGHT</label></td>
    </tr>
    <tr>
        <td>Sink</td>
        <td><input type="text" name="width_Sink" class="input" placeholder=""required>
        <label class="checkbox-text">WIDTH</label></td>
        <td><input type="text" name="depth_Sink" class="input" placeholder=""required>
        <label class="checkbox-text">DEPTH</label></td>
        <td><input type="text" name="height_Sink" class="input" placeholder=""required>
        <label class="checkbox-text">HEIGHT</label></td>
    </tr>
    <tr>
        <td>Microwave</td>
        <td><input type="text" name="width_Microwave" class="input" placeholder=""required>
        <label class="checkbox-text">WIDTH</label></td>
        <td><input type="text" name="depth_Microwave" class="input" placeholder=""required>
        <label class="checkbox-text">DEPTH</label></td>
        <td><input type="text" name="height_Microwave" class="input" placeholder=""required>
        <label class="checkbox-text">HEIGHT</label></td>
    </tr>
    <tr>
        <td>Model/Brand (OTHER APPLIANCES, PLS SPECIFY)</td>
        <td><input type="text" name="model_brand" class="input" placeholder="">
    </tr>
    <tr>
    <td></td>
    <td><input type="text" name="width_model_brand" class="input" placeholder="">
        <label class="checkbox-text">WIDTH</label></td>
        <td><input type="text" name="depth_model_brand" class="input" placeholder="">
        <label class="checkbox-text">DEPTH</label></td>
        <td><input type="text" name="height_model_brand" class="input" placeholder="">
        <label class="checkbox-text">HEIGHT</label></td>
    </tr>
    <tr>
        <td>REMARKS:</td>
        <td><textarea id="remarks" name="remarks" rows="3" cols="10"></textarea></td>
    </tr>
    <tr>
    <td>Attachments:</td>
    <td><label>Plan</label>
        <input type="file" id="plan" name="plan"></td>
    <td><label for="picture_loc_ceiling">Picture of location and ceilling if with cover</label><input type="file" id="plan" name="plan"></td>
    </tr>
    <tr>
        <td>Submitted by:</td>
        <td><input type="text" name="submittedby" class="input" placeholder=""required></td>
        <td><label for="Date">Date:</label>
            <input type="date" id="birthday" name="birthday"></td>
    </tr>
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

label {
    font-size: 14px;
    font-weight: bold;
}

</style>