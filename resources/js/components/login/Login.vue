<template>
  <v-form @submit.prevent="login">
    <v-container grid-list-sm>
      <v-row justify="center">
        <v-col cols="12" sm="10" md="8" lg="6">
          <v-card ref="form">
            <v-card-text>
              <v-text-field v-model="form.email" label="E-mail" required placeholder="email"></v-text-field>
              <v-text-field
                v-model="form.password"
                label="Enter your password"
                hint="At least 8 characters"
                min="8"
                type="password"
                required
              ></v-text-field>
            </v-card-text>
            <v-divider class="mt-10"></v-divider>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn block color="success" dark type="submit" class="mr-4">Login</v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-form>
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
      User.login(this.form);
    }
  }
};
</script>

<style>
</style>
