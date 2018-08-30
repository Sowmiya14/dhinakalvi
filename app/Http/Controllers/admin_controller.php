<?php

namespace App\Http\Controllers;
use App\category;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class admin_controller extends Controller
{
        public function add(){
        return view('admin.add_category');
    }

        public function admin(){
        return view('admin.home');
    }



		public function create(Request $request){
        $this->validate($request, [
            'category' => 'required',
        ]);
        
        $category = $request->all();
        
        category::create($category);
        
        return view('admin.add_category');


    }



     public function show_category(){
        $category = category::orderBy('created_at','desc')->get();
        
        return view('admin.add_category', ['categorys' => $category]);
    }

    public function edit($id){
        $category = category::find($id);
        
        return view('admin2.edit', ['category' => $category]);
    }


    public function update($id, Request $request){
        $this->validate($request, [
            'category' => 'required',
        ]);
        
        $postData = $request->all();
        
        category::find($id)->update($postData);
        

        return redirect()->route('category.show');
    }
    public function delete($id){
        category::find($id)->delete();
        
        

        return redirect()->route('category.show');
    }
     public function content_section1(){
        return view('admin.content_section1');
    }


}


  