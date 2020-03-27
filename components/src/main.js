import Vue from 'vue'
import App from './App.vue'
import CatalogPdf from './components/CatalogPDF'
import CatalogPdfItem from './components/CatalogPdfItem'

Vue.config.productionTip = false

// Vue.component('catalog-pdf', require('./components/CatalogPDF.vue'))
// Vue.component('catalog-pdf-item', require('./components/CatalogPdfItem.vue'))

// new Vue({
//   render: h => h(App)
// }).$mount('#app')

new Vue({
  render: h => h(CatalogPdf)
}).$mount('#app')

// new Vue({
//   el: '#app',
//   components: {
//     CatalogPdf,
//     CatalogPdfItem
//   }
// })
