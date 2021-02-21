<template>
  <div class="pl-3">
    <img
      @click="selectFlag('ptbr')"
      :class="selectedFlag === 'ptbr' ? 'selected' : ''"
      width="20%"
      class="mr-2"
      src="/brazil.svg"
    />
    <img
      @click="selectFlag('en')"
      :class="selectedFlag === 'en' ? 'selected' : ''"
      width="20%"
      src="/eua.svg"
    />
  </div>
</template>

<script>
export default {
  name: "LanguageSelector",
  mounted() {
    this.selectedFlag = localStorage.getItem("language");
  },
  data() {
    return {
      selectedFlag: "ptbr",
    };
  },
  methods: {
    selectFlag(flag) {
      this.selectedFlag = flag;
      localStorage.setItem("language", flag);
      location.reload();
    },
  },
};
</script>

<style lang="scss" scoped>
.selected {
  border: 3px solid black;
}

img {
  cursor: pointer;
}
</style>