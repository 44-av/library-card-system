/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
                "gradient-conic":
                    "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
            },
        },
        fontFamily: {
            sans: ["Helvetica Neue", "sans-serif"],
            roboto: ["Roboto", "sans-serif"],
            helvetica: ["Helvetica Neue", "sans-serif"],
        },
        colors: {
            primary: "#FAA929",
            secondary: "#68AF74",
            borderColor: "#E2E5E8",
            fontColor: "#475569",
            supportFont: "#94A3B8",
            backgroundColor: "#F1F3F5",
            accentPillColor: "#FFF6EA",
            accentTagColor: "#E9F7FB",

            supportFontDark: "#737373",
            backgroundDark: "#262626",
            cardBackground: "#3E3E3E",
            accentPillColorDark: "FFF6EA",
            nameLabel: "#475569",
            pointsLabel: "#D1D5DB",
            borderColor2: "#E7EBEE",
            supportFontDark: "#737373",
            backgroundDark: "#262626",
            cardBackground: "#3E3E3E",
            accentPillColorDark: "#FFF6EA",
            accentTagColorDark: "#475569",
            white: "#FFFFFF",
            black: "#000000",
        },
    },
    plugins: [],
};
