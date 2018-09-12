<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Posts;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function show(){
        return view('admin.posts.add');
    }

    public function add(){
        Posts::create([
            'category' => request('category'),
            'posts' => request('posts'),
            'createdby' => 'admin',
            'updatedby' => 'admin',
        ]);
        // dd(request()->all());

        return back()->with('success','New posts Added Successfully ');
    }

    public function view(){
        $datas = Posts::get();
//        dd($datas);
        return view('admin.posts.view', compact('datas'));
    }

    public function showEdit($id){
        try {
            $data = Posts::findOrfail($id);
            return view('admin.posts.edit', compact('data'));
        } catch (Exception $e) {
            return back();
        }
    }

    public function delete($id){
        try {
            $Request = Posts::findOrfail($id);
            $Request->delete();
            return back()->with('success','Posts Deleted Successfully ');
        } catch (Exception $e) {
            return back()->with('wrong','Sorry! something Went To Wrong.');
        }
    }

    public function update($id){
        $posts = Posts::findOrfail($id);
        $posts->posts = request('posts');
        $posts->save();
        return back()->with('success','Posts Updated Successfully ');
    }
}
