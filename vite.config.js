import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/conference.css', 'resources/js/conference.js', 'resources/js/toast.js'],
            refresh: true,
        }),
    ],
    build: {
        assetsInlineLimit: 0 // Чтобы шрифты не инлайнились
    }
});
