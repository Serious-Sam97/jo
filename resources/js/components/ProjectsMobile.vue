<template>
  <v-container>
    <div class="d-flex flex-column align-center">
      <div
        :style="`calc(44vh);`"
        class="container"
        v-for="(project, projectIndex) in projects"
        :key="`projects-${projectIndex}`"
      >
        <!-- YOUTUBE style="width: 100%"
            height="315px" -->

        <!-- OUTRO width="100%"
              height="295px" -->
        <div v-html="project.iframe"></div>
        <div>
          <p
            class="text-subtitle-2 font-weight-bold mb-0"
            v-html="project.title"
          ></p>
          <p
            class="text-caption"
            style="font-size: 12px !important"
            v-html="projectDescription(project)"
          ></p>
        </div>
      </div>
    </div>
  </v-container>
</template>

<script>
export default {
  name: "ProjectsMobile",
  props: {
    projects: Array,
  },
  methods: {
    projectDescription(project) {
      return localStorage.getItem("language") === "ptbr"
        ? project.description_pt
        : project.description_en;
    },
  },
};
</script>

<style lang="scss">
.container {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.responsive-iframe {
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
p {
  text-align: justify;
}
</style>
