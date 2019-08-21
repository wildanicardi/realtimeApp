<template>
  <div>
      <v-toolbar>
      <v-toolbar-title>Single Page Forum</v-toolbar-title>

      <v-spacer></v-spacer>

      <v-toolbar-items>
        <v-btn text v-for="name in names" :key="name">{{name}}</v-btn>
      </v-toolbar-items>
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
      extensionHeight: 48,
      names:[
          "Forum",
          "Ask Question",
          "Category",
          "Login",
      ],
    }),
  }
</script>

<style>
</style>
