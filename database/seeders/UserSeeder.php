<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'phone_number' => '+919002090020',
                'email' => 'admin@test.com',
                'referral_code' => null,
                // 'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Agent 1',
                'phone_number' => '+919002090021',
                'email' => 'agent1@test.com',
                'referral_code' => "ABC123",
                // 'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        User::insert($users);
    }
}
