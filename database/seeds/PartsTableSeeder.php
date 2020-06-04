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
        Part::insert([
            ['story_id' => 1, 'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quisquam atque commodi eaque dolorem qui.', 
            'image' => '-', 'star' => 30, 'created_at' => $now, 'updated_at' => $now],

            ['story_id' => 1, 'text' => 'Commodi hic accusantium, aspernatur eius deserunt modi doloremque labore amet sint odio inventore minus dolor.', 
            'image' => '-', 'star' => 60, 'created_at' => $now, 'updated_at' => $now],

            ['story_id' => 2, 'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quisquam atque commodi eaque dolorem qui.', 
            'image' => '-', 'star' => 30, 'created_at' => $now, 'updated_at' => $now],

            ['story_id' => 2, 'text' => 'Commodi hic accusantium, aspernatur eius deserunt modi doloremque labore amet sint odio inventore minus dolor.', 
            'image' => '-', 'star' => 60, 'created_at' => $now, 'updated_at' => $now],
        ]);
        
    }
}
