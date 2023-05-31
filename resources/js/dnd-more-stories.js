function setMarginRightBasedOnLeftOffset() {
    // Get a reference to the target <div> element
    const targetDiv = document.getElementById("ms-wrap");

    // Get the updated leftOffset value
    const leftOffset = document
        .getElementById("ms-container")
        .getBoundingClientRect().left;

    // Set the margin-right value based on the leftOffset
    targetDiv.style.marginRight = leftOffset + "px";
}

// Call the function initially to set the margin-right
setMarginRightBasedOnLeftOffset();

// Update the margin-right dynamically when the source div's width changes
window.addEventListener("resize", setMarginRightBasedOnLeftOffset);

// Drag to scroll functionality with smooth stop
let msIsDragging = false;
let msStartX;
let msStartScrollLeft;
let msRequestId;
let msDragStartTime;
const msSliderItems = document.querySelectorAll("#ms-wrap a");

function handleDragStart(event) {
    msIsDragging = true;
    msStartX = event.clientX || event.touches[0].clientX;
    msStartScrollLeft = document.getElementById("ms-fw-container").scrollLeft;
    msDragStartTime = Date.now();
    document.body.style.cursor = "grabbing";
    cancelAnimationFrame(msRequestId);
}

function handleDrag(event) {
    if (!msIsDragging) return;
    msSliderItems.forEach((item) => {
        item.style.pointerEvents = "none";
    });
    event.preventDefault();
    const x = event.clientX || event.touches[0].clientX;
    const dragDistance = x - msStartX;
    document.getElementById("ms-fw-container").scrollLeft =
        msStartScrollLeft - dragDistance;
}

function handleDragEnd(event) {
    if (!msIsDragging) return;
    msSliderItems.forEach((item) => {
        item.style.pointerEvents = "auto";
    });
    msIsDragging = false;
    document.body.style.cursor = "default";
    const dragEndTime = Date.now();
    const dragDuration = dragEndTime - msDragStartTime;
    if (dragDuration < 100) {
        animateScroll();
    }
}

function animateScroll() {
    const sourceDiv = document.getElementById("ms-fw-container");
    const currentScrollLeft = sourceDiv.scrollLeft;
    const distance = msStartScrollLeft - currentScrollLeft;
    const duration = 500; // Adjust the duration to control the speed of the stop (in milliseconds)

    let startTimestamp = null;

    function step(timestamp) {
        if (!startTimestamp) startTimestamp = timestamp;
        const elapsed = timestamp - startTimestamp;
        const progress = Math.min(elapsed / duration, 1);
        const easeProgress = easeOutCubic(progress);
        sourceDiv.scrollLeft = msStartScrollLeft - easeProgress * distance;

        if (progress < 1) {
            msRequestId = requestAnimationFrame(step);
        }
    }

    msRequestId = requestAnimationFrame(step);
}

document
    .getElementById("ms-fw-container")
    .addEventListener("mousedown", handleDragStart);
document.addEventListener("mousemove", handleDrag);
document.addEventListener("mouseup", handleDragEnd);

document
    .getElementById("ms-fw-container")
    .addEventListener("touchstart", handleDragStart);
document.addEventListener("touchmove", handleDrag);
document.addEventListener("touchend", handleDragEnd);

// Easing function
function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}
