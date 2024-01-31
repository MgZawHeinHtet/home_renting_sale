/** @type {import('tailwindcss').Config} */
export default {
   
    content: [
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors:{
                'home': {
                    600 : '#002349',
                    900: '#001731',
                  },
            }
        },
    },
    
};
