import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 
                    'resources/js/app.js',
                    // 'resources/js/jquery.js',
                    'resources/css/prueba.css',
                    'resources/js/prueba.js',
                    'resources/css/reportes.css'
                ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources',
            '$': 'jQuery'
        }
    }
});
