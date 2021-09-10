import { createApp } from 'vue';
import HelloWorld from './components/UnorderedListComponent.vue';

const app = createApp({});
app.component('unordered-list-component', HelloWorld)
    .mount('#app');

require('./bootstrap');
