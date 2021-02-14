<template>
  <!-- <div class="d-flex align-content-center flex-wrap"> -->
  <v-container
    :fill-height="!isMobile"
    :style="`${isMobile ? '' : 'width: 70%; margin-left: 44px'}`"
  >
    <div
      :class="`d-flex justify-space-between ${
        isMobile ? 'align-start' : 'align-center'
      }`"
    >
      <p class="mr-4" style="text-align: justify">
        Me chamo Joe Irente. Sou produtor musical, compositor e engenheiro de
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
        produção, mixagem, composição ou conceptualização do seu projeto!
      </p>
      <img src="/joe.jpg" :width="isMobile ? '100px' : '300px'" />
    </div>
  </v-container>
  <!-- </div> -->
</template>

<script>
export default {
  name: "Home",
  props: {
    isMobile: Boolean,
  },
};
</script>
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
</style>