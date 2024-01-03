import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
              'resources/scss/common/header.scss',
              'resources/scss/common/fotter.scss',
              'resources/scss/index.scss',
              'resources/scss/detail.scss',
            ],
            refresh: true,
        }),
    ],
});
