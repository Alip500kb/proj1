<?php

namespace Database\Seeders;

use App\Models\administrator;
use App\Models\category;
use App\Models\GameList;
use App\Models\Pemain;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        GameList::factory()->count(50)->create();
        category::factory()->count(5)->create();
        administrator::create([
            'id' => '1',
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);
        Pemain::create([
            'id' => '1',
            'username' => 'pemain',
            'password' => Hash::make('pemain')
        ]);
    }
}
