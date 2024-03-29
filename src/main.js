import Vue from 'vue'
import App from './App.vue'
import router from "./router"
import axios from "axios";

Vue.config.productionTip = false


const base = axios.create({
    baseURL: 'https://api-test.stringeex.com'
})

Vue.prototype.$http = base

new Vue({
    router,
  render: h => h(App),
}).$mount('#app')
