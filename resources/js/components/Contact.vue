<template>
  <div>
    <div class="d-flex justify-center mt-7 mb-15">
      <label style="font-size: 25px">Contato</label>
    </div>
    <v-container>
      <v-row style="width: 100%">
        <v-col cols="12" md="6">
          <div>
            <div>
              <label class="font-weight-bold">Email: </label>
              <label>Email</label>
            </div>
            <div>
              <label class="font-weight-bold">Instagram: </label>
              <label>@</label>
            </div>
            <div>
              <label class="font-weight-bold">Soundcloud: </label>
              <label>Soundcloud</label>
            </div>
          </div>
        </v-col>
        <v-col cols="12" md="6">
          <v-form ref="form" v-model="valid" lazy-validation>
            <v-text-field
              v-model="name"
              :counter="10"
              :rules="nameRules"
              label="Nome"
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
              label="Assunto"
              required
            ></v-text-field>

            <v-text-field
              v-model="name"
              :counter="999"
              :rules="nameRules"
              label="Mensagem"
              required
            ></v-text-field>

            <v-btn
              :disabled="!valid"
              color="success"
              class="mr-4"
              @click="validate"
            >
              Enviar
            </v-btn>
          </v-form>
        </v-col>
      </v-row>
      <div class="d-flex justify-space-between"></div>
    </v-container>
  </div>
</template>

<script>
export default {
  name: "Contact",
  data: () => ({
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

  methods: {
    validate() {
      this.$refs.form.validate();
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    },
  },
};
</script>

<style lang="scss" scoped>
label {
  font-size: 15px;
}
</style>