<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            ['name' => 'admin'],
            ['name' => 'user']
        ];

        DB::table('roles')->insert($users);
    }
}
