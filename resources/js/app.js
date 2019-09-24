
require('./bootstrap');

window.Vue = require('vue');

Vue.component('navigation-bar', require('./components/Navigation').default);
Vue.component('slider-component', require('./components/SliderComponent').default);
Vue.component('our-product', require('./components/OurProduct').default);
Vue.component('news-component', require('./components/NewsComponent').default);
Vue.component('about-firstpage', require('./components/AboutFirstpage').default);






const app = new Vue({
    el: '#app',
});





/* npms

npm install verte --save


*/
