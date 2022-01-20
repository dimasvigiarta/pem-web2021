//Validation Code For Inputs

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById('email_error')
var password_error = document.getElementById('pass_error')

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validated(){
    if(email.value.length <9){
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if(password.value.length <6){
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }
}
function pass_Verify(){
    if(password.value.lenght >=5){
        password.style.border = "1px solid silver";
        pass_error.style.display = "none";
        return true;
    }
}