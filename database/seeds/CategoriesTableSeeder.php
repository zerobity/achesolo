<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Terror', 'slug' => 'terror', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Adventure', 'slug' => 'adventure', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sci-fi', 'slug' => 'sci-fi', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Police', 'slug' => 'police', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mystery', 'slug' => 'mystery', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
