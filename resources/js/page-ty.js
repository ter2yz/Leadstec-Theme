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
        navMobileMenuWrapper.classList.toggle("max-h-screen");
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
    let header = document.getElementById("header");
    let bottomImg = document.getElementById("tyBottomImg");
    let mainWrapper = document.getElementById("tyMainWrapper");
    let headerHeight = header.clientHeight;
    let bottomHeight = bottomImg.clientHeight;
    let totalHeight = headerHeight + bottomHeight;
    mainWrapper.style.height = "calc(100vh - " + totalHeight + "px)";
    document.documentElement.style.scrollPaddingTop = headerHeight + "px";
});
