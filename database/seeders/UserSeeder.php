<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserSeeder
 * 
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = [
            'name' => 'Admin Admin',
            'email' => 'admin@ecommerce.com',
            'password' => Hash::make('Admin@123'),
            'user_type' => 1,
        ];

        $appUser = [
            'name' => 'Bhavik Bhatiya',
            'email' => 'bhavik.bhatiya@ecommerce.com',
            'password' => Hash::make('Bhavik@123'),
            'user_type' => 1,
        ];

        User::create($adminUser);
        User::create($appUser);
    }
}
