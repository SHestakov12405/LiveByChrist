import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                'daneehand': ['Daneehand', 'cursive'],
            },
            colors:{
                primary: '#2563eb',
                secondary: '#64748b',
                confprimary: '#5770b4',
                confsecondary: '#4d5aa5'
            },
            transitionDuration: {
                '1000': '1000ms', // duration-[1s]
            }
        },
    },

    safelist: [
        'opacity-0', 'opacity-100',
        'duration-[1s]',
        'transition-opacity',
        'hidden', 'sm:block'
    ],


    plugins: [forms],
};
