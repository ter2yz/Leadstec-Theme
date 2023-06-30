const splideContainer = document.querySelector(".home-client .splide");

splideContainer &&
    new Splide(".home-client .splide", {
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
    }).mount(window.splide.Extensions);
