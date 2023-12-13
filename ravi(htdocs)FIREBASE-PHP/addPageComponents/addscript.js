const firebaseConfig = {
  apiKey: "AIzaSyCEzVplNoLJTbgb6Q9UYDweIN6rFCYIBOs",
  authDomain: "ravi-forms.firebaseapp.com",
  databaseURL: "https://ravi-forms-default-rtdb.firebaseio.com",
  projectId: "ravi-forms",
  storageBucket: "ravi-forms.appspot.com",
  messagingSenderId: "433936347858",
  appId: "1:433936347858:web:74d21861294652808cb30b"
};

document.addEventListener("DOMContentLoaded", function () {
  function professionRadioInput(groupName) {
    var radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}"]`);
    var othersText = document.getElementById(`${groupName}_field`);

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
    var radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}"]`);
    var othersText = document.getElementById(`${groupName}_field`);

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
    var radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}Type"]`);
    var othersText = document.getElementById(`${groupName}_type`);

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
    var radioButtons = document.querySelectorAll(`input[type="radio"][name="${groupName}"]`);
    var othersText = document.getElementById(`${groupName}_field`);

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
            case 'r3':
              othersText.value = '900mm';
              break;
            case 'r4':
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
    var otherModelCheckbox = document.getElementById('otherModel');
    var modelDimensionsTable = document.getElementById('modelDimensions');

    var modelBrand = document.getElementById('model_brand');
    var modelWidth = document.getElementById('width_model_brand');
    var modelDepth = document.getElementById('depth_model_brand');
    var modelHeight = document.getElementById('height_model_brand');

    if (modelBrand.value.trim() !== "") {
      otherModelCheckbox.checked = true;
      modelDimensionsTable.style.display = 'table';
      modelBrand.setAttribute('required', '');
      modelWidth.setAttribute('required', '');
      modelDepth.setAttribute('required', '');
      modelHeight.setAttribute('required', '');
    }

    otherModelCheckbox.addEventListener('change', function () {
      if (!otherModelCheckbox.checked) {
        modelDimensionsTable.style.display = 'none';
        modelBrand.removeAttribute('required');
        modelWidth.removeAttribute('required');
        modelDepth.removeAttribute('required');
        modelHeight.removeAttribute('required');
        modelBrand.value = '';
        modelWidth.value = '';
        modelDepth.value = '';
        modelHeight.value = '';
      } else {
        modelDimensionsTable.style.display = 'table';
        modelBrand.setAttribute('required', '');
        modelWidth.setAttribute('required', '');
        modelDepth.setAttribute('required', '');
        modelHeight.setAttribute('required', '');
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

  otherModel();

});