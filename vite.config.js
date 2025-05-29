import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // include CSS if you use it
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: 'resources/js/app.js', // entry file
        },
    },
});
