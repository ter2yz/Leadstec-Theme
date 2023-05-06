const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.php",
        "./**/*.php",
        "./resources/css/*.css",
        "./resources/js/*.js",
        "./safelist.txt",
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
            },
        },
        fontFamily: {
            sans: ["Helvetica", "Arial", "sans-serif"],
        },
        extend: {
            colors: tailpress.colorMapper(
                tailpress.theme("settings.color.palette", theme)
            ),
            fontSize: tailpress.fontSizeMapper(
                tailpress.theme("settings.typography.fontSizes", theme)
            ),
            backgroundSize: {
                "100%": "100%",
                "110%": "110%",
                "120%": "120%",
            },
        },
        screens: {
            xs: "480px",
            sm: "600px",
            md: "769px",
            lg: "1024px",
            // lg: tailpress.theme("settings.layout.contentSize", theme),
            xl: tailpress.theme("settings.layout.wideSize", theme),
            "2xl": "1440px",
        },
    },
    plugins: [
        tailpress.tailwind,
        require("@tailwindcss/container-queries"),
        require("@tailwindcss/typography"),
    ],
};
