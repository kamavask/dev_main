<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'developer']);
        Role::create(['name' => 'employee']);
        Role::create(['name' => 'deliverymen']);
        Role::create(['name' => 'servicemen']);
        Role::create(['name' => 'vendor']);
        Role::create(['name' => 'customer']);
    }
}
