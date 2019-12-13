<?php

use Illuminate\Database\Seeder;

class UnitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unites')->insert([
            'nom_unite' => "pièce(s)",
        ]);


        DB::table('unites')->insert([
            'nom_unite' => "pincée(s)",
        ]);

        DB::table('unites')->insert([
            'nom_unite' => "g",
        ]);

        DB::table('unites')->insert([
            'nom_unite' => "kg",
        ]);

        DB::table('unites')->insert([
            'nom_unite' => "l",
        ]);

        DB::table('unites')->insert([
            'nom_unite' => "cl",
        ]);

        DB::table('unites')->insert([
            'nom_unite' => "cuillère à café",
        ]);
    }
}
