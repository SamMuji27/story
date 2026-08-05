<?php

namespace Database\Seeders;

use App\Models\Story;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([UserSeeder::class]);
        Story::factory(20)->recycle([
            User::all()
        ])->create();

        // Story::factory(20)
        //     ->recycle([
        //         User::factory(5)
        //             ->create(),
        //         $user
        //     ])
        //     ->create();

        // Story::factory()->create([
        //     'title' => 'Story one of many',
        //     'slug' => 'story-one-of-many'
        // ]);
    }
}
