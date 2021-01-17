<template>
  <v-navigation-drawer
    permanent
    absolute
    expand-on-hover
    right
    class="hover-menu"
  >
    <v-list dense>
      <v-list-item v-for="item in items" :key="item.title">
        <v-list-item-content>
          <v-list-item-title>
            <v-btn
              @click="$router.push({ name: item.route })"
              elevation="2"
              outlined
              raised
              >{{ item.title }}</v-btn
            >
          </v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
export default {
  name: "HeaderMenuHide",
  data() {
    return {
      items: [
        { title: "Home", route: "Home" },
        { title: "Projetos", route: "Projects" },
        { title: "Contato", route: "Contact" },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
.v-navigation-drawer__content {
  display: flex !important;
  align-items: center !important;
}

.hover-menu {
  height: 100%;
  top: 0px;
  transform: translateX(0%);
  width: 10px;
}
</style>