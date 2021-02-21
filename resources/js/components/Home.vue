<template>
  <v-container
    :fill-height="!isMobile"
    :class="!isMobile ? 'home-desktop' : ''"
    :style="`${isMobile ? '' : 'width: 70%; margin-left: 44px'}`"
  >
    <div
      :class="`d-flex justify-space-between ${
        isMobile ? 'align-start' : 'align-center'
      }`"
    >
      <p
        :class="`mr-4 ${!isMobile ? 'line-height' : ''}`"
        style="text-align: justify"
      >
        {{ homeText }}
      </p>
      <img src="/joe.jpg" :width="isMobile ? '100px' : '300px'" />
    </div>
  </v-container>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      ptbrText: `Me chamo Joe Irente. Sou produtor musical, compositor e engenheiro de
mixagem, atualmente residindo em São Paulo – SP. Minha trajetória com
música e computadores começou muito cedo. Ainda na época da escola
passei dos estudos de guitarra às primeiras experiências com DAWs,
compondo minhas primeiras batidas. Em 2015 comecei a me
profissionalizar, me associando a outros músicos e assinando as
produções dos meus primeiros projetos. A cada novo projeto e através da
troca com outros artistas, mantenho a mente aberta, buscando novas
sonoridades e técnicas que se encaixem na proposta. Hoje produzo e mixo
artistas e bandas de diversos gêneros musicais, ciente de que esse é um
caminho de constante aprendizado, frente à oferta extremamente dinâmica
de softwares e inovações tecnológicas. Meu método de produção e mixagem
é criativo, num sentido de que tomo a liberdade para gravar novas
camadas, novos instrumentos e mexer nos arranjos. Pra mim, o conceito do
projeto está acima de tudo, é a partir dele que defino quais
equipamentos, softwares e técnicas serão utilizadas. Não acredito que
haja uma maneira correta de produzir música, nem que um estúdio vintage
caríssimo vá salvar uma composição ruim. Acredito que cada projeto tem
suas exigências e particularidades, acredito na liberdade criativa e na
experimentação. Por isso marco diversas reuniões e busco conhecer toda a
obra do artista com quem trabalho, além de buscar referências fora do
mundo da música: em filmes, artes plásticas e performances. Nesse site
você vai encontrar projetos que produzi e que produzo atualmente, com
breves descrições do processo. Sinta-se à vontade para entrar em contato
se você tem qualquer dúvida ou interesse em trabalhar comigo, seja na
produção, mixagem, composição ou conceptualização do seu projeto!`,
      enText: `My name is Joe Irente. I’m a music producer, composer and mixing engineer, based in São Paulo – SP. My
history with music and computers started early. During school I went from guitar studies to my first experiences with
DAWs, creating my first beats. In 2015 I started associating with other musicians and signing the production of my first
projects. At each new project and with the exchange with other musicians, I keep an open mind, exploring new sound
and techniques for each proposal. Nowadays I produce and mix artists/ bands from numerous genres, aware that there’s
always something to learn, in front of an extremely dynamic music software and technology offer.
My mixing method is creative, in a sense that I feel free to record new layers, new instruments and
arrangements. As I see, the concept is the most important aspect of the project, based on it I define which gear, software
and techniques will be used. I don’t believe there’s a correct way to produce music, neither that a expensive studio will
save a poor arrangement. I believe that each project has its own needs and peculiarities, I believe in creative freedom
and experimentation. For that reason, I schedule multiple meetings and get familiar with all the artist’s work, also
searching references outside the music world: in film, visual arts and performances.
In this site you’ll find projects I’ve produced and produce nowadays, with brief descriptions of the process. Feel
free to contact me if there’s any doubt or if you have interest in working with me, be it in the production, mixing,
composing or conceptualization of your project!
        `,
    };
  },
  props: {
    isMobile: Boolean,
  },
  computed: {
    homeText() {
      if (localStorage.getItem("language") === "ptbr") {
        return this.ptbrText;
      }
      return this.enText;
    },
  },
};
</script>
<style scoped>
.home-desktop {
  height: 95%;
  padding-bottom: 0;
}
</style>
<style>
img {
  border-radius: 50%;
}
p {
  color: #4d4d4d;
  font-size: 15px !important;
  line-height: 24px !important;
  font-style: inherit !important;
  font-variant-ligatures: inherit;
  font-variant-caps: inherit;
  font-variant-numeric: inherit;
  font-variant-east-asian: inherit;
  font-weight: inherit;
  font-stretch: inherit;
  font-size: 100%;
  line-height: inherit;
  font-family: inherit;
}

.row {
  position: fixed;
  height: 200px;
  top: 35%;
  /* left: 80%; */
  margin-top: -100px; /* Negative half of height. */
}

.line-height {
  line-height: 140% !important;
}
</style>