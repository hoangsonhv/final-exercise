<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList(){
        $category = Category::all();
        return view("category.category_list",[
            "category" => $category
        ]);
    }

    public function categoryAdd(){
        return view("category.category_add");
    }

    public function categorySave(Request $request){
        $request->validate([
            "name"=>"required"
        ],[
            "name.required"=>"Vui lòng nhập vào trường tên.!"
        ]);

        Category::create([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("admin/categories");
    }

    public function categoryEdit($id){
        $cate = Category::findOrFail($id);
        return view("category.category_edit",[
            "cate"=>$cate
        ]);
    }

    public function categoryUpdate(Request $request,$id){
        $request->validate([
            "name"=>"required"
        ]);
        $cate = Category::findOrFail($id);
        $cate->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("admin/categories");
    }

    public function delete($id){
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->to("admin/categories");
    }
}
