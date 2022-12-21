import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { InertiaProgress } from '@inertiajs/progress'

import '../css/app.css'

InertiaProgress.init({
  color: '#fff',
})

createInertiaApp({
  resolve: async (name) =>
    await resolvePageComponent(
      `./Pages/${name}.vue`,
      import.meta.glob('./Pages/**/*.vue') as Record<string, () => Promise<any>>
    ),
  setup({ el, app, props, plugin }) {
    createApp({ render: () => h(app, props) })
      .component('Link', Link)
      .component('Head', Head)
      .use(plugin)
      .mount(el)
  },
}).catch((error) => console.error(error))
