<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'name' => 'Admin LaraPress',
            'email' => 'admin@larapress.test',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        // Demo User
        User::create([
            'name' => 'User Demo',
            'email' => 'user@larapress.test',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        $this->command->info('✅ Default users created successfully!');
        $this->command->info('📧 Admin: admin@larapress.test | Password: password123');
        $this->command->info('📧 User: user@larapress.test | Password: password123');
    }
}
