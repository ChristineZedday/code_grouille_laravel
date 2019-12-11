<?php

use Illuminate\Database\Seeder;

class ActusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actus')->insert([
            'titre_actu' => "Dégustation de chocolats pour Noël",
            'resume_actu' => "L'association organise une dégustation de chocolats aux insectes le 20 décembre à l'espace culturel de Montegrillon",
            'texte_actu' => "Venez déguster les bons chocolats aux insectes préparés par l'association 'Grouille' le 20 décembre prochain entre 14h00 et 15h00",

        ]);

        DB::table('actus')->insert([
            'titre_actu' => "Scandale: de la viande de scarabée dans les lasagnes",
            'resume_actu' => "Un scandale à Trou-les-bouses-en-Cambrousse, on a découvert que les lasagnes produites par l'usine agro-alimentaire qui fait la fierté du pays",
            'texte_actu' => "Un scandale à Trou-les-bouses-en-Cambrousse, on a découvert que les lasagnes produites par l'usine agro-alimentaire qui fait la fierté du pays contenait une forte proportion de scarabée, importé frauduleusement des pays de l'Ouest. Cette usine étant la principale pourvoyeuse d'emplois de la régio depuis la fermeture des pinces à linge Hopdebec, la consternation est immense à Trou et ses environs.",


        ]);
        DB::table('actus')->insert([
            'titre_actu' => "Brigitte Bardot s'insurge contre l'abattage rituel des grillons",
            'resume_actu' => "Brigitte Bardot mène une campagne contre l'insecterie halal de Trifouillis-les-oies qui décapite les grillons sans étourdissement préalable",
            'texte_actu' => "Brigitte Bardot mène une campagne contre l'insecterie halal de Trifouillis-les-oies qui décapite les grillons sans étourdissement préalable. C'est la L214 qui a alerté la célèbre actrice sur les cruautés que subissent les malheureux grillons dans l'insecterie. Le patron se défend en arguant que l'étourdissement électrique carbonise les insectes et les rend totalement impropres à la consommation.",


        ]);



    }
}
