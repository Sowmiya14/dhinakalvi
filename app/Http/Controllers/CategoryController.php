<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function show(){
        return view('admin.category.add');
    }

    public function add(){
        Category::create([
            'category' => request('category'),
            'createdby' => 'admin',
            'updatedby' => 'admin',
        ]);
        // dd(request()->all());

        return back()->with('success','New Category Added Successfully ');
    }

    public function view(){
        $datas = Category::get();
//        dd($datas);
        return view('admin.category.view', compact('datas'));
    }

    public function showEdit($id){
        try {
            $data = Category::findOrfail($id);
            return view('admin.category.edit', compact('data'));
        } catch (Exception $e) {
            return back();
        }
    }

    public function delete($id){
        try {
            $Request = Category::findOrfail($id);
            $Request->delete();
            return back()->with('success','Category Deleted Successfully ');
        } catch (Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }

    public function update($id){
        $category = category::findOrfail($id);
        $category->category = request('category');
        $category->save();
        return back()->with('success','Category Updated Successfully ');
    }
}
