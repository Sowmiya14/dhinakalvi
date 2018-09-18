<?php

namespace App\Helpers;
use App\Category;
use Auth;
class Helper
{
    public static function getCategory(){
        return Category::orderBy('id', 'asc')->get();
    }
}