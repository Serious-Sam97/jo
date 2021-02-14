<template>
  <div>
    <div class="d-flex justify-center mt-7 mb-15">
      <label style="font-size: 25px">Projectos/ Ouça</label>
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
            <p class="text-caption">
              <b>Dois Peixes</b><br />
              Dois Peixes Synths, percussões, pads e processamento da guitarra e
              piano nesse single, que também conta com a colaboração de Otávio
              Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog)
              e Allen Alencar. Vídeo por Ênio Vital.
            </p>
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
          <p class="text-caption">
            <b>HENRI</b> (projeto em andamento)<br />
            Projeto com proposta indie-pop que faz referência a música disco e
            new wave da década de 80. Aqui gravo, produzo e mixo todas as
            faixas, além de compor parcialmente, trazendo instrumentos
            eletrônicos analógicos. Previsão de lançamento: início de 2022.
          </p>
        </div>
      </div>
      <div class="d-flex justify-space-between mt-5">
        <div :style="`width: 540px;`">
          <iframe
            width="100%"
            height="295px"
            scrolling="no"
            frameborder="no"
            allow="autoplay"
            src="https://w.soundcloud.com/player/?
url=https%3A//api.soundcloud.com/tracks/971403955%3Fsecret_token%3Ds-0qcyuuTTTkB&color=
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
              href="https://soundcloud.com/joeirente/corteaberto-prod-joe-irente-demo-reel/s-0qcyuuTTTkB"
              title="Corte Aberto prod. Joe Irente (demo reel)"
              target="_blank"
              style="color: #cccccc; text-decoration: none"
              >Corte Aberto prod. Joe Irente (demo reel)</a
            >
          </div>
          <p class="text-caption">
            <b>Corte Aberto – A Casa/ A Causa</b> (projeto em andamento)<br />
            Álbum de rock psicodélico gravado ao vivo, com todos os músicos no
            mesmo ambiente e numa acústica não-ideal. Minha função aqui foi
            gravar, produzir e mixar as faixas, mantendo a fidelidade com a
            performance. Também foram adicionados sons de foley gravados nos
            diferentes cômodos da casa. Previsão de lançamento: segundo semestre
            de 2021.
          </p>
        </div>
        <div :style="`width: 540px;`">
          <iframe
            src="https://open.spotify.com/embed/playlist/0kWhQL5LsGvrYJLF7dldGa"
            style="width: 100%"
            height="315px"
            frameborder="0"
            allowtransparency="true"
            allow="encrypted-media"
          ></iframe>

          <p class="text-caption">
            <b>Dolphinkids</b> <br />
            Banda de synth-pop em que componho, produzo e mixo desde 2016, além
            de tocar sintetizador e guitarra ao vivo. O primeiro EP “Bluebird”
            (2016) foi produzido digitalmente, de forma caseira e com vocais
            gravados não-idealmente. “Primavera” (2018) conta com uma produção
            mais complexa, marcado pelas várias camadas de pads e texturas
            atmosféricas. Em 2020, após dois anos de hiato, foi lançado o single
            “Les Miroirs”, que produzi usando principalmente sintetizadores e
            drum machines analógicos das décadas de 80 e 90.
          </p>
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
  },
};
</script>
<style scoped>
p {
  text-align: justify;
}
</style>