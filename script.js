// Dropdown JS Start [ kurut0 ]
function dropDownFunc() {
    var menu = document.getElementById("dropdown");
    var dropBod = menu.querySelector(".navDropdown");
    var dropOpt = menu.querySelectorAll(".navOptions");
    var dropImg = menu.querySelectorAll(".navOptions img")
  
    if(dropBod.style.maxHeight === "0px" || dropBod.style.maxHeight === "") {
        dropBod.style.maxHeight = "1000px";
        dropOpt.forEach(function(option) {
            option.style.maxHeight = "1000px";
        });
        dropImg.forEach(function(image) {
            image.style.maxHeight = "50px";
        });
    }
    else {
        dropImg.forEach(function(image) {
            image.style.maxHeight = "0";
        });
        setTimeout(function() {
            dropBod.style.maxHeight = "0";
            dropOpt.forEach(function(option) {
                option.style.maxHeight = "0";
            });
        }, 150);
    }
}
// Dropdown JS End [ kurut0 ]