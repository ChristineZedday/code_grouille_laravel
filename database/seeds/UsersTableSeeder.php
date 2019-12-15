<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Anonyme',
                'email' => 'a@a.fr',
                'email_verified_at' => NULL,
                'password' => '$2y$10$h6Qr4IslC.MLBr6sJ6myiuB8Ef3zmOf8/9tHw5UKkFHWfE8FL9N/a',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-12-15 16:07:18',
                'role' => 'utilisateur',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Curieux',
                'email' => 'machin@chose.fr',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wpAtWT0UWE0x2MHB3oeK3eNu4tlQLvCHoRUHNZG/FsT/H8i4ZeLT2',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'utilisateur',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Lucie Guerzillon',
                'email' => 'lulu@tra.bzh',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3.4Uu0/fWo7OOz1gsJzKz.4dfAJFaCg3nAYOrae0NBCAucxcCVwWy',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'admin',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Henri Fabre',
                'email' => 'hfabre@ciel.fr',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dfZZ65iB7K0/BynVzebCOO2rBCUYngM0ZFcctaUGDTvi8XzyPwU/a',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'utilisateur',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Curieuse',
                'email' => 'cunegonde@free.fr',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OIkqnFKF5Q5iQY02hneZCO5gyMnhbrYW0Q.pTN4taIYRPIWyLd6Ri',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'utilisateur',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mangetout',
                'email' => 'miam@naclou.ma',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f4KnqQj2gu6ujNmXrCFLUu1CQ1W..qcFH11M0K4Z1ntJQBHK2Rigy',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'role' => 'utilisateur',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Coyotito Junior',
                'email' => 'c@c.us',
                'email_verified_at' => NULL,
                'password' => '123',
                'remember_token' => NULL,
                'created_at' => '2019-12-15 16:00:15',
                'updated_at' => '2019-12-15 16:00:15',
                'role' => 'utilisateur',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Toto l\'escargot',
                'email' => 'toto@to.to',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oIGurBUoGcU7rOKLgbw.gOFcpxuoTpMEBiorEJH7kO6.8rPX1aaKm',
                'remember_token' => NULL,
                'created_at' => '2019-12-15 16:02:05',
                'updated_at' => '2019-12-15 16:02:05',
                'role' => 'utilisateur',
            ),
        ));
        
        
    }
}