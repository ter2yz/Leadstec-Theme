const navBtn = document.querySelector("#nav-menu-btn");
const navMobileMenuWrapper = document.querySelector("#nav-menu-mobile");
const navMobileMenuItems = document.querySelectorAll(
    "#nav-menu-mobile .menu-item"
);

if (navBtn) {
    navBtn.addEventListener("click", () => {
        navBtn.classList.toggle("active");
    });
}
if (navBtn && navMobileMenuWrapper) {
    navBtn.addEventListener("click", () => {
        navMobileMenuWrapper.classList.toggle("opacity-0");
        navMobileMenuWrapper.classList.toggle("max-h-0");
        navMobileMenuWrapper.classList.toggle("opacity-100");
        navMobileMenuWrapper.classList.toggle("max-h-[80vh]");
    });
}
if (navMobileMenuItems.length) {
    navMobileMenuItems.forEach((menuItem) => {
        menuItem.addEventListener("click", () => {
            menuItem.classList.toggle("active");
        });
    });
}

window.addEventListener("DOMContentLoaded", function () {
    console.log("dom loaded");
    var header = document.getElementById("header");
    var headerHeight = header.clientHeight;
    document.documentElement.style.scrollPaddingTop = headerHeight + "px";
});
