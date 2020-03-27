<template>
    <div class="catalog-item">
        <div class="catalog-item_image">
            <img :src="image" :alt="title" />
        </div>
        <div class="catalog-item_title">
            {{ title }}
        </div>
        <button class="catalog-item_download-btn" type="button" @click="downloadTrigger">
            Подробнее <i class="fas fa-file-archive"></i>
        </button>
        <div class="catalog-item_input" v-if="inputVisibility">
            <label>
                Секретный ключ для полного ознакомления
                <input type="password" v-model="secretKey" placeholder="Введите ключ">
            </label>
        </div>
        <div class="catalog-item_result-panel" v-if="resultVisibility || done">
            <a :href="pdf" :download="pdf" class="catalog-item_result-panel_download">
                <i class="fas fa-file-download"></i>
            </a>
            <a :href="pdf" class="catalog-item_result-panel_show" target="_blank">
                <i class="far fa-eye"></i>
            </a>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        inputVisibility: false,
        secretKey: null,
      }
    },
    props: {
      image: {
        type: String,
        default: 'http://homeartidea.com/theme/assets/rediz/img/fabric-predini/logo_pdf_1.jpg'
      },
      pdf: {
        type: String,
        default: 'http://homeartidea.com/theme/assets/rediz/pdf/Materika-2014.pdf'
      },
      title: {
        type: String,
        default: 'Architecture and Design'
      },
      password: {
        type: String,
        default: '123'
      },
      done: {
        type: Boolean,
        default: false
      }
    },
     methods: {
       downloadTrigger() {
         return this.inputVisibility = !this.inputVisibility
       }
     },
    computed: {
      resultVisibility() {
        if (this.secretKey === this.password) {
          this.inputVisibility = false
          this.$emit('active-all')
          return true
        } else {
          return false
        }
      }
    }
  }
</script>

<style lang="scss">
.catalog-item {
    font: inherit;
 }
.catalog-item_image {
  img {
    width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
    object-fit: cover;
  }
}
.catalog-item_download-btn {
  background-color: #8f0e0f;
  color: #fff;
  border-radius: 6px;
  border: none;
  padding: 10px 15px;
  font-size: 17px;
  display: block;
  margin: 0 auto 15px;
  transition: color .5s;
  i {
    padding: 0 8px;
  }
}
.catalog-item_download-btn:hover, .catalog-item_download-btn:active {
  background: #2b2c31;
}
.catalog-item_title {
  padding: 15px 0;
  text-align: center;
}
.catalog-item_input {
  label {
    text-align: center;
    display: block;
  }
  input {
    border: none;
    padding: 12px 20px;
    color: #000;
    width: 100%;
    font-size: 18px;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
  }
  input:focus {
    outline: 1px solid #8f0e0f;
  }
}
.catalog-item_result-panel_download {
  padding: 10px 18px;
  border-radius: 50%;
  font-size: 21px;
  background-color: #8f0e0f;
  color: #fff;
  border: none;
  transition: color .5s;
  margin: 0 5px;
}
.catalog-item_result-panel_download:hover, .catalog-item_result-panel_download:active {
    background: #2b2c31;
    color: #fff;
}
.catalog-item_result-panel_show {
  padding: 10px 15px;
  border-radius: 50%;
  font-size: 21px;
  background-color: #8f0e0f;
  color: #fff;
  border: none;
  transition: color .5s;
  margin: 0 5px;
}
.catalog-item_result-panel_show:active, .catalog-item_result-panel_show:hover {
  background: #2b2c31;
  color: #fff;
}
.catalog-item_result-panel {
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
