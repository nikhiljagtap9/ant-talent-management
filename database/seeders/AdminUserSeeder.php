<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin details
        $firstName = 'Admin';
        $lastName = '';
        $fullName = $firstName . ' ' . $lastName;

        User::create([
            'name'          => $fullName,
            'email'         => 'admin@example.com',
            'password'      => Hash::make('admin123'), // Use strong password in production
            'contact_number'=> '',
            'designation'   => 'Super Admin',
            'user_type'     => 'admin',
            'profile_photo' => '', // or null if no photo yet
        ]);
    }
}
