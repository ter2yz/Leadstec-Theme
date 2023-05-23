document.addEventListener(
    "wpcf7mailsent",
    (event) => {
        const currentURL = window.location.href;

        if (currentURL.includes("/en/")) {
            location = "/en/thank-you.html";
        } else if (currentURL.includes("/sc/")) {
            location = "/sc/thank-you.html";
        } else if (currentURL.includes("/tc/")) {
            location = "/tc/thank-you.html";
        } else {
            // Default location if none of the specified URLs match
            location = "/thank-you.html";
        }
    },
    false
);
