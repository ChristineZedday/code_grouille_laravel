<?php

use Illuminate\Database\Seeder;

class MentionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentions')->insert([
            'texte_mentions' => "mentions légales du site",
            ]);
    }
}
