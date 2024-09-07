/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/masmerise/livewire-toaster/resources/views/*.blade.php",
    ],
    

    plugins: [require("preline/plugin")],
    darkMode: false,
 
};

