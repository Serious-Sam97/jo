<template>
  <v-navigation-drawer fixed permanent expand-on-hover right class="hover-menu">
    <template v-slot:prepend>
      <div class="mt-3">
        <language-selector />
      </div>
    </template>
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
        { title: "Projetos", route: "Projects" },
        { title: "Contato", route: "Contact" },
      ],
    };
  },
  computed: {
    menuItems() {
      if (localStorage.getItem("language") === "ptbr") {
        return ["Projetos", "Sobre/Contato"];
      }
      return ["Projects", "About/Contact"];
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