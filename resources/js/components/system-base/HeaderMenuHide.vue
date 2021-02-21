<template>
  <v-navigation-drawer fixed permanent expand-on-hover right class="hover-menu">
    <v-list dense>
      <v-list-item v-for="(item, itemIndex) in items" :key="itemIndex">
        <v-list-item-content>
          <v-list-item-title>
            <v-btn
              @click="$router.push({ name: item.route })"
              elevation="2"
              outlined
              raised
              >{{ menuItems[itemIndex] }}</v-btn
            >
          </v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
    <template v-slot:append>
      <div>
        <language-selector />
      </div>
    </template>
  </v-navigation-drawer>
</template>

<script>
import LanguageSelector from "./LanguageSelector.vue";
export default {
  components: { LanguageSelector },
  name: "HeaderMenuHide",
  data() {
    return {
      items: [
        { title: "Sobre", route: "Home" },
        { title: "Projetos", route: "Projects" },
        { title: "Contato", route: "Contact" },
      ],
    };
  },
  computed: {
    menuItems() {
      if (localStorage.getItem("language") === "ptbr") {
        return ["Sobre", "Projetos", "Contato"];
      }
      return ["About", "Projects", "Contact"];
    },
  },
};
</script>

<style lang="scss" scoped>
.v-navigation-drawer__content {
  display: flex !important;
  align-content: center;
  flex-wrap: wrap;
}

.hover-menu {
  height: 100%;
  top: 0px;
  transform: translateX(0%);
  width: 10px;
}
</style>