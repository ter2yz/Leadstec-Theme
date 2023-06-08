const clnsContainers = document.querySelectorAll(".clns-container");
if (clnsContainers) {
    clnsContainers.forEach((container) => {
        const clnsSliderContainer = container.querySelector(
            ".slider-cases-numbers"
        );
        if (clnsSliderContainer) {
            var sliderWebCases = tns({
                container: clnsSliderContainer,
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
        const numberButtons = container.querySelectorAll(
            "#slider-web-cases button"
        );
        const numberWrapper = container.querySelector(
            "#number-selector-wrapper"
        );
        const showcases = container.querySelectorAll(
            "#showcase-web-cases .showcase-container"
        );
        if (numberButtons && showcases) {
            const handleCasesChange = (index) => {
                numberButtons.forEach((b) => {
                    if (index == b.dataset.index) {
                        b.classList.remove("text-[20px]");
                        b.classList.remove("opacity-60");
                        b.classList.remove("text-[#1b1c1d]");
                        b.lastElementChild.classList.remove("opacity-60");
                        b.classList.add("custom-number-shadow");
                        b.classList.add("text-[100px]");
                        b.classList.add("text-white");
                        b.classList.add("opacity-100");
                        b.lastElementChild.classList.add("opacity-100");
                    } else {
                        b.classList.remove("custom-number-shadow");
                        b.classList.remove("text-[100px]");
                        b.classList.remove("opacity-100");
                        b.classList.remove("text-white");
                        b.lastElementChild.classList.remove("opacity-100");
                        b.classList.add("text-[20px]");
                        b.classList.add("opacity-60");
                        b.classList.add("text-[#1b1c1d]");
                        b.lastElementChild.classList.add("opacity-60");
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
                button.addEventListener("click", () => {
                    const bgDetail =
                        "linear-gradient(to bottom, " +
                        button.dataset.bgstart +
                        ", " +
                        button.dataset.bgend +
                        ")";
                    numberWrapper.style.background = bgDetail;
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
                handleCasesChange(info.displayIndex % info.slideCount);
            });
        }

        const triggers = container.querySelectorAll(
            "#showcase-web-cases .showcase-container .content-trigger"
        );

        if (triggers) {
            triggers.forEach((trigger) => {
                trigger.addEventListener("click", () => {
                    const contentWrapper =
                        trigger.querySelector(".content-wrapper");
                    contentWrapper.classList.toggle("max-h-0");
                    contentWrapper.classList.toggle("max-h-full");
                    contentWrapper.classList.toggle("opacity-0");
                    contentWrapper.classList.toggle("opacity-100");
                });
            });
        }
    });
}
