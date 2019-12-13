<?php

use Illuminate\Database\Seeder;

class RecettesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recettes')->delete();
        
        \DB::table('recettes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2019-12-12 13:55:26',
                'updated_at' => '2019-12-12 13:55:26',
                'titre_recette' => 'Amuse-bouches aux insectes',
                'description_recette' => 'Délicieuse recette à partager sans modération pendant l\'apéro.',
                'temps_preparation_recette' => 10,
                'temps_cuisson_recette' => 0,
                'difficulte_recette' => '1',
                'appetence_recette' => '1',
                'deroule_recette' => '10 g d’insectes déshydratés
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
Déguster cette recette fraiche et légère.source http://www.mangeons-des-insectes.com/recettes/amuse-bouches-insectes',
                'portion_recette' => 6,
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2019-12-12 13:55:26',
                'updated_at' => '2019-12-12 13:55:26',
                'titre_recette' => 'Quiche aux ténébrions',
                'description_recette' => 'Une quiche très facile à préparer',
                'temps_preparation_recette' => 15,
                'temps_cuisson_recette' => 30,
                'difficulte_recette' => '1',
                'appetence_recette' => '1',
                'deroule_recette' => 'un rouleau de pâte brisée
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
Mettre au four',
                'portion_recette' => 6,
                'user_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2019-12-12 13:55:26',
                'updated_at' => '2019-12-12 13:55:26',
                'titre_recette' => 'Verrines crumble',
                'description_recette' => 'Un dessert gourmand facile à préparer',
                'temps_preparation_recette' => 30,
                'temps_cuisson_recette' => 10,
                'difficulte_recette' => '1',
                'appetence_recette' => '1',
                'deroule_recette' => 'Pour les pommes

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

Mettre les morceaux de pommes au fond de la verrine. Verser le caramel salé sur les morceaux de pommes. Parsemer de crumble.',
                'portion_recette' => 6,
                'user_id' => 2,
            ),
            3 => 
            array (
                'id' => 5,
                'created_at' => '2019-12-13 19:58:22',
                'updated_at' => '2019-12-13 21:02:51',
                'titre_recette' => 'Fourmis au miel',
                'description_recette' => 'Dessert traditionnel Apache, d\'après les grands chefs Morris et Goscinny',
                'temps_preparation_recette' => 720,
                'temps_cuisson_recette' => 0,
                'difficulte_recette' => 'Expert',
                'appetence_recette' => 'Entomophage Débutant',
                'deroule_recette' => 'Capturer un visage pâle ennemi. Le ligoter au sol dehors et l\'enduire de miel sur tout le corps.<p>Appâter les fourmis en mettant un chemin de miel depuis la fourmilière jusqu\'au visage pâle.<br>
<p>Attendre que les fourmis le recouvrent entièrement, racler le mélange miel fourmis et le mettre dans une jarre.</p>
<p>Jeter le visage pâle ou le réserver pour un autre usage (non comestible, ugh).</p>
<p>Recouvrir de miel liquide pour empêcher les fourmis de s\'échapper.</p>
<p>Laisser reposer plusieurs heures, pour que les fourmis soient bien confites dans le miel.</p>
<p>Inviter la tribu et déguster avant de fumer le calumet.</p>
<p>
<br>
</p>
</p>',
                'portion_recette' => 30,
                'user_id' => 3,
            ),
        ));
        
        
    }
}