let formLogin = document.getElementById("form-login");
let emailLogin = document.getElementById("email-login");
let passwordLogin = document.getElementById("password-login");
let localEmail = localStorage.getItem("email");
let localPassword = localStorage.getItem("password");
let wrapperModal = document.querySelector(".wrapper-modal");
let modal = document.querySelector(".modal");

formLogin.addEventListener("submit", (event) => {
  event.preventDefault();
  if (
    emailLogin.value == localEmail &&
    passwordLogin.value == localPassword
  ) {
    console.log("login success");
    wrapperModal.style.display = "block";
    setTimeout(() => {
      window.location.href = "dashboard/dashboard.html";
    }, 1000);
  }
});