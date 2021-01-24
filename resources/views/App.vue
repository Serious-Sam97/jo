<template>
  <v-app>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900"
      rel="stylesheet"
    />
    <v-content>
      <div class="py-2 px-2">
        <v-btn @click="() => (menu = !menu)" v-if="isMobile">Menu</v-btn>
      </div>
      <header-menu
        :isMobile="isMobile"
        v-model="menu"
        v-if="$route.name === 'Home' || isMobile"
      />
      <header-menu-hide v-else />
      <router-view :isMobile="isMobile"></router-view>
    </v-content>
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
  data() {
    return {
      menu: false,
    };
  },
  watch: {
    isMobile() {
      if (!this.isMobile) {
        this.menu = true;
      }
    },
  },
  computed: {
    isMobile() {
      return this.$vuetify.breakpoint.width <= 768;
    },
  },
};
</script>