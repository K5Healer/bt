<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\users;
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
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'uername.required' => 'Bạn chưa nhập tên đăng nhập',
                'password.required' => 'Bạn chưa nhập mật khẩu'

            ]
        );
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('admin');
        } else {
           if(['username'=>$request->username]){
            return redirect()->route('login')->with('thongbao', 'user sai');
           }
           else if(['password'=>$request->password]){
            return redirect()->route('login')->with('thongbao', 'pass sai');
           }
           else{
            return redirect()->route('login')->with('thongbao', 'Đăng nhập không thành công');}
        }
    }
    public function getRegistation()
    {
        return view('admin.layout.register');
    }
    public function postRegistation(Request $request){
       
        $this->validate(
            $request,
            [
                'hoten' => 'required',
                'sodienthoai' => 'required',
                'tendangnhap'=> 'required',
                'matkhau'=> 'required',
                'xacnhanmk'=> 'required|same:matkhau'

            ],
            [
                'hoten.required' => 'Bạn chưa nhập tên đăng nhập',
                'matkhau.required' => 'bạn chưa nhập mật khẩu',
                'sodienthoai.required' => 'bạn chưa nhập số điện thoại',
                'tendangnhap.required' => 'bạn chưa nhập tên đăng nhập',
                'xacnhanmk.required' => 'bạn chưa xác nhận mật khẩu',
                
                
            ]
        );
        
        $users= new users();
        $users->hoten = $request->hoten;
        $users->sdt = $request->sodienthoai;
        $users->username = $request->tendangnhap;
        $users->password = bcrypt($request->matkhau);
        $users->save();
            return redirect()->route('login')->with('thongbao','Thêm thành công');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
