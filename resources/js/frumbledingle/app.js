
import { createApp } from 'vue';
import CategoriesTable from './components/CategoriesTable.vue';
import ItemsTable from './components/ItemsTable.vue';
import LocationsTable from './components/LocationsTable.vue';
import ReportTable from './components/ReportTable.vue';

const app = createApp({});
app.component('locations-table', LocationsTable)
    .component('items-table', ItemsTable)
    .component('categories-table', CategoriesTable)
    .component('report-table', ReportTable)
    .mount('#app-container');