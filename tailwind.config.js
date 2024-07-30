/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "bright-orange": "#FFA500",
                "brown-soil": "#8B4513",
                "brown-soil": "#8B4513",
                "dark-green": "#006400",
                "green-leaves": "#2E8B57",
                "blue-sea": "#1E90FF",
                "blue-sky": "#87CEEB",
                "sand-beige": "#F5DEB3",
                "dark-grey": "#A9A9A9",
                "bright-grey": "#D3D3D3",
            },
            backgroundImage: {
                "homepage-background": "url('/img/homepage-background.png')",
            },
        },
    },
    plugins: [],
};
