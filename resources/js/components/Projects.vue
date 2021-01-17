<template>
  <div>
    <div class="d-flex justify-center mt-7 mb-15">
      <label style="font-size: 25px">Projectos/ Ouça</label>
    </div>

    <v-row style="width: 100%; height: 100%">
      <v-col cols="8" class="gambiarra-azul">
        <v-row style="width: 100%; height: 380px">
          <v-col
            cols="12"
            md="6"
            class="gambiarra"
            style="width: 300px; height: 100%"
            >TESTEEEEEEEEEEEEEEEEEEEEEE</v-col
          >
          <v-col
            cols="12"
            md="6"
            class="gambiarra"
            style="width: 300px; height: 100%"
          >
            TESTEEEEEEEEEEEEEEEEEEEEEE
          </v-col>
        </v-row>
        <v-row class="mt-7" style="width: 100%; height: 380px">
          <v-col
            cols="12"
            md="6"
            class="gambiarra"
            style="width: 300px; height: 100%"
            >TESTEEEEEEEEEEEEEEEEEEEEEE</v-col
          >
          <v-col
            cols="12"
            md="6"
            class="gambiarra"
            style="width: 300px; height: 100%"
          >
            TESTEEEEEEEEEEEEEEEEEEEEEE
          </v-col>
        </v-row>
      </v-col>
      <v-col cols="4" class="gambiarra"> TESTEEEEEEEEEEEEEEEEEEEEEE</v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  name: "Projects",
};
</script>

<style lang="scss" scoped>
.gambiarra {
  border: 1px solid red;
}
.gambiarra-azul {
  border: 1px solid blue;
}
</style>