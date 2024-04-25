import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/client.css', 'resources/js/client.js', 'resources/js/admin.js'],
            refresh: true,
        }),
    ],
});
