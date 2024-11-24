let email = document.getElementById("email");
let password = document.getElementById("password");
let password_confirmation = document.getElementById("password-confirmation");
let error = document.querySelectorAll(".error");
let form = document.getElementById("form-register");

form.addEventListener("submit", (event) => {
    // event.preventDefault();
    validateRegistration();
    check(validateRegistration());
});

error.forEach(error => {
    error.style.display = "none"; 
});

function validateRegistration() {
    if (email.value == "") {
        error[0].style.display = "block";
        error[0].innerHTML = "Email cannot be empty";
    }
    if (password.value == "") {
        error[1].style.display = "block";
        error[1].innerHTML = "Password cannot be empty";
    }
    if (password_confirmation.value == "") {
        error[2].style.display = "block";
        error[2].innerHTML = "Password confirmation cannot be empty";
    }

    if(password.value != password_confirmation.value || password_confirmation.value == "" && password.value == ""){
        error[2].style.display = "block";
        error[2].innerHTML = "Password does not match";
    }

    if(password.value == password_confirmation.value && password_confirmation.value != "" && password.value != ""){
        return true;
    }
}

form.addEventListener("change", () => {
    error.forEach(error => {
        error.style.display = "none";
    });
});

function check(param){
    if(param == true){
        localStorage.setItem("email", email.value);
        localStorage.setItem("password", password.value);
        // window.location.href = "login.html";
    }
}