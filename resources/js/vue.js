window.Vue = require('vue').default;

const $ = require('jquery');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('contenuto', require('./components/content.vue').default);
Vue.component('info', require('./components/info.vue').default);
Vue.component('about', require('./components/about.vue').default);
Vue.component('portfolio', require('./components/portfolio.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        section: 'portfolio',
    },
    created() {
        this.showOverflow()
    },
    methods: {
        showHaMenu: function () {
            let dropdown = $('.collegamenti');
            if (dropdown.hasClass('hide')) {
                dropdown.removeClass('hide');
            } else {
                dropdown.addClass('hide')
            }

        },
        showOverflow: function () {
            var docWidth = document.documentElement.offsetWidth;

            [].forEach.call(
                document.querySelectorAll('*'),
                function (el) {
                    if (el.offsetWidth > docWidth) {
                        console.log(el);
                    }
                }
            );
        }
    }
});
