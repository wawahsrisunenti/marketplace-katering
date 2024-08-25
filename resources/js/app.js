import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import axios from "axios";

// Set up Axios for HTTP requests
Vue.prototype.$http = axios;
axios.defaults.baseURL = "/";

// Disable production tips in Vue
Vue.config.productionTip = false;

// Create a new Vue instance
new Vue({
    el: "#app",
    router,
    render: (h) => h(App),
});
