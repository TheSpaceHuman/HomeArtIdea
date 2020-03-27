<template>
  <div class="container">
    <div class="catalog-items" >
      <catalog-pdf-item
          @active-all="activeItems"
          v-for="(item, index) in items"
          :key="index"
          :pdf="item.pdf"
          :image="item.image"
          :password="password"
          :done="passwordActive"
          :title="item.title">
      </catalog-pdf-item>
    </div>
  </div>
</template>

<script>
import CatalogPdfItem from './CatalogPdfItem'

export default {
  components: {
    CatalogPdfItem
  },
  props: {
    itemsJson: {
      type: [ Array, Object, String ],
      required: true
    },
    password: {
      type: String,
      required: false,
      default: 'password'
    }
  },
  data() {
    return {
      passwordActive: false
    }
  },
  methods: {
    activeItems: function () {
      this.passwordActive = true
    }
  },
  computed: {
      items() {
          console.log(this.itemsJson)
          return JSON.parse(this.itemsJson)
      }
  }
}
</script>

<style lang="scss">
.container {
  max-width: 1200px;
  margin: 0 auto;
  display: block;
}
.catalog-items {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-content: center;
  width: 100%;
  margin: 0 -15px;
}
.catalog-items > div {
  flex: 1 1 calc(25% - 30px);
  margin: 15px;
  min-width: 220px;
}
</style>
