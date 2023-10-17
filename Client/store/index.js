export const state = () => ({
  users: [],
  userObj: {}
});

export const getters = {};

export const mutations = {
  SET_USER_OBJ(state, payload) {
    state.userObj = payload;
  },
  SET_USERS(state, users) {
    state.users = users;
  },
  REMOVE_USER(state, userId) {
    state.users.users = state.users.users.filter(user => user.user_id !== userId);
  },
};

export const actions = {
  async fetchUsers({ commit }) {
    try {
      const res = await this.$axios.$get("fetch-users");
      commit("SET_USERS", res);
    } catch (error) {
      console.error("Error fetching users:", error);
    }
  },

  async removeUser({ commit }, user_id) {
    try {
      const response = await this.$axios.$delete("remove-user", {
        data: {
          user_id: user_id,
        },
      });
      commit("REMOVE_USER", user_id);

      console.log(response, response);
    } catch (error) {
      console.log("error", error);
    }
  },
  async editUser({ commit }, user) {
    console.log(user, 'ccc');
    const response = await this.$axios.$put('edit-user',{
      user: user
    });
    console.log('response', response);
  }
};
