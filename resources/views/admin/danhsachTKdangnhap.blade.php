@extends('admin')
@section('abc')
<?php $i= 1 ?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh đăng kí tài khoản</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên tài khoản</th>
                <th>Mật khẩu mã hóa </th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Chỉnh sửa</th>
                
              </tr>
            </thead>
            <tbody>
               @foreach($users as $key=>$us)
              <tr>
              <td>{{$key+1}}</td>   
                <td>{{ $us->username }}</td>
                <td>{{ $us->password }}</td>
                <td>{{ $us->hoten }}</td>
                <td>{{ $us->sdt }}</td>
               
               <td>
                  <!--<a href="{{ route('xoa',['id'=>$us->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>-->
                  <a href="{{ route('suaTKDangNhap',['id'=>$us->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                </td>
              </tr>
              
               @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop