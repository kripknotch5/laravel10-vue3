import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel(
            [
                'resources/assets/css/material-dashboard.css',
                'resources/assets/css/nucleo-icons.css',
                'resources/assets/css/nucleo-svg.css',
            ],
            {
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            }
        ),
    ],
});
