@extends('admin.layout.index')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách banner</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>STT</th>
                <th>Ảnh</th>
                <th>Chinh sửa/ xóa</th>
                @foreach($bannerheader as $key =>$bannerheader)
              <tr>
                
                <td>{{$key +1}}</td>
                <td><img src="image/banner/{{ $bannerheader->image }}" alt="" width="100px" height="50px"></td>
                <td><a href="{{route('deletebanner',['id'=>$bannerheader->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                  <a href="{{route('suabanner',['id'=>$bannerheader->id])}}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                </td>
              </tr>
              
               @endforeach
                
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop