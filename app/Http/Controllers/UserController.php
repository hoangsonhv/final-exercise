<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function add(){
        return view("user");
    }

    public function postUser(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:user,email",
            "password"=>"required|min:6|max:20",
            "repassword"=>"required|same:password"
        ],[
            "name.required"=>"Vui lòng nhập tên",
            "email.required"=>"Vui lòng nhập Email",
            "email.unique"=>"Email đã có người sử dụng",
            "password"=>"Vui long nhập mật khẩu",
            "password.min"=>"Mật khẩu phải có ít nhất 6 kí tự",
            "password.max"=>"Mật khẩu không được quá 20 kí tự",
            "repassword.same"=>"Mật khẩu không giống nhau"
        ]);
        User::create([
            "name"=>$request->get("name"),
            "email"=>$request->get("email"),
            "password"=>$request->get("password"),
            "remember_token"=>$request->get("repassword")
        ]);
        return redirect()->to("admin/home");
    }
}
