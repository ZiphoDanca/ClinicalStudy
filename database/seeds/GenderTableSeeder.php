<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create(['id' => '1','name' => 'Male']);
        Gender::create(['id' => '2','name' => 'Female']);
    }
}
