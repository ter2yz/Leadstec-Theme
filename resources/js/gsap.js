gsap.registerPlugin(ScrollTrigger);

gsap.from("#home-stories", {
    opacity: 0,
    y: 100,
    duration: 1,
    scrollTrigger: {
        trigger: "#home-stories",
        start: "top 80%",
    },
});
