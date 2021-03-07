<template>
  <v-container
    :fill-height="!isMobile"
    :class="!isMobile ? 'home-desktop' : ''"
    :style="`${isMobile ? '' : 'width: 70%; margin-left: 44px'}`"
  >
    <div
      :class="`d-flex justify-space-between ${
        isMobile ? 'align-start' : 'align-center'
      }`"
    >
      <p
        :class="`mr-4 ${!isMobile ? 'line-height' : ''}`"
        style="text-align: justify"
      >
        {{ homeText }}
      </p>
      <img src="/joe.jpg" :width="isMobile ? '100px' : '300px'" />
    </div>
  </v-container>
</template>
<script>
import axios from "axios";
export default {
  name: "Home",
  data() {
    return {
      ptbrText: ``,
      enText: `
        `,
    };
  },
  props: {
    isMobile: Boolean,
  },
  computed: {
    homeText() {
      if (localStorage.getItem("language") === "ptbr") {
        return this.ptbrText;
      }
      return this.enText;
    },
  },
  mounted() {
    this.getSetting();
  },
  methods: {
    getSetting() {
      axios.get("/api/setting").then(({ data }) => {
        this.ptbrText = data.bio_pt;
        this.enText = data.bio_en;
      });
    },
  },
};
</script>
<style scoped>
.home-desktop {
  height: 95%;
  padding-bottom: 0;
}
</style>
<style>
img {
  border-radius: 50%;
}
p {
  color: #4d4d4d;
  font-size: 15px !important;
  line-height: 24px !important;
  font-style: inherit !important;
  font-variant-ligatures: inherit;
  font-variant-caps: inherit;
  font-variant-numeric: inherit;
  font-variant-east-asian: inherit;
  font-weight: inherit;
  font-stretch: inherit;
  font-size: 100%;
  line-height: inherit;
  font-family: inherit;
}

.row {
  position: fixed;
  height: 200px;
  top: 35%;
  /* left: 80%; */
  margin-top: -100px; /* Negative half of height. */
}

.line-height {
  line-height: 140% !important;
}
</style>