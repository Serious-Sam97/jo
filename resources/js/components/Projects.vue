<template>
  <div>
    <div class="d-flex justify-center mt-7 mb-15">
      <label style="font-size: 25px">{{ header }}</label>
    </div>
    <projects-mobile v-if="isMobile" />
    <v-container v-else>
      <div class="d-flex justify-space-between">
        <div :style="`width: 540px;`">
          <iframe
            style="width: 100%"
            height="315px"
            src="https://www.youtube.com/embed/gavHNe8peD4"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
          <div>
            <p class="text-caption" v-html="texts[0]"></p>
          </div>
        </div>
        <div :style="`width: 540px;`">
          <iframe
            width="100%"
            height="295px"
            scrolling="no"
            frameborder="no"
            allow="autoplay"
            src="https://w.soundcloud.com/player/?
url=https%3A//api.soundcloud.com/tracks/971401771%3Fsecret_token%3Ds-Tqf2m0C8vfQ&color=
%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true
"
          ></iframe>
          <div
            style="
              font-size: 10px;
              color: #cccccc;
              line-break: anywhere;
              word-break: normal;
              overflow: hidden;
              white-space: nowrap;
              text-overflow: ellipsis;
              font-family: Interstate, Lucida Grande, Lucida Sans Unicode,
                Lucida Sans, Garuda, Verdana, Tahoma, sans-serif;
              font-weight: 100;
            "
          >
            <a
              href="https://soundcloud.com/joeirente"
              title="joeirente"
              target="_blank"
              style="color: #cccccc; text-decoration: none"
              >joeirente</a
            >
            ·
            <a
              href="https://soundcloud.com/joeirente/henrireel/s-Tqf2m0C8vfQ"
              title="HENRI prod. Joe Irente (demo reel)"
              target="_blank"
              style="color: #cccccc; text-decoration: none"
              >HENRI prod. Joe Irente (demo reel)</a
            >
          </div>
          <p class="text-caption" v-html="texts[1]"></p>
        </div>
      </div>
    </v-container>
  </div>
</template>

<script>
import ProjectsMobile from "./ProjectsMobile.vue";

export default {
  components: { ProjectsMobile },
  name: "Projects",
  props: {
    isMobile: Boolean,
  },
  computed: {
    youtubeVideosWidth() {
      return this.isMobile ? "530px" : "560px";
    },
    header() {
      return localStorage.getItem("language") === "ptbr"
        ? "Projetos / Ouça"
        : "Projects / Listen";
    },
  },
};
</script>
<style scoped>
p {
  text-align: justify;
}
</style>