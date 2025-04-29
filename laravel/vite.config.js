import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import fullReload from 'vite-plugin-full-reload';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
        fullReload(['resources/views/**/*.blade.php']),
    ],
});
