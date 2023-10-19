<template>
   <v-app id="inspire">
    <v-navigation-drawer v-model="drawer" app clipped hide-overlay :style="{ top: $vuetify.application.top + 'px', zIndex: 6 }">
      <v-list dense>
        <v-list-item @click="false">
          Dashboard
        </v-list-item>
        <v-list-item @click="false">
          Settings
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app clipped-left dark color="#447fa6">
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Application</v-toolbar-title>
    </v-app-bar>

    <v-main>
      <v-container fluid>
        <nuxt />
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "default",
  data() {
    return {
      drawer: false
    };
  },
};
</script>

<style>
</style>