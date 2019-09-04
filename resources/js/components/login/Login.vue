<template>
  <v-container grid-list-sm>
    <v-form @submit.prevent="login">
      <v-text-field v-model="form.email" label="E-mail" required></v-text-field>
      <v-text-field
        v-model="form.password"
        label="Enter your password"
        hint="At least 8 characters"
        min="8"
        type="password"
        required
      ></v-text-field>
      <v-btn color="success" type="submit" class="mr-4">Login</v-btn>
    </v-form>
  </v-container>
</template>

<script>
export default {
  data: () => ({
    form: {
      email: "",
      password: ""
    }
  }),

  methods: {
    login() {
      axios
        .post("/api/auth/login", this.form)
        .then(result => console.log(result.data))
        .catch(err => console.log(err.response.data));
    }
  }
};
</script>

<style>
</style>
