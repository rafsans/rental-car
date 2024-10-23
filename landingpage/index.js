const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const body = document.querySelector("body");
const closeHamburger = document.querySelector(".close");
const rentButton = document.querySelector(".rent-btn");
hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("nav-active");
  if (navLinks.classList.contains("nav-active")) {
    body.style.overflow = "hidden";
  }
});

closeHamburger.addEventListener("click", () => {
  navLinks.classList.remove("nav-active");
});

rentButton.addEventListener("click", () => {
  const toast = document.querySelector(".toast");
  toast.style.display = "block";
  setTimeout(() => {
    toast.style.display = "none";
  }, 1000);
});

