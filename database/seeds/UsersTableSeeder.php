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
                'name' => "Anonyme",
                'email' => "a@a.fr",
                'password' => bcrypt ("123456789"),
                'role' => "utilisateur",

            ]);
            DB::table('users')->insert([
                'name' => "Curieux",
                'email' => "machin@chose.fr",
                'password' => bcrypt ("123456789"),
                'role' => "utilisateur",

            ]);
            DB::table('users')->insert([
                'name' => "Lucie Guerzillon",
                'email' => "lulu@tra.bzh",
                'password' => bcrypt ("admin123"),
                'role' => "admin",

            ]);
            DB::table('users')->insert([
                'name' => "Henri Fabre",
                'email' => "hfabre@ciel.fr",
                'password' => bcrypt ("123456789"),
                'role' => "utilisateur",

            ]);
            DB::table('users')->insert([
                'name' => "Curieuse",
                'email' => "cunegonde@free.fr",
                'password' => bcrypt ("123456789"),
                'role' => "utilisateur",

            ]);
            DB::table('users')->insert([
                'name' => "Mangetout",
                'email' => "miam@naclou.ma",
                'password' => bcrypt ("123456789"),
                'role' => "utilisateur",

            ]);
        }

}
