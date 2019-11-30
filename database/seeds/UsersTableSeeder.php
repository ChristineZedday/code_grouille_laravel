<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom_pseudo' => "Curieux",
            'email' => "machin@chose.fr",
            'password' => bcrypt ("1234"),
            'role' => "",
            
        ]);
        DB::table('users')->insert([
            'nom_pseudo' => "Lucie Guerzillon",
            'email' => "lulu@tra.bzh",
            'password' => bcrypt ("admin"),
            'role' => "",
            
        ]);
    }
}
