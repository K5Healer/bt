<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\user;
class PagesController extends Controller
{
    public function getIndex(){
        return view('admin.layout.index');
    }
    public function login(){
        return view('admin.layout.signIn');
    }
    public function postLogin(Request $request)
    {
        $this->validate(
            $request,
            [
                'tendangnhap' => 'required',
                'matkhau' => 'required'
            ],
            [
                'tendangnhap.required' => 'Bạn chưa nhập tên đăng nhập',
                'matkhau.required' => 'bạn chưa nhập mật khẩu'

            ]
        );
        if (Auth::attempt(['username' => $request->tendangnhap, 'password' => $request->matkhau])) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('login')->with('thongbao', 'Đăng nhập không thành công');
        }
    }
}
