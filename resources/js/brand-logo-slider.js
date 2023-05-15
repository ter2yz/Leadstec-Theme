const splideClient = new Splide("#solutions-partners .splide", {
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
