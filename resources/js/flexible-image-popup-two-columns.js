const iptsSliderContainers = document.querySelectorAll(".slider-popup");
if (iptsSliderContainers) {
    iptsSliderContainers.forEach((el) => {
        var sliderServices = tns({
            container: el,
            swipeAngle: false,
            speed: 400,
            items: 1,
            mouseDrag: true,
            slideBy: "page",
            controls: false,
        });
    });
}
