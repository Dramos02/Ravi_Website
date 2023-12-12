document.addEventListener("DOMContentLoaded", function () {

  function professionRadioInput(groupName) {
    const radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}"]`);
    const othersText = document.getElementById(`${groupName}_field`);

    if (!othersText) {
      console.error(`Textarea with ID '${groupName}_field' not found.`);
      return;
    }

    radioButtons.forEach(function (radio) {
      radio.addEventListener('change', function () {

        if (radio.checked) {
          switch (radio.value) {
            // Cases for Profession
            case 'p1':
              othersText.value = 'Project Manager';
              othersText.style.display = 'none';
              break;
            case 'p2':
              othersText.value = 'Timekeeper';
              othersText.style.display = 'none';
              break;
            case 'p3':
              othersText.value = 'Project Engineer';
              othersText.style.display = 'none';
              break;
            case 'p4':
              othersText.value = 'Foreman';
              othersText.style.display = 'none';
              break;
            case 'p5':
              othersText.value = 'Architect';
              othersText.style.display = 'none';
              break;
            case 'p6':
              othersText.value = 'Interior Designer';
              othersText.style.display = 'none';
              break;
            case 'p7':
              othersText.value = '';
              othersText.style.display = 'block';
              break;
          }
          console.log(`${groupName}: ` + othersText.value)
        }

        radioButtons.forEach(function (rb) {
          if (rb !== radio) {
            rb.checked = false;
          }
        });
      });
    });
  }

  function kitchenRadioInput(groupName) {
    const radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}"]`);
    const othersText = document.getElementById(`${groupName}_field`);

    if (!othersText) {
      console.error(`Textarea with ID '${groupName}_field' not found.`);
      return;
    }

    radioButtons.forEach(function (radio) {
      radio.addEventListener('change', function () {

        if (radio.checked) {
          switch (radio.value) {
            // Cases for Main Kitchen Type
            case 'k1':
              othersText.value = 'Auxiliary Kitchen';
              othersText.style.display = 'none';
              break;
            case 'k2':
              othersText.value = 'Vanity';
              othersText.style.display = 'none';
              break;
            case 'k3':
              othersText.value = 'Office';
              othersText.style.display = 'none';
              break;
            case 'k4':
              othersText.value = 'Closet';
              othersText.style.display = 'none';
              break;
            case 'k5':
              othersText.value = 'Entertainment';
              othersText.style.display = 'none';
              break;
            case 'k6':
              othersText.value = '';
              othersText.style.display = 'block';
              break;
          }
          console.log(`${groupName}: ` + othersText.value)
        }

        radioButtons.forEach(function (rb) {
          if (rb !== radio) {
            rb.checked = false;
          }
        });
      });
    });
  }

  function typeRadioInput(groupName) {
    const radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}Type"]`);
    const othersText = document.getElementById(`${groupName}_type`);

    if (!othersText) {
      console.error(`Textarea with ID '${groupName}_field' not found.`);
      return;
    }

    radioButtons.forEach(function (radio) {
      radio.addEventListener('change', function () {

        if (radio.checked) {
          switch (radio.value) {
            // Cases for Main Kitchen Type
            case 't1':
              othersText.value = 'Built In';
              break;
            case 't2':
              othersText.value = 'Free Standing';
              break;
          }
          console.log(`${groupName}: ` + othersText.value)
        }

        radioButtons.forEach(function (rb) {
          if (rb !== radio) {
            rb.checked = false;
          }
        });
      });
    });
  }

  function rangeHoodType(groupName) {
    const radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}"]`);
    const othersText = document.getElementById(`${groupName}_field`);

    if (!othersText) {
      console.error(`Textarea with ID '${groupName}_field' not found.`);
      return;
    }

    radioButtons.forEach(function (radio) {
      radio.addEventListener('change', function () {

        if (radio.checked) {
          switch (radio.value) {
            // Cases for Main Kitchen Type
            case 'r1':
              othersText.value = 'Duct Type';
              break;
            case 'r2':
              othersText.value = 'Filter Type';
              break;
            case 'm1':
              othersText.value = '900mm';
              break;
            case 'm2':
              othersText.value = '600mm';
              break;
          }
          console.log(`${groupName}: ` + othersText.value)
        }

        radioButtons.forEach(function (rb) {
          if (rb !== radio) {
            rb.checked = false;
          }
        });
      });
    });
  }

  function otherModel() {
    const otherModelCheckbox = document.getElementById('otherModel');
    const modelDimensionsTable = document.getElementById('modelDimensions');

    otherModelCheckbox.addEventListener('change', function () {
      if (!otherModelCheckbox.checked) {
        modelDimensionsTable.style.display = 'none';
      } else {
        modelDimensionsTable.style.display = 'table'; // Use 'table' for table elements
      }
    });
  }




  // Call the function for the radio button group at the top
  professionRadioInput('initial');
  professionRadioInput('owner');
  professionRadioInput('primary');

  kitchenRadioInput('kitchen');

  typeRadioInput('oven');

  typeRadioInput('range');
  rangeHoodType('rangeHoodType');
  rangeHoodType('rangeHoodMeasure');

  otherModel();

});