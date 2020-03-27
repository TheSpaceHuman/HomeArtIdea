<template>
  <div id="app">
   <catalog-pdf :items-json="toJson" />
  </div>
</template>

<script>
  import CatalogPdf from './components/CatalogPDF'
  import CatalogPdfItems from  './components/CatalogPdfItem'
  import BaseJson from './assets/json/base.json'


  export default {
    data() {
      return {
        json: BaseJson
      }
    },
    components: {
      CatalogPdf,
      CatalogPdfItems
    },
    computed: {
      toJson () {
        return JSON.stringify(this.json)
      }
    }
  }
</script>

<style lang="scss">
  @import "~@fortawesome/fontawesome-free/css/all.min.css";
  @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700');
  html, body {
    font-family: in, sans-serif;
    line-height: 1.5;
  }
  *, *::before, *::after {
    box-sizing: border-box;
  }
</style>
