// Dropdown JS Start [ kurut0 ]
function dropDownFunc() {
  var headCont = document.querySelector(".headerContent");
  var dropBod = document.querySelector(".navDropdown");
  
  if(dropBod.style.top === "10px") {
    headCont.style.boxShadow = "1px 1px 10px #0F0F0F";
    dropBod.style.top = "70px";
  }
  else {
    headCont.style.boxShadow = "none";
    dropBod.style.top = "10px";
  }
}
// Dropdown JS End [ kurut0 ]