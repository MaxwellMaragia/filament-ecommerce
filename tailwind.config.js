/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'node_modules/preline/dist/*.js',
    ],
    darkMode: 'class',
    theme: {
        extend: {},
    },
    plugins: [
        require('preline/plugin'),
    ],

}

