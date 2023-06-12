import '../bootstrap';


import { createApp } from 'vue'

createApp({
  data() {
    return {
      count: 0
    }
  },
  mounted() {
        console.log("app.js mounted.");
    },
}).mount('#app-vm')