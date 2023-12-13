document.addEventListener("DOMContentLoaded", function () {

  function professionRadioUpdate(groupName) {
    var othersField = document.getElementById(`${groupName}_field`);

    var projManagerRadio = document.getElementById(`${groupName}_projmanager`);
    var timekeeperRadio = document.getElementById(`${groupName}_timekeeper`);
    var projEngineerRadio = document.getElementById(`${groupName}_projengineer`);
    var foremanRadio = document.getElementById(`${groupName}_foreman`);
    var architectRadio = document.getElementById(`${groupName}_architect`);
    var intDesignerRadio = document.getElementById(`${groupName}_int_designer`);
    var othersRadio = document.getElementById(`${groupName}_others`);


    var othersFieldValue = othersField.value.trim();

    switch (othersFieldValue) {
      case 'Project Manager':
        projManagerRadio.checked = true;
        break;
      case 'Timekeeper':
        timekeeperRadio.checked = true;
        break;
      case 'Project Engineer':
        projEngineerRadio.checked = true;
        break;
      case 'Foreman':
        foremanRadio.checked = true;
        break;
      case 'Architect':
        architectRadio.checked = true;
        break;
      case 'Interior Designer':
        intDesignerRadio.checked = true;
        break;
      default:
        othersRadio.checked = true;
        othersField.style.display = 'block';
        break;
    }
  }

  function kitchenRadioUpdate(groupName) {
    var othersField = document.getElementById(`${groupName}_field`);

    var auxRadio = document.getElementById(`${groupName}_aux`);
    var vanityRadio = document.getElementById(`${groupName}_vanity`);
    var officeRadio = document.getElementById(`${groupName}_office`);
    var closetRadio = document.getElementById(`${groupName}_closet`);
    var entertainmentRadio = document.getElementById(`${groupName}_entertainment`);
    var othersRadio = document.getElementById(`${groupName}_others`);


    var othersFieldValue = othersField.value.trim();

    switch (othersFieldValue) {
      case 'Auxiliary Kitchen':
        auxRadio.checked = true;
        break;
      case 'Vanity':
        vanityRadio.checked = true;
        break;
      case 'Office':
        officeRadio.checked = true;
        break;
      case 'Closet':
        closetRadio.checked = true;
        break;
      case 'Entertainment':
        entertainmentRadio.checked = true;
        break;
      default:
        othersRadio.checked = true;
        othersField.style.display = 'block';
        break;
    }
  }

  function typeRadioUpdate(groupName) {
    var othersField = document.getElementById(`${groupName}_type`);

    var auxRadio = document.getElementById(`${groupName}_built_in`);
    var vanityRadio = document.getElementById(`${groupName}_free_standing`);


    var othersFieldValue = othersField.value.trim();

    switch (othersFieldValue) {
      case 'Built In':
        auxRadio.checked = true;
        break;
      case 'Free Standing':
        vanityRadio.checked = true;
        break;
    }
  }

  function rangehoodRadioUpdate(groupName) {
    var othersField = document.getElementById(`${groupName}_field`);

    var ductRadio = document.getElementById(`${groupName}_duct_type`);
    var filterRadio = document.getElementById(`${groupName}_filter_type`);
    var nineRadio = document.getElementById(`${groupName}_nine_9m`);
    var sixRadio = document.getElementById(`${groupName}_six_6m`);


    var othersFieldValue = othersField.value.trim();

    switch (othersFieldValue) {
      case 'Duct Type':
        ductRadio.checked = true;
        break;
      case 'Filter Type':
        filterRadio.checked = true;
        break;
      case '900mm':
        nineRadio.checked = true;
        break;
      case '600mm':
        sixRadio.checked = true;
        break;
    }
  }

  function setRemarks() {
    var remarksHolder = document.getElementById("remarksHolder");
    var remarks = document.getElementById("remarks");

    remarks.value = remarksHolder.value
  }

  professionRadioUpdate('initial');
  professionRadioUpdate('primary');
  professionRadioUpdate('owner');

  kitchenRadioUpdate('kitchen');

  typeRadioUpdate('oven');
  typeRadioUpdate('range');

  rangehoodRadioUpdate('rangeHoodType');

  setRemarks();

});