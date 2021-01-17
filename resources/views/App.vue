<template>
  <v-app>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
      rel="stylesheet"
    />
    <v-main>
      <router-view></router-view>
      <header-menu v-if="$route.name === 'Home'" />
      <header-menu-hide v-else />
    </v-main>
  </v-app>
</template>

<script>
import HeaderMenu from "../js/components/system-base/HeaderMenu.vue";
import HeaderMenuHide from "../js/components/system-base/HeaderMenuHide.vue";
export default {
  name: "App",
  components: {
    HeaderMenu,
    HeaderMenuHide,
  },
};
</script>