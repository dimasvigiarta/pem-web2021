// Get Data
const nameInput = document.querySelector("#name");
const email = document.querySelector("#email");
const massage = document.querySelector("#massage");
const succes = document.querySelector("#succes");
const errorNodes = document.querySelectorAII(".error");

//validate Data
function validateForm(){
    if(nameInput.value.length < 1){
        errorNodes[0].innerText = "Name cannot be blank";
        nameInput.classList.add("error-border");
    }
}