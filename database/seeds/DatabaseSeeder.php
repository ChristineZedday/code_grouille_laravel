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
        $this->call(ImagesTableSeeder::class);
        $this->call(InsectesTableSeeder::class);
        $this->call(UnitesTableSeeder::class);
        $this->call(PartenairesTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(RecettesTableSeeder::class);

        $this->call(CommentairesTableSeeder::class);
        $this->call(ActusTableSeeder::class);
        $this->call(InfosTableSeeder::class);

       $this->call(ImageRecetteTableSeeder::class);
       $this->call(IngredientRecetteTableSeeder::class);
       
    }
}
