const cetcSliderContainers = document.querySelectorAll(".slider-cetc");
if (cetcSliderContainers) {
    cetcSliderContainers.forEach((el) => {
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
