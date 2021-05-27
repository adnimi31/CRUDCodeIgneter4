<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NegaraSeeder extends Seeder
{
    public function run()
    {
        // menggunakan faker dari https://github.com/fzaninotto/Faker, kunjungi saja dokumentasi ada disana
        $faker = \Faker\Factory::create();
        // membuat perulangan sebanyak 200 kali isi data
        for ($i = 0; $i < 200; $i++) {
            $data = [
                'namanegara' => $faker->country,
                'kota'    => $faker->city
            ];
            // Using Query Builder
            $this->db->table('negara')->insert($data);
        }


        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);


    }
}
