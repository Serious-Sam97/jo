<template>
  <div class="px-5 py-5">
    <h3>Bio (PTBR)</h3>
    <v-textarea v-model="bio"> </v-textarea>
    <h3>Bio (EN)</h3>
    <v-textarea v-model="bioEN"> </v-textarea>
    <v-btn @click="createSetting" class="ml-3 mt-3" color="green">Save</v-btn>
    <br />
    <v-simple-table style="max-width: 95%">
      <thead>
        <tr>
          <th>Title</th>
          <th>Iframe</th>
          <th>Content (PTBR)</th>
          <th>Content (EN)</th>
          <th>Type</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr :key="projectIndex" v-for="(project, projectIndex) in projects">
          <td>
            <v-text-field v-model="projects[projectIndex].title"></v-text-field>
          </td>
          <td>
            <v-textarea v-model="projects[projectIndex].iframe"></v-textarea>
          </td>
          <td>
            <v-textarea
              v-model="projects[projectIndex].description_pt"
            ></v-textarea>
          </td>
          <td>
            <v-textarea
              v-model="projects[projectIndex].description_en"
            ></v-textarea>
          </td>
          <td>
            <v-select
              v-model="projects[projectIndex].type"
              item-text="name"
              item-value="value"
              :items="[
                {
                  value: 0,
                  name: 'Youtube/Spotify',
                },
                {
                  value: 1,
                  name: 'Others',
                },
              ]"
            />
          </td>
          <td>
            <v-icon @click="deleteProject(projectIndex)" class="pointer"
              >fas fa-trash-alt</v-icon
            >
          </td>
        </tr>
      </tbody>
    </v-simple-table>
    <div class="d-flex justify-center mt-2">
      <v-icon @click="createProject" class="pointer">fas fa-plus-circle</v-icon>
      <v-btn @click="saveProjects" class="ml-3" color="green">Save</v-btn>
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
import axios from "axios";
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
  mounted() {
    this.getSetting();
    this.getProjects();
  },
  methods: {
    getProjects() {
      axios.get("/api/projects").then(({ data }) => (this.projects = data));
    },
    createProject() {
      this.projects.push({
        description_en: "",
        description_pt: "",
        title: "",
        id: 0,
        iframe: "",
        type: 0,
      });
    },
    saveProjects() {
      axios.post("/api/projects", { projects: this.projects });
    },
    deleteProject(projectIndex) {
      axios.post(`/api/projects/${this.projects[projectIndex].id}`).then(() => {
        this.$delete(this.projects, projectIndex);
      });
    },
    getSetting() {
      axios.get("/api/setting").then(({ data }) => {
        if (data !== null) {
          this.bio = data.bio_pt;
          this.bioEN = data.bio_en;
        }
      });
    },
    createSetting() {
      axios.post("/api/setting", {
        bio_pt: this.bio,
        bio_en: this.bioEN,
      });
    },
  },
};
</script>

<style lang="scss" scoped>
.pointer {
  cursor: pointer;
}
</style>