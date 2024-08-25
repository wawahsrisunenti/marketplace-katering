<template>
  <div>
    <h2>Order Food</h2>
    <form @submit.prevent="placeOrder">
      <input v-model="merchant_id" type="number" placeholder="Merchant ID" />
      <input v-model="delivery_date" type="date" placeholder="Delivery Date" />
      <input v-model="total_price" type="number" placeholder="Total Price" />
      <button type="submit">Place Order</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      merchant_id: '',
      delivery_date: '',
      total_price: ''
    };
  },
  methods: {
    placeOrder() {
      axios.post('/api/order', {
        merchant_id: this.merchant_id,
        delivery_date: this.delivery_date,
        total_price: this.total_price
      }).then(response => {
        alert('Order placed successfully!');
      }).catch(error => {
        console.error('Error placing order:', error);
      });
    }
  }
};
</script>
