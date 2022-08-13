import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { Link } from "@inertiajs/inertia-vue3"
import { InertiaProgress } from '@inertiajs/progress'
import * as Dotenv from 'dotenv'

import '../css/app.css'

Dotenv.config()

InertiaProgress.init({
  color: '#fff',
});

createInertiaApp({
  resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .component('Link', Link)
      .use(plugin)
      .mount(el)
  },
});
