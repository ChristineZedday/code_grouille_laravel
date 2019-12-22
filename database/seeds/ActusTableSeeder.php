<?php

use Illuminate\Database\Seeder;

class ActusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('actus')->delete();
        
        \DB::table('actus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2019-12-12 13:55:26',
                'updated_at' => '2019-12-12 13:55:26',
                'texte_actu' => 'Venez déguster les bons chocolats aux insectes préparés par l\'association \'Grouille\' le 20 décembre prochain entre 14h00 et 15h00',
                'titre_actu' => 'Dégustation de chocolats pour Noël',
                'resume_actu' => 'L\'association organise une dégustation de chocolats aux insectes le 20 décembre à l\'espace culturel de Montegrillon',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2019-12-09 13:55:26',
                'updated_at' => '2019-12-10 13:55:26',
                'texte_actu' => 'Un scandale à Trou-les-bouses-en-Cambrousse, on a découvert que les lasagnes produites par l\'usine agro-alimentaire qui fait la fierté du pays contenait une forte proportion de scarabée, importé frauduleusement des pays de l\'Ouest. Cette usine étant la principale pourvoyeuse d\'emplois de la régio depuis la fermeture des pinces à linge Hopdebec, la consternation est immense à Trou et ses environs.',
                'titre_actu' => 'Scandale: de la viande de scarabée dans les lasagnes',
                'resume_actu' => 'Un scandale à Trou-les-bouses-en-Cambrousse, on a découvert que les lasagnes produites par l\'usine agro-alimentaire qui fait la fierté du pays',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2019-12-10 13:55:26',
                'updated_at' => '2019-12-12 13:55:26',
                'texte_actu' => 'Brigitte Bardot mène une campagne contre l\'insecterie halal de Trifouillis-les-oies qui décapite les grillons sans étourdissement préalable. C\'est la L214 qui a alerté la célèbre actrice sur les cruautés que subissent les malheureux grillons dans l\'insecterie. Le patron se défend en arguant que l\'étourdissement électrique carbonise les insectes et les rend totalement impropres à la consommation.',
                'titre_actu' => 'Brigitte Bardot s\'insurge contre l\'abattage rituel des grillons',
                'resume_actu' => 'Brigitte Bardot mène une campagne contre l\'insecterie halal de Trifouillis-les-oies qui décapite les grillons sans étourdissement préalable',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2019-12-09 13:55:26',
                'updated_at' => '2019-12-16 15:49:56',
                'texte_actu' => 'Notre association souhaite promouvoir les insectes et l\'alimentation à base d\'insecte. 
Ne cherchez plus à vous débarasser des grillons, des vers de farine, des scarabés ou des fourmis en les écrasant 
avec votre pied ou en les exterminant avec des produits chimiques. Ces derniers sont comestibles. Ce serait dommage de se priver de 
cette source importante de protéines. Gôuter les, partagez vos recettes et parlez-en vos amis. Lucie Guerzillon',
                'titre_actu' => 'Les insectes à la une : Le mot de Lucie',
                'resume_actu' => 'Les insectes souvent mal connus ou mal aimés sont mis en avant dans ce site. Apprenez à les connaitre pour mieux apprécier les "apprécier" !',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2019-12-15 14:51:51',
                'updated_at' => '2019-12-15 14:51:51',
                'texte_actu' => 'C\'est sans doute pour cela que notre bien cher ami François de R., indiscutablement un écologiste sincère et convaincu, ne se rend jamais à nos dégustations. Il parait qu\'il a très mal digéré un homard, récemment...',
                'titre_actu' => 'Allergiques aux crustacés? Ne pas manger d\'insectes!',
                'resume_actu' => 'La parenté étant grande entre les insectes et les crustacés --les deux groupes appartiennent aux Arthropodes Antennates, donc les insectes sont plus proches des crustacés que des araignées qui sont des Arthropodes Chelicerates-- , les personnes allergiques aux crustacés doivent éviter les insectes et vice-versa. Quel dommage!<p>
<br>
</p>',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2019-12-22 11:31:26',
                'updated_at' => '2019-12-22 11:31:26',
                'texte_actu' => 'La confection de vêtements en peau d\'insectes s\'avère plus ardue qu\'il ne l\'avait prévue au départ. En effet, les machines à coudre ne sont pas du tout adaptées à ce genre de matériaux. Du coup, les 3/4 des couturières de M.Bousier ont démissionné. Le quart restant, Mme Clarisse Bousier, menace de divorcer. Mais notre jeune et talentueux styliste ne s\'avoue pas vaincu pour autant. Il va s\'atteler lui-même à la couture, à la main, et espère être prêt pour la Biennale de 2022.',
                'titre_actu' => 'Tanguy Bousier ne sera pas prêt pour la Biennale de la mode à Pas-de-Salage-sur-Sortie',
                'resume_actu' => 'Tanguy Bousier projetait de nous présenter sa nouvelle collection de vêtements en peau d\'insectes pour la Biennale de Pas-de-Salage-sur-Sortie, qui aura lieu en février 2020.',
            ),
        ));
        
        
    }
}