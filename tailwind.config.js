/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter"],
                jakarta: ["Plus Jakarta Sans"],
                sora: ["Sora"],
                poppins: ["Poppins"],
            },
            colors: {
                dark1: "#161e31",
                dark2: "#1d263a",
                dark3: "#1E293B",
                light1: "#f8fafc",
                light2: "#e2e8f0",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
