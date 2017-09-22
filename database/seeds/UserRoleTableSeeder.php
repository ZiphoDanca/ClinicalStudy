<?php

use Illuminate\Database\Seeder;
use App\UserRole;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::create(['id' => '1','name' => 'Doctor']);
        UserRole::create(['id' => '2','name' => 'Nurse']);
        UserRole::create(['id' => '3','name' => 'Patient']);
        UserRole::create(['id' => '4','name' => 'Administrator']);
    }
}
