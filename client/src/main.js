import Vue from 'vue'
import App from './App.vue'
import router from './router'

//main.js
import FullCalendar from 'vue-full-calendar'
Vue.use(FullCalendar)

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount('#app');
