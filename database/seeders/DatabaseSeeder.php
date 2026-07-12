<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

        if (!User::where('email', 'soufainnajmi@gmail.com')->exists()) {
            User::factory()->create([
                'name' => 'Soufain Najmi',
                'email' => 'soufainnajmi@gmail.com',
                'password' => bcrypt('soufain.2004'),
                'is_admin' => true,
            ]);
        }

        \App\Models\Category::firstOrCreate(['slug' => 'laravel'], ['name' => 'Laravel', 'color' => 'red']);
        \App\Models\Category::firstOrCreate(['slug' => 'php'], ['name' => 'PHP', 'color' => 'blue']);
        \App\Models\Category::firstOrCreate(['slug' => 'n8n'], ['name' => 'n8n', 'color' => 'orange']);
        \App\Models\Category::firstOrCreate(['slug' => 'ai'], ['name' => 'AI', 'color' => 'purple']);
    }
}
