<template>
  <div class="px-5 py-5">
    <h3>Bio (PTBR)</h3>
    <v-textarea :rows="2" v-model="bio"> </v-textarea>
    <h3>Bio (EN)</h3>
    <v-textarea :rows="2" v-model="bioEN"> </v-textarea>
    <h3>Desc (PTBR)</h3>
    <v-textarea :rows="6" v-model="desc"> </v-textarea>
    <h3>Desc (EN)</h3>
    <v-textarea :rows="6" v-model="descEN"> </v-textarea>
    <v-btn @click="createSetting" class="ml-3 mt-3" color="green">Save</v-btn>
    <br />
    <v-simple-table style="max-width: 95%">
      <thead>
        <tr>
          <th>Ordem</th>
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
            {{ projectIndex + 1 }}
          </td>
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
    <v-simple-table style="max-width: 95%">
      <thead>
        <tr>
          <th>Social Plataform</th>
          <th>Nickname</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr
          :key="`social-${socialIndex}`"
          v-for="(social, socialIndex) in socials"
        >
          <td>
            <v-text-field v-model="socials[socialIndex].title" />
          </td>
          <td>
            <v-text-field v-model="socials[socialIndex].value" />
          </td>
          <td>
            <v-icon @click="deleteSocials(socialIndex)" class="pointer"
              >fas fa-trash-alt</v-icon
            >
          </td>
        </tr>
      </tbody>
    </v-simple-table>
    <div class="d-flex justify-center mt-2">
      <v-icon @click="createSocial" class="pointer">fas fa-plus-circle</v-icon>
      <v-btn @click="saveSocials" class="ml-3" color="green">Save</v-btn>
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
      desc: "",
      descEN: "",
      projects: [],
      socials: [],
    };
  },
  mounted() {
    this.getSetting();
    this.getProjects();
    this.getSocials();
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
      if (this.projects[projectIndex].id === 0) {
        this.$delete(this.projects, projectIndex);
        return;
      }
      axios.post(`/api/projects/${this.projects[projectIndex].id}`).then(() => {
        this.$delete(this.projects, projectIndex);
      });
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
    createSetting() {
      axios.post("/api/setting", {
        bio_pt: this.bio,
        bio_en: this.bioEN,
        desc_pt: this.desc,
        desc_en: this.descEN,
      });
    },
    createSocial() {
      this.socials.push({
        id: 0,
        title: "",
        value: "",
      });
    },
    saveSocials() {
      axios.post("/api/socials", { socials: this.socials });
    },
    getSocials() {
      axios
        .get("/api/socials", this.socials)
        .then(({ data }) => (this.socials = data));
    },
    deleteSocials(socialsIndex) {
      if (this.socials[socialsIndex].id === 0) {
        this.$delete(this.socials, socialsIndex);
        return;
      }
      axios
        .post(`/api/socials/${this.socials[socialsIndex].id}`, this.socials)
        .then(() => {
          this.$delete(this.socials, socialsIndex);
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