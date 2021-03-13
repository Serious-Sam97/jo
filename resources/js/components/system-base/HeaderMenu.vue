<template>
  <v-navigation-drawer
    absolute
    :permanent="!isMobile"
    :temporary="isMobile"
    :right="!isMobile"
    v-model="menu"
  >
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
  name: "HeaderMenu",
  data() {
    return {
      items: [
        { title: "Projetos", route: "Projects" },
        { title: "Contato", route: "Contact" },
      ],
    };
  },
  props: {
    value: Boolean,
    isMobile: Boolean,
  },
  computed: {
    menuItems() {
      if (localStorage.getItem("language") === "ptbr") {
        return ["Projetos", "Sobre/Contato"];
      }
      return ["Projects", "About/Contact"];
    },
    menu: {
      set(value) {
        this.$emit("input", value);
      },
      get() {
        return this.value;
      },
    },
  },
};
</script>

<style>
.v-navigation-drawer__content {
  display: flex !important;
  align-content: center;
  flex-wrap: wrap;
}

.v-navigation-drawer {
  height: calc(100vh) !important;
}
</style>
       