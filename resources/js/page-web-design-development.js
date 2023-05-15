const webCasesSliderContainer = document.querySelector("#slider-web-cases");
if (webCasesSliderContainer) {
    var sliderWebCases = tns({
        container: "#slider-web-cases",
        axis: "vertical",
        center: true,
        swipeAngle: false,
        speed: 400,
        items: 3,
        nav: false,
        controls: false,
        mouseDrag: true,
        loop: false,
    });
}
const numberButtons = document.querySelectorAll("#slider-web-cases button");
const showcases = document.querySelectorAll(
    "#showcase-web-cases .showcase-container"
);
if (numberButtons && showcases) {
    const handleCasesChange = (index) => {
        numberButtons.forEach((b) => {
            if (index == b.dataset.index) {
                b.classList.remove("scale-75");
                b.classList.remove("opacity-80");
                b.classList.add("scale-125");
                b.classList.add("opacity-100");
            } else {
                b.classList.remove("scale-125");
                b.classList.remove("opacity-100");
                b.classList.add("scale-75");
                b.classList.add("opacity-80");
            }
        });
        showcases.forEach((el) => {
            if (index == el.dataset.index) {
                el.classList.remove("lg:opacity-0");
                el.classList.remove("lg:translate-x-full");
                el.classList.add("lg:opacity-100");
                el.classList.add("lg:translate-x-0");
            } else {
                el.classList.remove("lg:opacity-100");
                el.classList.remove("lg:translate-x-0");
                el.classList.add("lg:translate-x-full");
                el.classList.add("lg:opacity-0");
            }
        });
    };
    numberButtons.forEach((button) => {
        const btnIndex = button.dataset.index;
        const info = sliderWebCases.getInfo();
        console.log("but: ", button);
        button.addEventListener("click", () => {
            handleCasesChange(btnIndex);
            sliderWebCases.goTo((btnIndex - 1) % info.slideCount);
            // sliderWebCases.goTo(
            //     (((btnIndex - 1) % info.slideCount) + info.slideCount) %
            //         info.slideCount
            // );
        });
    });
    sliderWebCases.events.on("indexChanged", () => {
        const info = sliderWebCases.getInfo();
        console.log("INFO: ", info);
        handleCasesChange(info.displayIndex % info.slideCount);
    });
}

const triggers = document.querySelectorAll(
    "#showcase-web-cases .showcase-container .content-trigger"
);

if (triggers) {
    triggers.forEach((trigger) => {
        trigger.addEventListener("click", () => {
            const contentWrapper = trigger.querySelector(".content-wrapper");
            contentWrapper.classList.toggle("max-h-0");
            contentWrapper.classList.toggle("max-h-full");
            contentWrapper.classList.toggle("opacity-0");
            contentWrapper.classList.toggle("opacity-100");
        });
    });
}
