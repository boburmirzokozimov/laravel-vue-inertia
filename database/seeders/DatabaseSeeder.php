<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gift;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
//        User::factory(100)->create();

        User::factory()->create([
            'name' => 'Boburmirzo Kozimov',
            'email' => 'john@example.com',
            'password' => Hash::make('test')
        ]);

        Gift::factory(20)->create();
    }
}
