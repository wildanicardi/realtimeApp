<template>
  <v-container grid-list-sm>
    <v-form @submit.prevent="login">
      <v-text-field v-model="email" label="E-mail" required></v-text-field>
      <v-text-field
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
    name: "",
    nameRules: [
      v => !!v || "Name is required",
      v => (v && v.length <= 10) || "Name must be less than 10 characters"
    ],
    email: "",
    emailRules: [
      v => !!v || "E-mail is required",
      v => /.+@.+\..+/.test(v) || "E-mail must be valid"
    ]
  }),

  methods: {
    login(){
        axios.post('/auth/login',form)
            .then(res => console.log(res.data)
            .error(error => console.log(error.response.data))
    }
  }
};
</script>

<style>
</style>
