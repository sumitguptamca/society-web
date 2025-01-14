<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['role_name' => 'Client'],
            ['role_name' => 'Admin'],
        ];

        foreach ($data as $item) {
            Role::create($item);
        }
    }
}
