// Dropdown JS Start [ kurut0 ]
function dropDownFunc() {
  var headCont = document.querySelector(".headerContent");
  var dropBod = document.querySelector(".navDropdown");
  
  if(dropBod.style.top === "10px" || dropBod.style.top === "") {
    headCont.style.boxShadow = "1px 1px 10px #0F0F0F";
    dropBod.style.top = "70px";
  }
  else {
    headCont.style.boxShadow = "none";
    dropBod.style.top = "10px";
  }
}
// Dropdown JS End [ kurut0 ]

// Appointment Next Button [ Mobile View ]

var inputDone = false;

function appointNextBtn() {
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var date = document.getElementById("date").value;

  if(email.trim() === "") {
    alert("Please enter a valid Email Address.")
    return;
  }

  if(!/^[0-9]{4}-[0-9]{3}-[0-9]{4}$/.test(phone)) {
    alert("Please enter a valid Phone Number");
    return;
  }

  if(date.trim() === "") {
    alert("Please enter a valid Date");
    return;
  }

  inputDone = true;
  updateAppointStyle();
}

function updateAppointStyle() {
  var clientInput = document.querySelector(".clientInputs");
  var slots = document.querySelector(".availableSlots");
  var nextBtn = document.getElementById("nextBtn");
  var submitBtn = document.getElementById("submitBtn");

  if(!inputDone) {
    return;
  }

  if(window.matchMedia("(max-width: 768px").matches) {
    if(clientInput.style.display === "flex" || clientInput.style.display === "") {
      clientInput.style.display = "none";
    }
    slots.style.display = "table";
    submitBtn.style.display = "block";
  }
  else {
    clientInput.style.display = "flex";
  }
}

window.addEventListener("resize", updateAppointStyle);

function shuffleArray(array) {
  for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
  }
}

function shuffleImages() {
  const imageElements = document.querySelectorAll('.container .box .rows img');
  const imageSources = Array.from(imageElements).map(img => img.src);

  shuffleArray(imageSources);

  imageElements.forEach((img, index) => {
      img.src = imageSources[index];
  });
}

window.addEventListener('load', shuffleImages);