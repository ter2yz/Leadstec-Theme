const videoWrappers = document.querySelectorAll(".video-wrapper");
if (videoWrappers) {
    videoWrappers.forEach((wrapper) => {
        const playBtn = wrapper.querySelector("#play-btn");
        const video = wrapper.querySelector("#iframe-video");
        const coverWrapper = wrapper.querySelector("#video-cover-wrapper");

        if (playBtn) {
            playBtn.addEventListener("click", () => {
                video.src += "?autoplay=1";
                coverWrapper.style.opacity = "0";
                setTimeout(() => {
                    coverWrapper.style.display = "none";
                }, 500);
            });
        }
    });
}
