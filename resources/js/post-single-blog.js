const singleBlogRecentContainer = document.querySelector("#slider-blog-recent");
if (singleBlogRecentContainer) {
    var sliderServices = tns({
        container: "#slider-blog-recent",
        swipeAngle: false,
        speed: 400,
        items: 3.1,
        mouseDrag: true,
        slideBy: "page",
        controls: false,
        gutter: 16,
        nav: false,
        loop: false,
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
