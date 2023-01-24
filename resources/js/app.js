import './bootstrap';
import '../css/app.css';

import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import Layout from './Pages/Layout'

createInertiaApp({

    /*resolve: (name) =>
        resolvePageComponent(`./Pages/${name}.vue`,
            import.meta.glob('./Pages/!**!/!*.vue')
        ),*/

    /*resolve: name => {
        const pages = import.meta.glob('./Pages/!**!/!*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },*/

    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = name.startsWith('Auth/') ? undefined : Layout
        page.default.layout = name.startsWith('Vue/') ? undefined : Layout
        return page
    },



    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .mount(el)
    },
});
