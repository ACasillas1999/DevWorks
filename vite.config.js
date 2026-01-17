import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'],
            refresh: true,
        }),
        tailwindcss(),
        react({
            jsxRuntime: 'automatic',
        }),
    ],
    server: {
        host: '192.168.60.117',
        port: 5173,
        strictPort: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
