const multiImgSliderContainer = document.querySelector("#slider-multi-img");
if (multiImgSliderContainer) {
    var sliderServices = tns({
        container: "#slider-multi-img",
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
