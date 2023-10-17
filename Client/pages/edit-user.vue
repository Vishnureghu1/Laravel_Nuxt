
<template>
  <v-content>
    <v-form @submit.prevent="editUser">
      <v-text-field
        label="Name"
        type="text"
        v-model="userData.name"
      ></v-text-field>
      <v-text-field
        label="Email"
        type="email"
        v-model="userData.email"
      ></v-text-field>
      <v-text-field
        label="status"
        type="number"
        v-model="userData.status"
      ></v-text-field>
      <v-text-field
        label="DOB"
        type="date"
        v-model="userData.date_of_birth"
      ></v-text-field>
      <v-btn type="submit">Submit</v-btn>
    </v-form>
  </v-content>
</template>


  
  <script>
export default {
  async asyncData({ route }) {
    const user = route.query.user;
    return {
      userData: user || null,
    };
  },
  data() {
    return {
        
    }
  },
  methods: {
    editUser() {
        this.$store.dispatch('editUser', this.userData)
    }
  }
};
</script>
  