/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');
const { Toast } = require('bootstrap');
const { toSafeInteger } = require('lodash');
const { default: Swal } = require('sweetalert2');
require('./bootstrap');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

    
    created: function(){
        this.getCustomers()
    },

    data: {
        customers: []
    },

    methods: {
        getCustomers: function() {
            var urlCustomers = 'customers';
            
            Axios.get(urlCustomers).then(response => {
                console.log(response.data);
                this.customers = response.data
            });
        },
        deleteCustomer: function(customerId){
            var url = 'customers/' + customerId;
            Axios.delete(url).then(response => {
                this.getCustomers();
                Swal.fire({
                    title: 'Registro eliminado.',
                    icon:'success',
                    timer: 1500,
                    toast: true,
                    position: 'top',
                    showConfirmButton:false,
                    color:'white',
                    iconColor: 'white',
                    background: "#a5dc86",
                  });                  
            });
            

        }
    }

});
