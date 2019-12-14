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

        \DB::table('infos')->delete();
        DB::table('actus')->insert(array (
            0 =>
            array (
            'id' => 1,   
            'titre_actu' => "Dégustation de chocolats pour Noël",
            'resume_actu' => "L'association organise une dégustation de chocolats aux insectes le 20 décembre à l'espace culturel de Montegrillon",
            'texte_actu' => "Venez déguster les bons chocolats aux insectes préparés par l'association 'Grouille' le 20 décembre prochain entre 14h00 et 15h00",
            'created_at' => "2019-12-12 13:55:26",
            'updated_at' => "2019-12-12 13:55:26",
            ),

            1 => 
            array (
            'id' => 2,
            'titre_actu' => "Scandale: de la viande de scarabée dans les lasagnes",
            'resume_actu' => "Un scandale à Trou-les-bouses-en-Cambrousse, on a découvert que les lasagnes produites par l'usine agro-alimentaire qui fait la fierté du pays",
            'texte_actu' => "Un scandale à Trou-les-bouses-en-Cambrousse, on a découvert que les lasagnes produites par l'usine agro-alimentaire qui fait la fierté du pays contenait une forte proportion de scarabée, importé frauduleusement des pays de l'Ouest. Cette usine étant la principale pourvoyeuse d'emplois de la régio depuis la fermeture des pinces à linge Hopdebec, la consternation est immense à Trou et ses environs.",
            'created_at' => "2019-12-09 13:55:26",
            'updated_at' => "2019-12-10 13:55:26",
            ),
            2 => 
            array (
            'id' => 3,
            'titre_actu' => "Brigitte Bardot s'insurge contre l'abattage rituel des grillons",
            'resume_actu' => "Brigitte Bardot mène une campagne contre l'insecterie halal de Trifouillis-les-oies qui décapite les grillons sans étourdissement préalable",
            'texte_actu' => "Brigitte Bardot mène une campagne contre l'insecterie halal de Trifouillis-les-oies qui décapite les grillons sans étourdissement préalable. C'est la L214 qui a alerté la célèbre actrice sur les cruautés que subissent les malheureux grillons dans l'insecterie. Le patron se défend en arguant que l'étourdissement électrique carbonise les insectes et les rend totalement impropres à la consommation.",
            'created_at' => "2019-12-10 13:55:26",
            'updated_at' => "2019-12-12 13:55:26",
            ),

            3 => 
            array (
            'id' => 4,
            'titre_actu' => "Les insectes à la une : Le mot de Lucie ",
            'resume_actu' => "Les insectes souvent mal connus ou mal aimés sont mis en avant dans ce site. Apprenez à les connaitre pour mieux apprécier les \"apprécier\" !",
            'texte_actu' => "Notre association souhaite promouvoir les insectes et l'alimentation à base d'insecte. 
            Ne cherchez plus à vous débarasser des grillons, des vers de farine, des scarabés ou des fourmis en les écrasant 
            avec votre pied ou en les exterminant avec des produits chimiques. Ces derniers sont comestibles. Ce serait dommage de se priver de 
            cette source importante de protéines. Gôuter les, partagez vos recettes et parlez-en vos amis. Lucie Guerzillon ",
            'created_at' => "2019-12-09 13:55:26",
            'updated_at' => "2019-12-09 13:55:26",
            ),
        
        ));



    }
}
