import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    plugins: [
        // ...
        require("@tailwindcss/aspect-ratio"),
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Urbanist"', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
    darkMode: "class",
};
