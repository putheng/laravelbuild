<?php

use Illuminate\Database\Seeder;

use App\Models\Version;

class PlanPHP_VserionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
        	['name' => '7.2'],
            ['name' => '7.1'],
            ['name' => '7.0'],
            ['name' => '5.6']
        ];

        Version::insert($value);
    }
}
