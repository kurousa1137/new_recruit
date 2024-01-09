import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
              'resources/scss/common/header.scss',
              'resources/scss/common/footer.scss',
              'resources/scss/common/reset.scss',
              'resources/scss/index.scss',
              'resources/scss/detail.scss',
              'resources/scss/form.scss',
              'resources/scss/login.scss',
              'resources/scss/error.scss',
              'resources/scss/thanks.scss',
              'resources/scss/admin/list.scss',
              'resources/scss/admin/create.scss',
              'resources/scss/admin/edit.scss',
              'resources/js/form.js',
            ],
            refresh: true,
        }),
    ],
});
