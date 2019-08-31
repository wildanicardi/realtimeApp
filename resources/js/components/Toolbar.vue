<template>
  <div>
    <v-toolbar>
      <v-toolbar-title>Single Page Forum</v-toolbar-title>

      <v-spacer></v-spacer>

      <div class="hidden-sm-and-down">
        <router-link to="/forum">
          <v-btn text>Forum</v-btn>
        </router-link>
        <v-btn text>Ask Question</v-btn>
        <router-link to="/category">
          <v-btn text>Category</v-btn>
        </router-link>
        <router-link to="/login">
          <v-btn text>Login</v-btn>
        </router-link>
      </div>
    </v-toolbar>
  </div>
</template>

<script>
export default {
  data: () => ({
    extended: false,
    extendedSlot: false,
    prominent: false,
    dense: false,
    collapse: false,
    flat: false,
    bg: false,
    extensionHeight: 48
  })
};
</script>

<style>
</style>
