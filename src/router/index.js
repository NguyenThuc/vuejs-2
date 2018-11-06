import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);

export default new Router({
    routes: [
        {
            path: "/",
            component: () => import("@/views/Login"),
        } ,
        {
            name: "login",
            path: "/login",
            component: () => import("@/views/Login")
        },
        {
            name: "contact",
            path: "/contact",
            component: () => import("@/views/Contact")
        },
        {
            name: "contact-add",
            path: "/contact/add",
            component: () => import("@/views/Contact-add")
        },

    ]
});
