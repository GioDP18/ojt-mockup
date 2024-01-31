import 'bootstrap/dist/css/bootstrap.css';
import './Icons/icons.js'; 
import { createApp } from 'vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome' 
import store from './states/state.js' 
import app from './Components/app.vue'; 
import router from './router/index.js'


createApp(app)
.use(router)
.use(store)
.component('font-awesome-icon', FontAwesomeIcon)
.mount("#app")

import 'bootstrap/dist/js/bootstrap.js';