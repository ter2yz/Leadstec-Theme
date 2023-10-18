document.addEventListener(
    "wpcf7mailsent",
    (event) => {
        const currentURL = window.location.href;

        if (currentURL.includes("/en/")) {
            location = "/en/contact-us/thank-you";
        } else if (currentURL.includes("/sc/")) {
            location = "/sc/contact-us/thank-you";
        } else if (currentURL.includes("/tc/")) {
            location = "/tc/contact-us/thank-you";
        } else {
            // Default location if none of the specified URLs match
            location = "/thank-you";
        }
    },
    false
);
