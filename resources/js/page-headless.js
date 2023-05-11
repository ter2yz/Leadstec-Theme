const playBtn = document.getElementById("play-btn");
const video = document.getElementById("iframe-video");
const coverWrapper = document.getElementById("video-cover-wrapper");

playBtn.addEventListener("click", () => {
    video.src += "?autoplay=1";
    coverWrapper.style.opacity = "0";
    setTimeout(() => {
        coverWrapper.style.display = "none";
    }, 500);
});
