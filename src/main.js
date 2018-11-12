import Vue from 'vue'
import App from './App.vue'
import router from "./router"
import axios from "axios";

Vue.config.productionTip = false

export const API_URL = "https://conduit.productionready.io/api";
export default API_URL;


const base = axios.create({
    baseURL: 'https://api-test.stringeex.com'
})

Vue.prototype.$http = base

new Vue({
    router,
  render: h => h(App),
}).$mount('#app')
