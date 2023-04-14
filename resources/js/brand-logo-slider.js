const button = document.querySelectorAll(".brand-logo-animate a");
for (let i = 0; i < button.length; i++) {
    if (i % 2 == 0) {
        button[i].classList.add("-translate-y-5");
    } else {
        button[i].classList.add("translate-y-32");
    }
}
