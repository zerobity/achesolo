<?php

namespace App\Http\Controllers;

use App\Story;
use App\Part;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function getStory($storyId)
    {
        $story = Story::where('id', $storyId)->first();
        $parts = Part::where('story_id', $storyId)->get();
        dd($parts);
    }
}
