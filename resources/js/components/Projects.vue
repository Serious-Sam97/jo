<template>
  <div>
    <div class="d-flex justify-center mt-7 mb-15">
      <label style="font-size: 25px">Projectos/ Ouça</label>
    </div>
    <v-container>
      <div class="d-flex justify-space-between">
        <div :style="`width: 540px;`">
          <iframe
            style="width: 20em"
            height="315px"
            src="https://www.youtube.com/embed/gavHNe8peD4"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
          <div>
            <p>
              Dois Peixes Synths, percussões, pads e processamento da guitarra e
              piano nesse single, que também conta com a colaboração de Otávio
              Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog)
              e Allen Alencar. Vídeo por Ênio Vital.
            </p>
          </div>
        </div>
        <div :style="`width: 540px;`">
          <iframe
            style="width: 20em"
            height="315px"
            src="https://www.youtube.com/embed/gavHNe8peD4"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
          <label>
            Dois Peixes Synths, percussões, pads e processamento da guitarra e
            piano nesse single, que também conta com a colaboração de Otávio
            Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog) e
            Allen Alencar. Vídeo por Ênio Vital.
          </label>
        </div>
      </div>
    </v-container>
  </div>
</template>

<script>
export default {
  name: "Projects",
  props: {
    isMobile: Boolean,
  },
  computed: {
    youtubeVideosWidth() {
      console.log(this.isMobile);
      return this.isMobile ? "530px" : "560px";
    },
  },
};
</script>

<style lang="scss" scoped>
</style>