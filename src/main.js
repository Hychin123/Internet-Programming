import './assets/main.css'
import router from './router'
import { createApp } from 'vue'
import App from './App.vue'
import { createPinia } from 'pinia';
/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { fas } from '@fortawesome/free-solid-svg-icons'


const app = createApp(App)

.component('font-awesome-icon', FontAwesomeIcon)
const pinia = createPinia();

app.use(router);
app.use(pinia);
app.mount('#app');


library.add(fas)


