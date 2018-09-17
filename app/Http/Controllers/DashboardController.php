<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Posts;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function Category(){
        $data['total_category'] = Category::all()->count();
        $data['total_posts'] = Posts::all()->count();
         return view('admin.home', compact('data'));
    }
}
