import { createApp } from "vue";
//import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
//import circleSpin from 'vue-spinners';

//Vue.use(VueSpinners)
createApp(App).use(store).use(router).mount("#app");
