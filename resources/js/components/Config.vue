<template>
  <div class="px-5 py-5">
    <h3>Bio (PTBR)</h3>
    <v-textarea v-model="bio"> </v-textarea>
    <h3>Bio (EN)</h3>
    <v-textarea v-model="bioEN"> </v-textarea>
    <br />
    <v-simple-table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Iframe</th>
          <th>Content (PTBR)</th>
          <th>Content (EN)</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
        <tr :key="projectIndex" v-for="(project, projectIndex) in projects">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </v-simple-table>
    <div class="d-flex justify-center mt-2">
      <v-icon class="pointer">fas fa-plus-circle</v-icon>
    </div>
    <br />
    <v-simple-table>
      <thead>
        <tr>
          <th>Social Plataform</th>
          <th>Nickname</th>
        </tr>
      </thead>
      <tbody>
        <tr
          :key="`social-${socialIndex}`"
          v-for="(social, socialIndex) in socials"
        >
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </v-simple-table>
    <div class="d-flex justify-center mt-2">
      <v-icon class="pointer">fas fa-plus-circle</v-icon>
    </div>
  </div>
</template>

<script>
export default {
  name: "Config",
  data() {
    return {
      bio: "",
      bioEN: "",
      projects: [],
      socials: [],
    };
  },
};
</script>

<style lang="scss" scoped>
.pointer {
  cursor: pointer;
}
</style>