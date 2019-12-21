<?php

use Illuminate\Database\Seeder;

class InsectesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('insectes')->delete();
        
        \DB::table('insectes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => '2019-12-13 13:15:03',
                'nom_insecte' => 'Ver de farine',
                'nom_latin_insecte' => 'Tenebrio molitor L.',
                'ordre_insecte' => 'Coléoptères',
                'description_insecte' => 'C\'est un insecte cosmopolite, probablement d\'origine européenne, mais disséminé aux quatre coins du monde depuis longtemps, à cause des échanges commerciaux de denrées alimentaires dont il est friand. Il est capable de vivre dans des denrées stockées très sèches, notamment dans la farine, et on en trouvait de nombreuses larves dans les anciens moulins, d\'où son nom de meunier. Sa larve se montre même capable de manger certaines formes de polystyrène expansé1. Il peut vivre pendant un an.',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => '2019-12-16 15:15:49',
                'nom_insecte' => 'Grillon',
                'nom_latin_insecte' => 'Acheta domestica et autres genres',
                'ordre_insecte' => 'Orthoptères',
            'description_insecte' => 'Le comportement des grillons est fort varié selon les espèces. La plupart des grillons aiment la lumière et la chaleur du soleil, d\'autres comme les Troglophylus et les Dolichopoda (ce dernier genre dans la famille voisine des Rhaphidophoridae) sont troglobies et ne vivent donc que dans des grottes, des caves noires, ou plus exceptionnellement, dans les tunnels du métro.

En général, les grillons sont d\'excellents fouisseurs, ils creusent des galeries parfois profondes et y vivent. D\'autres espèces sont myrmécophiles ou termitophiles : ils vivent dans des nids de fourmis ou de termites mais ce comportement est plus rare.

Le grillon est omnivore. Sa durée de vie est d\'environ un an.',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => '2019-12-16 15:17:06',
                'nom_insecte' => 'Scarabée',
                'nom_latin_insecte' => 'Nombreux genres et espèces',
                'ordre_insecte' => 'Coléoptères',
            'description_insecte' => 'Appartenant à l’ordre des coléoptères, le scarabée est un insecte noir et luisant. Il existe plus de 30 000 espèces de scarabées dans le monde (Wikipédia). Trapu, le scarabée a une forme arrondie, une tête particulièrement courte, qui est collée à son corps, ainsi que des pointes assez petites qui dépassent de sa tête. Comme tous les coléoptères, le scarabée possède également deux ailes antérieures qui protègent les deux ailes postérieures, qui sont repliées dessous. Généralement, le scarabée adulte se nourrit de fruits et légumes. Leur durée de vie s’étend de quelques mois à plusieurs années.',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2019-12-13 13:54:35',
                'updated_at' => '2019-12-13 13:54:35',
                'nom_insecte' => 'Fourmi cro-onde',
                'nom_latin_insecte' => 'Formica cro-onda',
                'ordre_insecte' => 'Hyménoptères',
                'description_insecte' => 'Il existe un grand nombre d\'espèces de fourmis, dont certaines ne sont pas comestibles car elles ont une trop forte teneur en acide formique ce qui donne vraiment mauvais goût aux plats. La fourmi la plus utilisée en cuisine est la fourmi cro-onde.',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2019-12-16 15:25:03',
                'updated_at' => '2019-12-16 15:25:03',
                'nom_insecte' => 'Libellule',
                'nom_latin_insecte' => 'Libellulum',
                'ordre_insecte' => 'Truc qui vole',
                'description_insecte' => 'Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2019-12-16 15:25:44',
                'updated_at' => '2019-12-16 15:25:44',
                'nom_insecte' => 'Grigri',
                'nom_latin_insecte' => 'grigri',
                'ordre_insecte' => 'Truc à antenne',
                'description_insecte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2019-12-21 17:43:00',
                'updated_at' => '2019-12-21 17:43:00',
                'nom_insecte' => 'Fine mouche',
                'nom_latin_insecte' => 'Musca sapiens sapiens',
                'ordre_insecte' => 'Diptères',
                'description_insecte' => 'On consomme plutôt sa larve, l\'asticot. En fait, accidentellement le plus souvent.',
            ),
        ));
        
        
    }
}