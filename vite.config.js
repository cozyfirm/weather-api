import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/public-part/style.scss', 'resources/css/admin/admin.scss',  'resources/js/app.js', 'resources/js/map.js', 'resources/js/admin/admin.js'],
            refresh: true,
        }),
    ],
});
