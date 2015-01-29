<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run() {
        User::truncate();
        User::create([
        'username' => 'demo',
        'password' => '123456'
        ]);
    }

}
