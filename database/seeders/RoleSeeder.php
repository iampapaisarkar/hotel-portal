<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $roles = [
            [
            'role' => 'Super Admin',
            'code' => 'admin',
            ],
            [
            'role' => 'Agent',
            'code' => 'agent',
            ]
        ];

        Roles::insert($roles);
    }
}
