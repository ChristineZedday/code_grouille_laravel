<?php

use Illuminate\Database\Seeder;

class RecettesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recettes')->insert([
            'titre_recette' => "Amuse-bouches aux insectes",
            'description_recette' => "Délicieuse recette à partager sans modération pendant l'apéro.",
            'temps_preparation_recette' => "10",
            'temps_cuisson_recette' => "0",
            'difficulte_recette' => "1",
            'appetence_recette' => "1",
            'deroule_recette' => "10 g d’insectes déshydratés
            1 concombre
            Du fromage blanc
            1 Tomate
            Olives noires
            Basilic
            Ail et fines herbes, Trancher le concombre en fine lamelles.
            Ecraser l’ail et l’incorporer au fromage blanc.
            Ajouter les fines herbes hachées au fromage blanc.
            Couper la tomate et les olives noires en petits cubes.
            Etaler du fromage blanc sur la tranche de concombre.
            Ajouter quelques cubes de tomates et d’olives noires.
            Déposer quelques insectes sur la préparation ainsi qu’une feuille de basilic.
            Déguster cette recette fraiche et légère.source http://www.mangeons-des-insectes.com/recettes/amuse-bouches-insectes",
            'portion_recette' => "6",
            'user_id' => "2",

            ]);

        DB::table('recettes')->insert([
            'titre_recette' => "Quiche aux ténébrions",
            'description_recette' => "Une quiche très facile à préparer",
            'temps_preparation_recette' => "15",
            'temps_cuisson_recette' => "30",
            'difficulte_recette' => "1",
            'appetence_recette' => "1",
            'deroule_recette' => "un rouleau de pâte brisée
            10 g d’insectes déshydratés
            3 oeufs
            250 g de crème fraîche
            150 g de lardons
            muscade
            sel, poivre Pré-chauffer le four à 200°C (thermostat 6-7).
            Dérouler la pâte brisée et la placer dans un plat à tarte. Piquer le fond avec une fourchette.
            Mélanger les oeufs battus, les insectes déshydratés  et la crème fraîche.
            Saler, poivrer, et ajouter la muscade selon votre convenance.
            Verser la préparation sur le fond de pâte.
            Mettre au four" ,
            'portion_recette' => "6",
            'user_id' => "1",

            ]);

            DB::table('recettes')->insert([
                'titre_recette' => "Verrines crumble",
                'description_recette' => "Un dessert gourmand facile à préparer",
                'temps_preparation_recette' => "30",
                'temps_cuisson_recette' => "10",
                'difficulte_recette' => "1",
                'appetence_recette' => "1",
                'deroule_recette' => "Pour les pommes

                4 pommes
                25g de beurre
                1 cuillère à soupe de sucre roux
                1 cuillère à soupe de cannelles (ou épices à pain d’épices)
                Pour le caramel salé

                80 g sucre en poudre
                12 cl crème fleurette
                60 g beurre 1/2 sel
                Faire à sec un caramel blond avec le sucre.
                Chauffer à part la crème fleurette.
                La verser  petit à petit dans le caramel sans cesser de remuer.
                Porter à ébullition.
                Incorporer le beurre coupé en petits cubes. Remuer, garder à température ambiante.
                Pour le crumble

                50 g farine blanche
                10 g d’insectes déshydratés
                50 g beurre
                50 g sucre
                50 g poudre d’amandes
                Hacher les insectes.
                Mélanger du bout des doigts tous les ingrédients.
                A cuire sur plaque : 180°C (th.6) – 10 min.
                A surveiller.
                Assemblage

                Mettre les morceaux de pommes au fond de la verrine. Verser le caramel salé sur les morceaux de pommes. Parsemer de crumble." ,
                'portion_recette' => "6",
                'user_id' => "2",

                ]);
    }
}
