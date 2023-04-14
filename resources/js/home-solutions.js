const mask = document.querySelector("#solution-mask");
const circle = document.querySelector("#solution-circle");
const circleActive = document.querySelector("#solution-circle-active");
const brandLabels = document.querySelectorAll(".solution-brand-label");

mask.addEventListener("mouseenter", () => {
    circle.classList.remove("opacity-100");
    circle.classList.add("opacity-0");
    circleActive.classList.remove("opacity-0");
    circleActive.classList.add("opacity-100");
    brandLabels.forEach((el) => {
        el.classList.remove("opacity-50");
        el.classList.add("opacity-100");
    });
});
mask.addEventListener("mouseleave", () => {
    circle.classList.add("opacity-100");
    circle.classList.remove("opacity-0");
    circleActive.classList.add("opacity-0");
    circleActive.classList.remove("opacity-100");
    brandLabels.forEach((el) => {
        el.classList.remove("opacity-100");
        el.classList.add("opacity-50");
    });
});
