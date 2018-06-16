
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


//Vue.component('file-component', require('./components/FileUploadComponent.vue'));
//Vue.component('fileView-component', require('./components/FileViewComponent.vue'));
/**
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('calmanager-component', require('./components/CalManagerComponent.vue'));
Vue.component('example', require('./components/Examplevue'));
Vue.component('example2', require('./components/Examplevue2'));
Vue.component('example3', require('./components/Examplevue3'));
Vue.component('example4', require('./components/Examplevue4'));
*/

const app = new Vue({
    el: '#app'
});
