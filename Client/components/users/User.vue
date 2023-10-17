<template>
  <div>
    <h1>{{ setHeadings(userPage) }}</h1>
    <nuxt-link to="/add-users"
      ><BaseButton class="mb-5" color="primary" :disabled="isDisabled"
        >Click me</BaseButton
      ></nuxt-link
    >
    <v-data-table
      :headers="headers"
      :items="users.users"
      item-key="user_id"
      class="elevation-1"
    >
      <template v-slot:item="{ item }">
        <tr>
          <td>{{ item.user_id }}</td>
          <td>{{ item.name }}</td>
          <td>{{ item.email }}</td>
          <td>{{ item.status_text }}</td>
          <td>{{ item.date_of_birth_formated }}</td>
          <td>{{ item.status }}</td>
          <td>
            <Nuxt-link  :to="{ path: 'edit-user', query: { user: item }}" ><v-btn color="info">Edit</v-btn></Nuxt-link>
            <v-btn @click.prevent="deleteUser(item.user_id)" color="red">Delete</v-btn>
          </td>
        </tr>
      </template>
    </v-data-table>
  </div>
</template>
  
  <script>
import { mapState, mapActions } from "vuex";
import global from "~/mixins/global.js";

export default {
  name: "users",
  mixins: [global],
  data() {
    return {
      isDisabled: false,
      userPage: 'this is user page',
      headers: [
        {
          text: "User id",
          value: "user_id",
          align: "left",
          sortable: false,
        },
        { text: "Name", value: "name" },
        { text: "Email", value: "email" },
        { text: "Status text", value: "status_text" },
        { text: "DOB", value: "date_of_birth_formated" },
        { text: "Status", value: "status" },
        { text: "Actions", value: "actions" },
      ],
    };
  },
  computed: { ...mapState(["users", "userObj"]),
 },
 watch: {
  usersList: {
    immediate: true,
    handler(newValue) {
      console.log('new', newValue);
    }
  }
 },
  methods: {
    ...mapActions(["fetchUsers"]),
    deleteUser(id) {
      if (this.users.users.length > 0) {
      this.$store.dispatch('removeUser', id);
    }
    },
  },
  created() {
    this.fetchUsers();
  },
};
</script>
  
  <style>
</style>
  