import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import SidebarMinimizer from "@coreui/vue/Vue_Full_Project/src/components/SidebarMinimizer";
import MobileSidebarToggler from "./components/MobileSidebarToggler.vue";
import SidebarToggler from "./components/SidebarToggler.vue";
import AsideToggler from "./components/AsideToggler.vue";

Vue.use(BootstrapVue);

window.app = new Vue({
    el: '#vueApp',
    computed: {
        hasSidebar: function () {
            return document.getElementsByClassName('sidebar').length !== 0;
        },
        hasAside: function () {
            return document.getElementsByClassName('aside-menu').length !== 0;
        }
    },
    components: {
        SidebarMinimizer,
        MobileSidebarToggler,
        SidebarToggler,
        AsideToggler
    }
});
