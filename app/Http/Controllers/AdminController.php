<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public function getLogin(){
        return view("admin.login");
    }

    public function loginPost(Request $request){
        $credentials = $request->only("email","password");
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route("admin.home");
        }else{
            return redirect("admin/login");
        }
    }

    public function homeAdmin(){
        if (Auth::guard("admin")->check()){
            $product = Product::with("category")->paginate(5);
            $category = Category::with("product")->paginate(5);
            return view("admin/home",[
                "product"=>$product,
                "category"=>$category
            ]);
        }else{
            return redirect("admin/login");
        }
    }

    public function logout(){
        Auth::guard("admin")->logout();
        return redirect("admin/login");
    }
}
