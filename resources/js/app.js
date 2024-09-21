import "./bootstrap";

import.meta.glob(["../images/**"]);

const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenu = document.getElementById("close-menu");

mobileMenuToggle.addEventListener("click", () => {
    mobileMenu.classList.remove("translate-x-full");
});

closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("translate-x-full");
});
