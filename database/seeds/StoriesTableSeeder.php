<?php

use App\Story;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        for ($i=1; $i <= 4; $i++) {
            $category = Category::where('id', $i)->first();

            $story1 = new Story([
                'user_id' => 1, 'language' => 2, 'level' => 2, 'title' => 'Carlos el Chinchudo'.$i, 
                'image' => 'image_'.$i.'.jpg', 'slug' => 'carlos_el_chinchudo_'.$i, 'description' => 'Carlos tenia un mal dia, pero no sabia que todo podiea ponerse mucho peor.', 
                'audio_file' => '-', 'views' => '54', 'score' => '71',  'votes' => '12', 
                'created_at' => $now, 'updated_at' => $now
            ]);

            $story2 = new Story([
                'user_id' => 1, 'language' => 2, 'level' => 2, 'title' => 'El maldito Jorch'.$i, 
                'image' => 'image_'.$i.'.jpg', 'slug' => 'el_pillo_jorch_'.$i, 'description' => 'Jorch es un maldito, pero tambien es un jorch', 
                'audio_file' => '-', 'views' => '540', 'score' => '95',  'votes' => '120', 
                'created_at' => $now, 'updated_at' => $now
            ]);

            $story3 = new Story([
                'user_id' => 1, 'language' => 2, 'level' => 2, 'title' => 'Historia test123'.$i, 
                'image' => 'image_'.$i.'.jpg', 'slug' => 'el_maldito_jorch_'.$i, 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quis totam soluta corrupti nulla aspernatur architecto facere repudiandae aperiam, blanditiis sunt ducimus ab similique rem necessitatibus cumque voluptatibus fugiat laborum?', 
                'audio_file' => '-', 'views' => '1540', 'score' => '55',  'votes' => '520', 
                'created_at' => $now, 'updated_at' => $now
            ]);

            $story4 = new Story([
                'user_id' => 1, 'language' => 2, 'level' => 2, 'title' => 'Historia test 456'.$i, 
                'image' => 'image_'.$i.'.jpg', 'slug' => 'el_fucking_jorch_'.$i, 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt quis totam soluta corrupti nulla aspernatur architecto facere repudiandae aperiam, blanditiis sunt ducimus ab similique rem necessitatibus cumque voluptatibus fugiat laborum?', 
                'audio_file' => '-', 'views' => '1540', 'score' => '55',  'votes' => '520', 
                'created_at' => $now, 'updated_at' => $now
            ]);
            $category->stories()->saveMany([$story1, $story2, $story3, $story4]);
        }
    }
}
