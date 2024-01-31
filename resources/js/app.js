import 'bootstrap/dist/css/bootstrap.css';
import { createApp } from 'vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome' 
import './Icons/icons.js'; 
import app from './Components/app.vue'; 
import router from './router/index.js'


createApp(app).use(router).component('font-awesome-icon', FontAwesomeIcon).mount("#app")

import 'bootstrap/dist/js/bootstrap.js';