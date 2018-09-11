<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function Category(){
        $data['total_category'] = Category::all()->count();
         return view('admin.home', compact('data'));
    }
}
