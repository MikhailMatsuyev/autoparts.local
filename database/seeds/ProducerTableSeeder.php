<?php

use Illuminate\Database\Seeder;

class ProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
            $producers = [
                ['id' => $i, 'name' => 'Producer '.$i, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ];
            DB::table('producers')->insert($producers);
        }
        //var_dump($producers);


    }
}
