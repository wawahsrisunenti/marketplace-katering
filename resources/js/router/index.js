import Vue from "vue";
import Router from "vue-router";
import Home from "../components/Home.vue";
import Order from "../components/Order.vue";

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: "/",
            name: "Home",
            component: Home,
        },
        {
            path: "/order",
            name: "Order",
            component: Order,
        },
    ],
});
