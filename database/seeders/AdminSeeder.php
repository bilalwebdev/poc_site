<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@themesbrand.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'remember_token' => 'XQpE1re2gyD2s8QkEwJKqYalM0M6IEPnNx22cDUKbMTzkoTvwVjANlLDTv39',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
