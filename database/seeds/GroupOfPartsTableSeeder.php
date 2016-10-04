<?php

use Illuminate\Database\Seeder;

class GroupOfPartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            ['name' => 'Group A', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Group B', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Group C', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Group D', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Group E', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];
        DB::table('groups')->insert($groups);
    }
}
