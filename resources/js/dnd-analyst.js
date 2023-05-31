function setMarginRightBasedOnLeftOffset() {
    // Get a reference to the target <div> element
    const targetDiv = document.getElementById("la-wrap");

    // Get the updated leftOffset value
    const leftOffset = document
        .getElementById("la-container")
        .getBoundingClientRect().left;

    // Set the margin-right value based on the leftOffset
    targetDiv.style.marginRight = leftOffset + "px";
}

// Call the function initially to set the margin-right
setMarginRightBasedOnLeftOffset();

// Update the margin-right dynamically when the source div's width changes
window.addEventListener("resize", setMarginRightBasedOnLeftOffset);

// Drag to scroll functionality with smooth stop
let laIsDragging = false;
let laStartX;
let laStartScrollLeft;
let laRequestId;
let laDragStartTime;
const laSliderItems = document.querySelectorAll("#la-wrap a");

function handleDragStart(event) {
    laIsDragging = true;
    laStartX = event.clientX || event.touches[0].clientX;
    laStartScrollLeft = document.getElementById("la-fw-container").scrollLeft;
    laDragStartTime = Date.now();
    document.body.style.cursor = "grabbing";
    cancelAnimationFrame(laRequestId);
}

function handleDrag(event) {
    if (!laIsDragging) return;
    laSliderItems.forEach((item) => {
        item.style.pointerEvents = "none";
    });
    event.preventDefault();
    const x = event.clientX || event.touches[0].clientX;
    const dragDistance = x - laStartX;
    document.getElementById("la-fw-container").scrollLeft =
        laStartScrollLeft - dragDistance;
}

function handleDragEnd(event) {
    if (!laIsDragging) return;
    laSliderItems.forEach((item) => {
        item.style.pointerEvents = "auto";
    });
    laIsDragging = false;
    document.body.style.cursor = "default";
    const dragEndTime = Date.now();
    const dragDuration = dragEndTime - laDragStartTime;
    if (dragDuration < 100) {
        animateScroll();
    }
}

function animateScroll() {
    const sourceDiv = document.getElementById("la-fw-container");
    const currentScrollLeft = sourceDiv.scrollLeft;
    const distance = laStartScrollLeft - currentScrollLeft;
    const duration = 500; // Adjust the duration to control the speed of the stop (in milliseconds)

    let startTimestamp = null;

    function step(timestamp) {
        if (!startTimestamp) startTimestamp = timestamp;
        const elapsed = timestamp - startTimestamp;
        const progress = Math.min(elapsed / duration, 1);
        const easeProgress = easeOutCubic(progress);
        sourceDiv.scrollLeft = laStartScrollLeft - easeProgress * distance;

        if (progress < 1) {
            laRequestId = requestAnimationFrame(step);
        }
    }

    laRequestId = requestAnimationFrame(step);
}

document
    .getElementById("la-fw-container")
    .addEventListener("mousedown", handleDragStart);
document.addEventListener("mousemove", handleDrag);
document.addEventListener("mouseup", handleDragEnd);

document
    .getElementById("la-fw-container")
    .addEventListener("touchstart", handleDragStart);
document.addEventListener("touchmove", handleDrag);
document.addEventListener("touchend", handleDragEnd);

// Easing function
function easeOutCubic(t) {
    return 1 - Math.pow(1 - t, 3);
}
