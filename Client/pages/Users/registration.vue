<template>
  <v-card-text>
    <h4 class="display-2 font-weight-bold">Registration</h4>
    <hr />
    <br />
    <v-form>
      <v-text-field
        clearable
        v-model="userObj.name"
        label="name"
        prepend-icon="face"
        type="text"
        @click:prepend="prependClicked"
        color="white"
        @click:append-outer="appendClicked"
        counter="10"
      >
      </v-text-field>
      <v-text-field
        clearable
        v-model="userObj.email"
        label="email"
        prepend-icon="email"
        type="text"
        @click:prepend="prependClicked"
        color="white"
        @click:append-outer="appendClicked"
        counter="25"
      >
      </v-text-field>
      <v-text-field
        clearable
        v-model="userObj.password"
        label="Password"
        prepend-icon="lock"
        type="password"
        @click:prepend="prependClicked"
        color="white"
        @click:append-outer="appendClicked"
      >
      </v-text-field>
      <v-text-field
        clearable
        v-model="userObj.password_confirmation"
        label="Confirmation Password"
        prepend-icon="lock"
        type="password"
        @click:prepend="prependClicked"
        color="white"
        @click:append-outer="appendClicked"
      >
      </v-text-field>
    </v-form>
    <br />
    <v-btn @click="handleRegister" color="grey darken-2" large>Enter</v-btn>
  </v-card-text>
</template>

<script>
export default {
  name: "registration",
  layout: "guest",
  data() {
    return {
      userObj: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
    };
  },
  methods: {
    prependClicked() {
      console.log("prepend clicked");
    },
    appendClicked() {
      console.log("append clicked", this.username);
    },
    async handleRegister() {
      try {
        const response =  await this.$axios.$post("register", this.userObj);
        console.log(response, "res");
        this.$router.push({
            path: "/"
        })
      } catch (error) {
        console.log("error", error);
      }
    },
  },
};
</script>

<style>
</style>