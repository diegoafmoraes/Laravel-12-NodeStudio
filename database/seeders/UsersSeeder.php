<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::Create([
            'firstName' => 'Diego',
            'lastName' => 'Moraes',
            'hid' => Str::random(32),
            'email' => 'dfmoraes@gmail.com',
            'password' => bcrypt('12345'),
         ]);
    }
}
