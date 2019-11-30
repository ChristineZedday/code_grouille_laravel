<?php

use Illuminate\Database\Seeder;

class InsectesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insectes')->insert([
            'nom_insecte' => "Ver de farine",
            'nom_latin_insecte' => "Tenebrio molitor L.",
            'ordre_insecte' => "Coléoptères",
            'description_insecte' => "C'est un insecte cosmopolite, probablement d'origine européenne, mais disséminé aux quatre coins du monde depuis longtemps, à cause des échanges commerciaux de denrées alimentaires dont il est friand. Il est capable de vivre dans des denrées stockées très sèches, notamment dans la farine, et on en trouvait de nombreuses larves dans les anciens moulins, d'où son nom de meunier. Sa larve se montre même capable de manger certaines formes de polystyrène expansé1. Il peut vivre pendant un an. ",
            
        ]);

        DB::table('insectes')->insert([
            'nom_insecte' => "Grillon",
            'nom_latin_insecte' => "Acheta domestica et autres genres",
            'ordre_insecte' => "Orthoptères",
            'description_insecte' => "Le comportement des grillons est fort varié selon les espèces. La plupart des grillons aiment la lumière et la chaleur du soleil, d'autres comme les Troglophylus et les Dolichopoda (ce dernier genre dans la famille voisine des Rhaphidophoridae) sont troglobies et ne vivent donc que dans des grottes, des caves noires, ou plus exceptionnellement, dans les tunnels du métro.

            En général, les grillons sont d'excellents fouisseurs, ils creusent des galeries parfois profondes et y vivent. D'autres espèces sont myrmécophiles ou termitophiles : ils vivent dans des nids de fourmis ou de termites mais ce comportement est plus rare.
            
            Le grillon est omnivore. Sa durée de vie est d'environ un an. ",
            
        ]);

        DB::table('insectes')->insert([
            'nom_insecte' => "scarabée",
            'nom_latin_insecte' => "Nombreux genres et espèces",
            'ordre_insecte' => "Coléoptères",
            'description_insecte' => "Appartenant à l’ordre des coléoptères, le scarabée est un insecte noir et luisant. Il existe plus de 30 000 espèces de scarabées dans le monde (Wikipédia). Trapu, le scarabée a une forme arrondie, une tête particulièrement courte, qui est collée à son corps, ainsi que des pointes assez petites qui dépassent de sa tête. Comme tous les coléoptères, le scarabée possède également deux ailes antérieures qui protègent les deux ailes postérieures, qui sont repliées dessous. Généralement, le scarabée adulte se nourrit de fruits et légumes. Leur durée de vie s’étend de quelques mois à plusieurs années. ",
            
        ]);


       
    }
}
