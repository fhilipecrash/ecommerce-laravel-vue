import { defineConfig } from 'vitest/config'
// import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'
import AutoImport from 'unplugin-auto-import/vite'
import Icons from 'unplugin-icons/vite'
import IconsResolver from 'unplugin-icons/resolver'
import Components from 'unplugin-vue-components/vite'

export default defineConfig({
  test: {
    globals: true,
  },

  plugins: [
    laravel({
      input: 'resources/js/app.js',
      refresh: true,
    }),

    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),

    AutoImport({
      dts: true,
      include: [
        /\.vue$/,
        /\.vue\?vue/, // .vue
      ],
      imports: [
        'vitest',
        'vue',
        {
          '@inertiajs/inertia-vue3': ['useForm', 'Link', 'Head'],
        },
        {
          '@inertiajs/inertia': ['Inertia'],
        },
        {
          'node-ray/web': ['ray'],
        },
      ],
    }),

    Components({
      dirs: ['resources/js/Components'],
      extensions: ['vue'],
      directoryAsNamespace: true,
      deep: true,
      resolvers: [IconsResolver({ prefix: false })],
    }),

    Icons({
      autoInstall: true,
    }),
  ],
  resolve: {
    alias: {
      vue: 'vue/dist/vue.esm-bundler.js',
      path: 'path-browserify',
    },
  },
})
