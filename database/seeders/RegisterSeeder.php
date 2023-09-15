<?php

namespace Database\Seeders;

use App\Models\Register;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as RegFaker;

class RegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = RegFaker::create();

        for ($i = 0; $i <= 100; $i++) {


            $register = new Register();
            $register->name = $fake->name;
            $register->username = $fake->username;
            $register->city = $fake->city;
            $register->email = $fake->email;
            $register->password = $fake->password;
            $register->save();
        }
    }
}
