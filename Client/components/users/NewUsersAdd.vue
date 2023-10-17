<template>
  <div>
    <h1>{{ setHeadings(pageHeding) }}</h1>
    <v-content>
      <v-form @submit.prevent="submitForm">
        <v-text-field
          label="Name"
          type="text"
          v-model="userObj.name"
        ></v-text-field>
        <v-text-field
          label="Email"
          type="email"
          v-model="userObj.email"
        ></v-text-field>
        <v-text-field
          label="status"
          type="number"
          v-model="userObj.status"
        ></v-text-field>
        <v-text-field
          label="DOB"
          type="date"
          v-model="userObj.date_of_birth"
        ></v-text-field>
        <v-btn type="submit">Submit</v-btn>
      </v-form>
    </v-content>
  </div>
</template>
  

<script>
import global from "~/mixins/global.js";

export default {
  name: "new-users-add",
  mixins: [global],
  data() {
    return {
      pageHeding: 'this is newuser page',
      userObj: {
        name: "",
        email: "",
        status: "",
        date_of_birth: "",
      },
    };
  },
  methods: {
    async submitForm() {
      try {
        const response = await this.$axios.$post("/add-users", {
          userObj: this.userObj,
        });
        if (response.status == 1) {
          this.$router.push("usersList");
        }

        console.log("Response", response);
      } catch (error) {
        console.error("Error", error);
      }
    },
  },
};
</script>

<style>
</style>