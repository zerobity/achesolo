<?php

namespace App\Http\Controllers;

use App\Story;
use App\Part;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function getStory($storyId)
    {
        $story = Story::where('id', $storyId)->first();
        $creatorId = $story ->user_id ;
        $creator = User::where('id', $creatorId)->first();
        $categoryId = $story->category_id;
        $category = Category::where('id',$categoryId)->get();
        $categoryName = $story->category->name;
       // dd($category)
        $parts = Part::where('story_id', $storyId)->get();
        //dd($story->language);
        return view('sections')->with([
            'parts' => $parts, 
            'story' => $story,
            'category' => $categoryName,
            'creator' => $creator
            ]);
    }
}
