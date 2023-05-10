const storiesSliderContainer = document.querySelector(".slider-stories");
const slides = document.querySelectorAll(".slider-single-image");
if (storiesSliderContainer) {
    var sliderStories = tns({
        container: ".slider-stories",
        prevButton: "#sliderStoriesPrev",
        nextButton: "#sliderStoriesNext",
        axis: "vertical",
        // fixedWidth: 400,
        speed: 400,
        items: 3,
        nav: false,
        startIndex: 1,
    });

    const storyMainImagesWrappers = document.querySelectorAll(
        ".story-main-image-wrapper"
    );
    const storySliderImages = document.querySelectorAll(
        ".slider-stories .slider-single-image"
    );

    sliderStories.events.on("indexChanged", () => {
        const info = sliderStories.getInfo();
        storyMainImagesWrappers.forEach((wrapper) => {
            if (wrapper.dataset.index == info.displayIndex % info.slideCount) {
                wrapper.classList.remove("opacity-0");
                wrapper.classList.add("opacity-100");
            } else {
                wrapper.classList.remove("opacity-100");
                wrapper.classList.add("opacity-0");
            }
        });
    });
}

const handleImageClick = (el) => {
    const imageIndex = el.dataset.index;
    const info = sliderStories.getInfo();
    sliderStories.goTo(
        (((imageIndex - 1) % info.slideCount) + info.slideCount) %
            info.slideCount
    );
};

const handleReadExpand = (el) => {
    const descriptionWrap = el.closest(".description-wrap");
    const mainText = el.previousElementSibling;
    descriptionWrap.classList.toggle("max-h-[50%]");
    descriptionWrap.classList.toggle("max-h-full");
    descriptionWrap.classList.toggle("w-1/2");
    descriptionWrap.classList.toggle("w-2/3");
    mainText.classList.toggle("truncate");
    mainText.classList.toggle("max-h-6");
    mainText.classList.toggle("max-h-screen");
};

const splideClient = new Splide("#home-client .splide", {
    type: "loop",
    drag: "free",
    focus: "center",
    arrows: false,
    pagination: false,
    perPage: 5,
    autoScroll: {
        speed: 1,
    },
    breakpoints: {
        640: {
            perPage: 3,
        },
        768: {
            perPage: 4,
        },
        1024: {
            perPage: 4,
        },
    },
});

splideClient.mount(window.splide.Extensions);

// const slider = document.querySelector(".solutions-wrap");
// const sliderItems = document.querySelectorAll(".solutions-wrap a");
// let isDown = false;
// let startX;
// let scrollLeft;

// slider.addEventListener("mousedown", (e) => {
//     isDown = true;
//     slider.classList.add("active");
//     startX = e.pageX - slider.offsetLeft;
//     scrollLeft = slider.scrollLeft;
// });
// slider.addEventListener("mouseleave", () => {
//     sliderItems.forEach((item) => {
//         item.style.pointerEvents = "auto";
//     });
//     isDown = false;
//     slider.classList.remove("active");
// });
// slider.addEventListener("mouseup", () => {
//     sliderItems.forEach((item) => {
//         item.style.pointerEvents = "auto";
//     });
//     isDown = false;
//     slider.classList.remove("active");
// });
// slider.addEventListener("mousemove", (e) => {
//     if (!isDown) return;
//     sliderItems.forEach((item) => {
//         item.style.pointerEvents = "none";
//     });
//     e.preventDefault();
//     const x = e.pageX - slider.offsetLeft;
//     const walk = (x - startX) * 3; //scroll-fast
//     slider.scrollLeft = scrollLeft - walk;
// });

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
