<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'isaacnegreiros10@gmail.com',
                'firstName' => 'Isaac',
                'lastName' => 'Negreiros',
                'password' => Hash::make('soleil1234'),
                'role' => 'admin',
            ],
            [
                'email' => 'julienfortin05@gmail.com',
                'firstName' => 'Julien',
                'lastName' => 'Fortin',
                'password' => Hash::make('soleil1234'),
                'role' => 'admin',
            ],
            [
                'email' => 'normal@netflix.com',
                'firstName' => 'Normal',
                'lastName' => 'Doe',
                'password' => Hash::make('normal'),
                'role' => 'normal',
            ],
            [
                'email' => 'kid@netflix.com',
                'firstName' => 'Kid',
                'lastName' => 'Doe',
                'password' => Hash::make('kid'),
                'role' => 'kid',
            ],
        ]);
    }
}
