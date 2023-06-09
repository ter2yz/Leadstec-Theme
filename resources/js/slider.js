const aemCtaSliderContainer = document.querySelector("#slider-aem-cta");
if (aemCtaSliderContainer) {
    var sliderServices = tns({
        container: "#slider-aem-cta",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
    });
}
const brandsCtaSliderContainer = document.querySelector("#slider-brands-cta");
if (brandsCtaSliderContainer) {
    var sliderServices = tns({
        container: "#slider-brands-cta",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
    });
}

const aemRecommendContainer = document.querySelector("#slider-aem-recommend");
if (aemRecommendContainer) {
    var sliderServices = tns({
        container: "#slider-aem-recommend",
        swipeAngle: false,
        speed: 400,
        items: 1.1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
        gutter: 16,
    });
}

const headlessFoundationContainer = document.querySelector(
    "#slider-headless-foundation"
);
if (headlessFoundationContainer) {
    var sliderServices = tns({
        container: "#slider-headless-foundation",
        swipeAngle: false,
        speed: 400,
        items: 1.1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
        gutter: 16,
        responsive: {
            480: {
                items: 1.1,
            },
            640: {
                items: 2.1,
            },
            768: {
                items: 3.1,
            },
        },
    });
}

const headlessStoriesContainer = document.querySelector(
    "#slider-headless-stories"
);
if (headlessStoriesContainer) {
    var sliderServices = tns({
        container: "#slider-headless-stories",
        swipeAngle: false,
        speed: 400,
        items: 1.1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
        gutter: 16,
        loop: false,
    });
}

const headlessAnalystsContainer = document.querySelector(
    "#slider-headless-analysts"
);
if (headlessAnalystsContainer) {
    var sliderServices = tns({
        container: "#slider-headless-analysts",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
        gutter: 16,
        responsive: {
            480: {
                items: 1,
            },
            640: {
                items: 2,
            },
            768: {
                items: 3,
            },
        },
    });
}
const headlesMorePlatformContainer = document.querySelector(
    "#slider-headless-moreabout"
);
if (headlesMorePlatformContainer) {
    var sliderServices = tns({
        container: "#slider-headless-moreabout",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
        gutter: 16,
        responsive: {
            480: {
                items: 1,
            },
            640: {
                items: 2,
            },
            768: {
                items: 3,
            },
        },
    });
}

const headlesToolsContainer = document.querySelector("#slider-headless-tools");
if (headlesToolsContainer) {
    var sliderServices = tns({
        container: "#slider-headless-tools",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
    });
}

const erpEvaluationContainer = document.querySelector("#slider-erp-evaluation");
if (erpEvaluationContainer) {
    var sliderServices = tns({
        container: "#slider-erp-evaluation",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
    });
}

const headlessBestContainer = document.querySelector("#slider-headless-best");
if (headlessBestContainer) {
    var sliderServices = tns({
        container: "#slider-headless-best",
        prevButton: "#sliderBestPrev",
        nextButton: "#sliderBestNext",
        swipeAngle: false,
        speed: 400,
        items: 1,
        mouseDrag: true,
        slideBy: "page",
        nav: false,
        loop: false,
    });
}
