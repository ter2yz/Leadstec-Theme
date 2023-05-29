function setMarginRightBasedOnLeftOffset() {
    // Get a reference to the target <div> element
    const targetDiv = document.getElementById("solutions-wrap");

    // Get the updated leftOffset value
    const leftOffset = document
        .getElementById("solutions-container")
        .getBoundingClientRect().left;

    // Set the margin-right value based on the leftOffset
    targetDiv.style.marginRight = leftOffset + "px";
}

// Call the function initially to set the margin-right
setMarginRightBasedOnLeftOffset();

// Update the margin-right dynamically when the source div's width changes
window.addEventListener("resize", setMarginRightBasedOnLeftOffset);

// Drag to scroll functionality with smooth stop
let isDragging = false;
let startX;
let startScrollLeft;
let requestId;
let dragStartTime;
const sliderItems = document.querySelectorAll("#solutions-wrap a");

function handleDragStart(event) {
    isDragging = true;
    startX = event.clientX || event.touches[0].clientX;
    startScrollLeft = document.getElementById(
        "solutions-fw-container"
    ).scrollLeft;
    dragStartTime = Date.now();
    document.body.style.cursor = "grabbing";
    cancelAnimationFrame(requestId);
}

function handleDrag(event) {
    if (!isDragging) return;
    sliderItems.forEach((item) => {
        item.style.pointerEvents = "none";
    });
    event.preventDefault();
    const x = event.clientX || event.touches[0].clientX;
    const dragDistance = x - startX;
    document.getElementById("solutions-fw-container").scrollLeft =
        startScrollLeft - dragDistance;
}

function handleDragEnd(event) {
    if (!isDragging) return;
    sliderItems.forEach((item) => {
        item.style.pointerEvents = "auto";
    });
    isDragging = false;
    document.body.style.cursor = "default";
    const dragEndTime = Date.now();
    const dragDuration = dragEndTime - dragStartTime;
    if (dragDuration < 100) {
        animateScroll();
    }
}

function animateScroll() {
    const sourceDiv = document.getElementById("solutions-fw-container");
    const currentScrollLeft = sourceDiv.scrollLeft;
    const distance = startScrollLeft - currentScrollLeft;
    const duration = 500; // Adjust the duration to control the speed of the stop (in milliseconds)

    let startTimestamp = null;

    function step(timestamp) {
        if (!startTimestamp) startTimestamp = timestamp;
        const elapsed = timestamp - startTimestamp;
        const progress = Math.min(elapsed / duration, 1);
        const easeProgress = easeOutCubic(progress);
        sourceDiv.scrollLeft = startScrollLeft - easeProgress * distance;

        if (progress < 1) {
            requestId = requestAnimationFrame(step);
        }
    }

    requestId = requestAnimationFrame(step);
}

document
    .getElementById("solutions-fw-container")
    .addEventListener("mousedown", handleDragStart);
document.addEventListener("mousemove", handleDrag);
document.addEventListener("mouseup", handleDragEnd);

document
    .getElementById("solutions-fw-container")
    .addEventListener("touchstart", handleDragStart);
document.addEventListener("touchmove", handleDrag);
document.addEventListener("touchend", handleDragEnd);

// Easing function
function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}
