<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/story/{storyId}', 'StoryController@getStory')->name('story-page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create_story', 'CreateStoryController@create')->name('create.story');
