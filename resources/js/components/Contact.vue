<template>
  <div>
    <div
      :class="`d-flex justify-center  ${
        $vuetify.breakpoint.smAndDown ? '' : 'mt-7 mb-15'
      }`"
    >
      <label style="font-size: 25px">{{ header }}</label>
    </div>
    <div>
      <v-row
        class="px-10"
        :style="
          $vuetify.breakpoint.smAndDown
            ? 'width: 100%; overflow: auto; height: calc(79vh); padding-bottom: 70px'
            : 'width: 92%'
        "
      >
        <v-col
          cols="12"
          md="4"
          :class="`d-flex ${
            $vuetify.breakpoint.smAndDown ? 'justify-center' : 'justify-end'
          }`"
        >
          <div>
            <img src="/joe.jpg" width="300px" />
            <div class="mt-3 ml-5">
              <p
                class="text-subtitle-2"
                style="color: black"
                v-html="settingBio"
              ></p>
              <div v-for="(social, socialIndex) in socials" :key="socialIndex">
                <label style="font-weight: bolder">{{ social.title }}:</label>
                <label>{{ social.value }}</label>
              </div>
            </div>
          </div>
        </v-col>
        <v-col cols="12" md="4">
          <div
            :class="$vuetify.breakpoint.smAndDown ? '' : 'mt-10'"
            v-html="settingDesc"
          ></div>
        </v-col>
        <v-col cols="12" md="4">
          <v-form ref="form" v-model="valid" lazy-validation>
            <v-text-field
              v-model="name"
              :counter="10"
              :rules="nameRules"
              :label="isPT ? 'Nome' : 'Name'"
              required
            ></v-text-field>

            <v-text-field
              v-model="email"
              :rules="emailRules"
              label="E-mail"
              required
            ></v-text-field>

            <v-text-field
              v-model="name"
              :counter="20"
              :rules="nameRules"
              :label="isPT ? 'Assunto' : 'Subject'"
              required
            ></v-text-field>

            <v-text-field
              v-model="name"
              :counter="999"
              :rules="nameRules"
              :label="isPT ? 'Mensagem' : 'Message'"
              required
            ></v-text-field>

            <v-btn
              :disabled="!valid"
              color="success"
              class="mr-4"
              @click="validate"
            >
              {{ isPT ? "Enviar" : "Send" }}
            </v-btn>
          </v-form>
        </v-col>
      </v-row>
      <div class="d-flex justify-space-between"></div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Contact",
  data: () => ({
    bio: "",
    bioEN: "",
    desc: "",
    descEN: "",
    socials: [],
    valid: true,
    name: "",
    nameRules: [
      (v) => !!v || "Name is required",
      (v) => (v && v.length <= 10) || "Name must be less than 10 characters",
    ],
    email: "",
    emailRules: [
      (v) => !!v || "E-mail is required",
      (v) => /.+@.+\..+/.test(v) || "E-mail must be valid",
    ],
    select: null,
    items: ["Item 1", "Item 2", "Item 3", "Item 4"],
    checkbox: false,
  }),
  computed: {
    isPT() {
      return localStorage.getItem("language") === "ptbr";
    },
    header() {
      return this.isPT ? "Sobre/Contato" : "About/Contact";
    },
    settingBio() {
      return this.isPT ? this.bio : this.bioEN;
    },
    settingDesc() {
      return this.isPT ? this.desc : this.descEN;
    },
  },
  mounted() {
    this.getSetting();
    this.getSocials();
  },
  methods: {
    getSocials() {
      axios
        .get("/api/socials", this.socials)
        .then(({ data }) => (this.socials = data));
    },
    validate() {
      this.$refs.form.validate();
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
    getSetting() {
      axios.get("/api/setting").then(({ data }) => {
        if (data !== null) {
          this.bio = data.bio_pt;
          this.bioEN = data.bio_en;
          this.desc = data.desc_pt;
          this.descEN = data.desc_en;
        }
      });
    },
  },
};
</script>

<style lang="scss" scoped>
label {
  font-size: 15px;
}
</style>