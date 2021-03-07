<?php

use App\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SeedProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $projects = [
            [
                'title' => 'Dois Peixes',
                'description_pt' => 'Synths, percussões, pads e processamento da guitarra e piano nesse single, que também conta com a colaboração de Otávio Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog) e Allen Alencar. Vídeo por Ênio Vital.',
                'description_en' => 'Synths, percussion, pads, guitar and piano processing, in this single, in collaboration with Otávio Carvalho (Vitrola Sintética), Victor Meira (Bratislava, Godasadog) and Allen Alencar. Video by Ênio Vital.',
                'type' => 0,
                'iframe' => ' <iframe
            style="width: 100%"
            height="315px"
            src="https://www.youtube.com/embed/gavHNe8peD4"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>'
            ],
            [
                'title' => 'HENRI (work in progress)',
                'description_pt' => 'Projeto com proposta indie-pop que faz referência a música disco e new wave da década de 80. Aqui gravo, produzo e mixo todas as faixas, além de compor parcialmente, trazendo instrumentos eletrônicos analógicos. Previsão de lançamento: início de 2022.',
                'description_en' => 'Indie-pop project that references 80s disco and new wave. All tracks are recorded, produced and mixed by me. I also compose partially, bringing analog electronic instruments. Expected release: early 2022.',
                'type' => 1,
                'iframe' => '   <iframe
            width="100%"
            height="295px"
            scrolling="no"
            frameborder="no"
            allow="autoplay"
            src="https://w.soundcloud.com/player/?
url=https%3A//api.soundcloud.com/tracks/971401771%3Fsecret_token%3Ds-Tqf2m0C8vfQ&color=
%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true
"
          ></iframe>'
            ],
            [
                'title' => 'Corte Aberto – A Casa/ A Causa (projeto em andamento)',
                'description_pt' => 'Álbum de rock psicodélico gravado ao vivo, com todos os músicos no mesmo ambiente e numa acústica não-ideal. Minha função aqui foi gravar, produzir e mixar as faixas, mantendo a fidelidade com a performance. Também foram adicionados sons de foley gravados nos diferentes cômodos da casa. Previsão de lançamento: segundo semestre de 2021.',
                'description_en' => 'Psychedelic rock album recorded live, with all musicians in the same room and on non-ideal acoustics. All tracks recorded, produced and mixed by me, staying true to the performance. During the album, there were also added foley recordings from all over the house. Expected release: mid 2021.',
                'type' => 1,
                'iframe' => '  <iframe
            width="100%"
            height="295px"
            scrolling="no"
            frameborder="no"
            allow="autoplay"
            src="https://w.soundcloud.com/player/?
url=https%3A//api.soundcloud.com/tracks/971403955%3Fsecret_token%3Ds-0qcyuuTTTkB&color=
%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true
"
          ></iframe>'
            ],
            [
                'title' => 'Dolphinkids',
                'description_pt' => 'Banda de synth-pop em que componho, produzo e mixo desde 2016, além de tocar sintetizador e guitarra ao vivo. O primeiro EP “Bluebird” (2016) foi produzido digitalmente, de forma caseira e com vocais gravados não-idealmente. “Primavera” (2018) conta com uma produção mais complexa, marcado pelas várias camadas de pads e texturas atmosféricas. Em 2020, após dois anos de hiato, foi lançado o single “Les Miroirs”, que produzi usando principalmente sintetizadores e drum machines analógicos das décadas de 80 e 90.',
                'description_en' => 'Synth-pop band where I produce, compose, mix and play synthesizer/ guitar live since 2016. The debut “Bluebird” EP (2016) was digitally produced in the bedroom with vocals recorded non-ideally. “Primavera” EP (2018) had a more complex production, defined by its numerous pads and atmospheric textures. In 2020, after a two year hiatus, we released “Les Miroirs”, which I produced using mostly 80s/ 90s synths and drum machines.',
                'type' => 0,
                'iframe' => ' <iframe
            src="https://open.spotify.com/embed/playlist/0kWhQL5LsGvrYJLF7dldGa"
            style="width: 100%"
            height="315px"
            frameborder="0"
            allowtransparency="true"
            allow="encrypted-media"
          ></iframe>'
            ]
        ];

        Project::insert($projects);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
