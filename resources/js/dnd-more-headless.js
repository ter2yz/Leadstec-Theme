function setMarginRightBasedOnLeftOffset() {
    // Get a reference to the target <div> element
    const targetDiv = document.getElementById("mah-wrap");

    // Get the updated leftOffset value
    const leftOffset = document
        .getElementById("mah-container")
        .getBoundingClientRect().left;

    // Set the margin-right value based on the leftOffset
    targetDiv.style.marginRight = leftOffset + "px";
}

// Call the function initially to set the margin-right
setMarginRightBasedOnLeftOffset();

// Update the margin-right dynamically when the source div's width changes
window.addEventListener("resize", setMarginRightBasedOnLeftOffset);

// Drag to scroll functionality with smooth stop
let mahIsDragging = false;
let mahStartX;
let mahStartScrollLeft;
let mahRequestId;
let mahDragStartTime;
const mahSliderItems = document.querySelectorAll("#mah-wrap a");

function handleDragStart(event) {
    mahIsDragging = true;
    mahStartX = event.clientX || event.touches[0].clientX;
    mahStartScrollLeft = document.getElementById("mah-fw-container").scrollLeft;
    mahDragStartTime = Date.now();
    document.body.style.cursor = "grabbing";
    cancelAnimationFrame(mahRequestId);
}

function handleDrag(event) {
    if (!mahIsDragging) return;
    mahSliderItems.forEach((item) => {
        item.style.pointerEvents = "none";
    });
    event.preventDefault();
    const x = event.clientX || event.touches[0].clientX;
    const dragDistance = x - mahStartX;
    document.getElementById("mah-fw-container").scrollLeft =
        mahStartScrollLeft - dragDistance;
}

function handleDragEnd(event) {
    if (!mahIsDragging) return;
    mahSliderItems.forEach((item) => {
        item.style.pointerEvents = "auto";
    });
    mahIsDragging = false;
    document.body.style.cursor = "default";
    const dragEndTime = Date.now();
    const dragDuration = dragEndTime - mahDragStartTime;
    if (dragDuration < 100) {
        animateScroll();
    }
}

function animateScroll() {
    const sourceDiv = document.getElementById("mah-fw-container");
    const currentScrollLeft = sourceDiv.scrollLeft;
    const distance = mahStartScrollLeft - currentScrollLeft;
    const duration = 500; // Adjust the duration to control the speed of the stop (in milliseconds)

    let startTimestamp = null;

    function step(timestamp) {
        if (!startTimestamp) startTimestamp = timestamp;
        const elapsed = timestamp - startTimestamp;
        const progress = Math.min(elapsed / duration, 1);
        const easeProgress = easeOutCubic(progress);
        sourceDiv.scrollLeft = mahStartScrollLeft - easeProgress * distance;

        if (progress < 1) {
            mahRequestId = requestAnimationFrame(step);
        }
    }

    mahRequestId = requestAnimationFrame(step);
}

document
    .getElementById("mah-fw-container")
    .addEventListener("mousedown", handleDragStart);
document.addEventListener("mousemove", handleDrag);
document.addEventListener("mouseup", handleDragEnd);

document
    .getElementById("mah-fw-container")
    .addEventListener("touchstart", handleDragStart);
document.addEventListener("touchmove", handleDrag);
document.addEventListener("touchend", handleDragEnd);

// Easing function
function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}
