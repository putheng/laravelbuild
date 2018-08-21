<?php

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
        	[
        		'name' => 'Free',
        		'price' => '0.00',
        		'live' => true
        	],[
        		'name' => 'Starter',
        		'price' => '1.00',
        		'live' => true
        	],[
        		'name' => 'Developer',
        		'price' => '3.99',
        		'live' => true
        	],[
        		'name' => 'Business',
        		'price' => '7.99',
        		'live' => true
        	],
        ];

        Plan::insert($value);
    }
}
