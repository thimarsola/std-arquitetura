// menu toggle
let show = true;

const menuSection = document.querySelector(".header__navbar__section");
const menuToggle = menuSection.querySelector(".header__navbar__section__toggle");
const menuItem = document.querySelectorAll(".header__navbar__section__container__nav ul li a");

menuToggle.addEventListener("click", () => {

    document.body.style.overflow = show ? "hidden" : "initial";

    menuSection.classList.toggle("header__navbar--open", show);
    show = !show;
});

menuItem.forEach((item) => {
    item.addEventListener('click', () => {
        menuSection.classList.toggle('header__navbar--open');
        document.body.style.overflow = "initial";
    });
});

// sticky
window.addEventListener("scroll", function () {
    let header = document.querySelector(".header");

    header.classList.toggle("header--active", window.scrollY > 0);
});