<?php

use App\Part;
use App\Story;
use Carbon\Carbon;
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
        $now = Carbon::now()->toDateTimeString();

        $stories = Story::all();
        
        foreach ($stories as $story) {
            Part::insert([
                ['story_id' => $story->id, 'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quisquam atque commodi eaque dolorem qui.', 
                'image' => '-', 'star' => 30, 'created_at' => $now, 'updated_at' => $now],
    
                ['story_id' => $story->id, 'text' => 'Commodi hic accusantium, aspernatur eius deserunt modi doloremque labore amet sint odio inventore minus dolor.', 
                'image' => '-', 'star' => 60, 'created_at' => $now, 'updated_at' => $now],
    
                ['story_id' => $story->id, 'text' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quisquam atque commodi eaque dolorem qui.', 
                'image' => '-', 'star' => 80, 'created_at' => $now, 'updated_at' => $now],
    
                ['story_id' => $story->id, 'text' => 'Commodi hic accusantium, aspernatur eius deserunt modi doloremque labore amet sint odio inventore minus dolor.', 
                'image' => '-', 'star' => 120, 'created_at' => $now, 'updated_at' => $now],
            ]);
        }
        
    }
}
