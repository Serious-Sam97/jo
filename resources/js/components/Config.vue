<template>
  <div>
    <h3>Bio</h3>
    <v-text-field v-model="bio"> </v-text-field>
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
  </div>
</template>

<script>
export default {
  name: "Config",
  data() {
    return {
      bio: "",
      projects: [],
      socials: [],
    };
  },
};
</script>

<style lang="scss" scoped>
</style>