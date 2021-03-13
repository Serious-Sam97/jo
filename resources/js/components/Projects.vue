<template>
  <div>
    <div class="d-flex justify-center mt-7 mb-15">
      <label style="font-size: 25px">{{ header }}</label>
    </div>
    <projects-mobile v-if="isMobile" />
    <v-container v-else>
      <div
        class="d-flex justify-space-between"
        v-for="(base, baseIndex) in projects"
        :key="`base-${baseIndex}`"
      >
        <div
          :style="`width: 540px;`"
          v-for="(project, projectIndex) in base"
          :key="`projects-${projectIndex}`"
        >
          <!-- YOUTUBE style="width: 100%"
            height="315px" -->

          <!-- OUTRO width="100%"
              height="295px" -->
          <div v-html="project.iframe"></div>
          <div>
            <p class="text-subtitle-2 font-weight-bold mb-0" v-html="project.title"></p>
            <p class="text-caption" style="font-size: 12px !important" v-html="projectDescription(project)">
            </p>
          </div>
        </div>
      </div>
    </v-container>
  </div>
</template>

<script>
import ProjectsMobile from "./ProjectsMobile.vue";
import axios from "axios";

export default {
  components: { ProjectsMobile },
  name: "Projects",
  data() {
    return {
      projects: [],
    };
  },
  props: {
    isMobile: Boolean,
  },
  mounted() {
    this.getProjects();
  },
  methods: {
    getProjects() {
      axios.get("/api/projects").then(({ data }) => {
        const projects = [];
        while (data.length) {
          projects.push(data.splice(0, 2));
        }
        this.projects = projects;
      });
    },
    projectDescription(project) {
      return localStorage.getItem("language") === "ptbr"
        ? project.description_pt
        : project.description_en;
    },
  },
  computed: {
    youtubeVideosWidth() {
      return this.isMobile ? "530px" : "560px";
    },
    header() {
      return localStorage.getItem("language") === "ptbr"
        ? "Projetos"
        : "Projects";
    },
  },
};
</script>
<style scoped>
p {
  text-align: justify;
}
</style>