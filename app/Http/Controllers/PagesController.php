<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\users;
use App\thongtinkhachhang;
use App\bannerheader;
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
        return redirect()->route('logout');
    }
    public function getListRegistation(){
        $users=users::paginate(10);
        return view('admin.layout.listregistation',['users'=>$users]);
    }
    public function getSuaTaikhoan($id)
    {
        $users = users::find($id);
        return view('admin.layout.editRegister',['users'=>$users]);
    }
    public function postSuaTaikhoan(Request $request,$id){
        $users = users::find($id);
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
        $users->hoten = $request->hoten;
        $users->sdt = $request->sodienthoai;
        $users->username = $request->tendangnhap;
        $users->password = bcrypt($request->matkhau);
        $users->save();
        return redirect()->route('listRegister')->with('thongbao','Sửa thành công');
    }
    public function getdanhsachthongtin(){
        $thongtinkhachhang=thongtinkhachhang::paginate(10);
        return view('admin.layout.dskhmuondangki',['thongtinkhachhang'=>$thongtinkhachhang]);
    }
    public function postthongtin(Request $request){
        
        $this->validate(
            $request,
            [
                'name_user' => 'required',
                'phone_user' => 'required',
                'email_user'=> 'required',
            ],
            [
                'name_user.required' => 'Bạn chưa nhập tên đăng nhập',
                'phone_user.required' => 'bạn chưa nhập mật khẩu',
                'email_user.required' => 'bạn chưa nhập số điện thoại',
            ]
        );
        
        $thongtinkhachhang = new thongtinkhachhang();
        $thongtinkhachhang->hoten = $request->name_user;
        $thongtinkhachhang->sdt = $request->phone_user;
        $thongtinkhachhang->email = $request->email_user;
        $thongtinkhachhang->save();
        return redirect()->route('trang-chu')->with('thongbao','Thêm thành công');
    }
    //Banner
    public function getdanhsachbanner(){
        $bannerheader=bannerheader::paginate(10);
        return view('admin.layout.listbanner',['bannerheader'=>$bannerheader]);
    }
    public function getthembanner(){
        return view('admin.layout.addbanner');
    }
    public function postthembanner(Request $request){
        $this->validate(
            $request,
            [
                'image'=>'required'
            ],
            [
                'image.required'=>'Chưa nhập ảnh'
            ]
        );
        
        $bannerheader = new bannerheader();
       if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            $avatar = time() . "_banner_" . $name;
            while (file_exists('image/banner/' . $avatar)) {
                $avatar = time() . "_banner_" . $name;
            }
            $file->move('image/banner/', $avatar);
            $image = $avatar;
        }
        else{
            $image= 'no-img.jpg';
        }
        $bannerheader->image= $image;
        $bannerheader->save();
       return redirect()->route('thembanner')->with('thongbao','Thêm thành công');
    }
    public function getsuabanner($id){
        $bannerheader = bannerheader::find($id);
        return view('admin.layout.editbanner',['bannerheader'=>$bannerheader]);
    }
    public function postsuabanner(Request $request,$id){
        $bannerheader = bannerheader::find($id);
        $this->validate(
            $request,
            [
                'image'=>'required'
            ],
            [
                'image.required'=>'Chưa nhập ảnh'
            ]
        );
        
       
       if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            $avatar = time() . "_banner_" . $name;
            while (file_exists('image/banner/' . $avatar)) {
                $avatar = time() . "_banner_" . $name;
            }
            $file->move('image/banner/', $avatar);
            $image = $avatar;
        }
        else{
            $image= 'no-img.jpg';
        }
        $bannerheader->image= $image;
        $bannerheader->save();
       return redirect()->route('danhsachbanner')->with('thongbao','Sưa thành công');
    }
    
    public function deletebanner($id){
        bannerheader::find($id)->delete();
        return redirect()->back();
    }

}
