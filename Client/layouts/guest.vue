<template>
   <v-app >
     <v-container grid-list-xl text-xs-center>
       <v-layout row wrap>
         <v-flex xs4 offset-xs4>
           <v-card dark color="dark" elevation-24 style="padding: 20px; border: 1px; border-radius: 50px;">
             <nuxt />
           </v-card>
         </v-flex>
       </v-layout>
     </v-container>
    </v-app>
</template>

<script>
export default {
  name: "guest",
};
</script>

<style>
</style>