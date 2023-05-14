const playBtn = document.getElementById("play-btn");
const video = document.getElementById("iframe-video");
const coverWrapper = document.getElementById("video-cover-wrapper");

if (playBtn) {
    playBtn.addEventListener("click", () => {
        video.src += "?autoplay=1";
        coverWrapper.style.opacity = "0";
        setTimeout(() => {
            coverWrapper.style.display = "none";
        }, 500);
    });
}

// function handleScrollDirection(bestWrapper) {
//     let isScrollingDown = false;
//     let prevScrollPos =
//         window.pageYOffset || document.documentElement.scrollTop;

//     function checkScrollDirection() {
//         const rect = bestWrapper.getBoundingClientRect();
//         const isTopVisible = rect.top >= 0 && rect.top <= window.innerHeight;
//         const isBottomVisible =
//             rect.bottom >= 0 && rect.bottom <= window.innerHeight;
//         const isReachTop =
//             rect.top <= 0 && Math.abs(rect.top) <= window.innerHeight;
//         const isContentScrolledToTop = bestWrapper.scrollTop === 0;
//         const isContentScrolledToBottom =
//             bestWrapper.scrollHeight - bestWrapper.clientHeight ===
//             bestWrapper.scrollTop;
//         console.log("isContentScrolledToBottom: ", isContentScrolledToBottom);

//         if (isScrollingDown && isReachTop) {
//             document.documentElement.style.overflow = "hidden";
//         } else if (isScrollingDown && isContentScrolledToBottom) {
//             console.log("Downing and bottom visible");
//             bestWrapper.style.overflowY = "hidden";
//         } else if (!isScrollingDown && !isTopVisible) {
//             console.log("Downing and top not visible");
//             bestWrapper.style.overflowY = "scroll";
//         } else if (!isScrollingDown && isContentScrolledToTop) {
//             bestWrapper.style.overflowY = "hidden";
//         }
//     }

//     window.addEventListener("scroll", function () {
//         const rect = bestWrapper.getBoundingClientRect();
//         const currentScrollPos =
//             window.pageYOffset || document.documentElement.scrollTop;
//         if (currentScrollPos > prevScrollPos) {
//             isScrollingDown = true;
//             // Perform actions for scrolling down
//         } else {
//             isScrollingDown = false;
//             // Perform actions for scrolling up
//         }
//         prevScrollPos = currentScrollPos;
//         checkScrollDirection();
//     });
// }
// const bestWrapper = document.getElementById("headless-best-wrapper");
// handleScrollDirection(bestWrapper);
