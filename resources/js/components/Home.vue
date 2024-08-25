<template>
  <div>
    <h2>List of Merchants</h2>
    <ul>
      <li v-for="merchant in merchants" :key="merchant.id">
        {{ merchant.company_name }} - {{ merchant.address }}
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      merchants: []
    };
  },
  mounted() {
    axios.get('/api/merchants')
      .then(response => {
        this.merchants = response.data;
      });
  }
};
</script>
