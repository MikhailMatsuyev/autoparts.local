<?php

use Illuminate\Database\Seeder;

class PartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($k = 1; $k <= 10; $k++)
        {
            for ($i = 1; $i <= 10; $i++)
            {
                $parts = [
                    ['name' => 'Parts '.($k*100+$i), 'producer_id' => $i, 'weight' => rand(1, 200), 'price'=>rand(500, 800), 'groups_id' => rand(1, 5),  'created_at' => new DateTime, 'updated_at' => new DateTime],
                ];
                DB::table('parts')->insert($parts);
            }
        }
    }
}
