const rlSliderContainers = document.querySelectorAll(".slider-rl");
if (rlSliderContainers) {
    rlSliderContainers.forEach((el) => {
        var sliderServices = tns({
            container: el,
            swipeAngle: false,
            speed: 400,
            items: 1.1,
            mouseDrag: true,
            slideBy: "page",
            controls: false,
            gutter: 16,
        });
    });
}
