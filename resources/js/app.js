import './bootstrap';
import '../css/app.css';

import '@/assets/js/plugins/chartjs.min.js';
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js';
import 'https://kit.fontawesome.com/42d5adcbca.js';

import '@/assets/js/core/popper.min.js';
import '@/assets/js/core/bootstrap.min.js';
import '@/assets/js/plugins/perfect-scrollbar.min.js';
import '@/assets/js/plugins/dragula/dragula.min.js';
import '@/assets/js/plugins/chartjs.min.js';



import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';



const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
