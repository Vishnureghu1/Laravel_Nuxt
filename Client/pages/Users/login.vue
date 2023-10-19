<template>
  <div>
    <v-card-text>
      <h4 class="display-2 font-weight-bold">Login</h4>
      <hr />
      <br />
      <v-form>
        <v-text-field
          clearable
          v-model="userObj.email"
          label="email"
          prepend-icon="face"
          type="text"
          @click:prepend="prependClicked"
          color="white"
          @click:append-outer="appendClicked"
          counter="15"
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
      </v-form>
      <br />
      <v-btn color="grey darken-2" @click="handleLogin" large>Enter</v-btn>
    </v-card-text>
  </div>
</template>

<script>
export default {
  name: "login",
  layout: "guest",
  data() {
    return {
      userObj: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    async handleLogin() {
      try {
        const response = await this.$axios.$post("login", this.userObj);
        console.log("response", response);
        if(response.status == true) {
            this.$router.push({
                path: '/'
            })
        }else if(response.error == 'Unautherized') {
            this.$router.push({
                path: 'registration'
            })
        }
      } catch (error) {
        console.log("error", error);
      }
    },
    prependClicked() {
      console.log("prepend clicked");
    },
    appendClicked() {
      console.log("append clicked", this.username);
    },
  },
};
</script>

<style>
</style>