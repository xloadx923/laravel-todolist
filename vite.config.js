import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/font-awesome.min.css',
                'resources/css/global.css',
                'resources/css/style.css',
                'resources/css/media.css',
                'resources/js/functions.js',
                'resources/js/script.js'
            ],
            refresh: true,
        }),
    ],
});
