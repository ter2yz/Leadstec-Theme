function setMarginRightBasedOnLeftOffset() {
    const parentDivs = document.querySelectorAll(".ms-container");
    parentDivs.forEach((parentDiv) => {
        // Get a reference to the target <div> element
        const targetDiv = parentDiv.querySelector(".ms-wrap");
        // Get the updated leftOffset value
        const leftOffset = parentDiv.getBoundingClientRect().left;
        // Set the margin-right value based on the leftOffset
        targetDiv.style.marginRight = leftOffset + "px";
    });
}
// Call the function initially to set the margin-right
setMarginRightBasedOnLeftOffset();
// Update the margin-right dynamically when the source div's width changes
window.addEventListener("resize", setMarginRightBasedOnLeftOffset);

function setupDragToScroll(container) {
    let msIsDragging = false;
    let msStartX;
    let msStartScrollLeft;
    let msRequestId;
    let msDragStartTime;
    const msSliderItems = container.querySelectorAll(`.ms-wrap a`);

    function handleDragStart(event) {
        msIsDragging = true;
        msStartX = event.clientX || event.touches[0].clientX;
        msStartScrollLeft = container.scrollLeft;
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
        container.scrollLeft = msStartScrollLeft - dragDistance;
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
            animateScroll(container, msStartScrollLeft);
        }
    }

    function animateScroll(sourceElement, startScrollLeft) {
        const currentScrollLeft = sourceElement.scrollLeft;
        const distance = startScrollLeft - currentScrollLeft;
        const duration = 500; // Adjust the duration to control the speed of the stop (in milliseconds)

        let startTimestamp = null;

        function step(timestamp) {
            if (!startTimestamp) startTimestamp = timestamp;
            const elapsed = timestamp - startTimestamp;
            const progress = Math.min(elapsed / duration, 1);
            const easeProgress = easeOutCubic(progress);
            sourceElement.scrollLeft =
                startScrollLeft - easeProgress * distance;

            if (progress < 1) {
                msRequestId = requestAnimationFrame(step);
            }
        }

        msRequestId = requestAnimationFrame(step);
    }

    container.addEventListener("mousedown", handleDragStart);
    container.addEventListener("mousemove", handleDrag);
    container.addEventListener("mouseup", handleDragEnd);

    container.addEventListener("touchstart", handleDragStart);
    container.addEventListener("touchmove", handleDrag);
    container.addEventListener("touchend", handleDragEnd);

    // Easing function
    function easeOutCubic(t) {
        return 1 - Math.pow(1 - t, 3);
    }
}

// Usage Example:

const slideContainers = document.querySelectorAll(".ms-fw-container");
slideContainers.forEach((currentContainer) => {
    setupDragToScroll(currentContainer);
});
