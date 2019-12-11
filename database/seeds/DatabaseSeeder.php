<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(InsectesTableSeeder::class);
        $this->call(UnitesTableSeeder::class);
        $this->call(Sites_PartenairesTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(RecettesTableSeeder::class);
        $this->call(Ingredients_RecettesTableSeeder::class);
        $this->call(Commentaire_RecettesTableSeeder::class);
        $this->call(ActusTableSeeder::class);
        $this->call(InfosTableSeeder::class);


    }
}
