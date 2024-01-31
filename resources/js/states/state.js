import { createStore } from 'vuex';

export default createStore({
  state: {
    loading: false,
    alertMessage: "",
  },
  mutations: {
    setLoading(state, value) {
      state.loading = value;
    },
    setAlertMessage(state, message) {
      state.alertMessage = message;
    },
  },
  actions: {
    //
  },
  modules: {
    //
  },
});
