<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Velyn Solver',
            'username' => 'velyn-solver',
            'email' => 'velyn.solver@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::factory()->create([
            'name' => 'Okta Solver',
            'username' => 'okta-solver',
            'email' => 'okta.solver@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::factory()->create();
    }
}
