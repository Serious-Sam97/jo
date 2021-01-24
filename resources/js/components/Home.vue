<template>
  <v-container>
    <v-row :class="`d-flex ${!isMobile ? 'align-center' : ''}`">
      <v-col cols="6">
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text ever
          since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting,
          remaining essentially unchanged. It was popularised in the 1960s with
          the release of Letraset sheets containing Lorem Ipsum passages, and
          more recently with desktop publishing software like Aldus PageMaker
          including versions of Lorem Ipsum. Contrary to popular belief, Lorem
          Ipsum is not simply random text. It has roots in a piece of classical
          Latin literature from 45 BC, making it over 2000 years old.
        </p>
      </v-col>
      <v-col cols="6">
        <img src="/joe.jpg" width="300px" />
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  name: "Home",
  props: {
    isMobile: Boolean,
  },
};
</script>
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
</style>