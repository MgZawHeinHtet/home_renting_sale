/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            'sm': '440px',
            'lg' : "1024px"
        },
        extend: {
            colors:{
                'home': {
                    600 : '#002349',
                    900: '#001731',
                  },
            }
        },
    },
    plugins: [],
};
