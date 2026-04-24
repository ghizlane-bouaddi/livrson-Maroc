<?php

namespace Database\Seeders;

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
        $this->call([
        RoleSeeder::class,

        CategorySeeder::class,

    ]);

        User::create([
    'name' => 'Ghizlane Bouaddi',
    'email' => 'Ghizlane@gmail.com',
    'password' => Hash::make('Ghizlane@gmail.com'),
    'role_id' => 1,
]);



    }


}
