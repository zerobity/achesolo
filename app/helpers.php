<?php

use Carbon\Carbon;

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}

function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}