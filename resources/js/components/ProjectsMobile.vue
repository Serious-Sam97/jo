<template>
  <v-container class="">
    <div class="d-flex flex-column align-center">
      <div :style="`calc(44vh);`" class="container">
        <iframe
          class="responsive-iframe"
          height="315px"
          src="https://www.youtube.com/embed/gavHNe8peD4"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
        <div>
          <p class="text-caption">
            <b>Dois Peixes</b><br />
            Dois Peixes Synths, percussões, pads e processamento da guitarra e
            piano nesse single, que também conta com a colaboração de Otávio
            Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog) e
            Allen Alencar. Vídeo por Ênio Vital.
          </p>
        </div>
      </div>
      <div :style="`calc(44vh);`" class="container">
        <iframe
          class="responsive-iframe"
          height="315px"
          src="https://www.youtube.com/embed/gavHNe8peD4"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
        <p class="text-caption">
          <b>Dois Peixes</b><br />
          Dois Peixes Synths, percussões, pads e processamento da guitarra e
          piano nesse single, que também conta com a colaboração de Otávio
          Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog) e
          Allen Alencar. Vídeo por Ênio Vital.
        </p>
      </div>
    </div>
  </v-container>
</template>

<script>
export default {
  name: "ProjectsMobile",
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
