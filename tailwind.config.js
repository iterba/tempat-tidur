/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                loto: ["Loto"],
                roboto: ["Roboto"],
                inter: ["Inter"],
            },
        },
    },
    plugins: [],
};
