@extends('admin')
@section('abc')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách khách hàng cần tư vấn</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Stt</th>
                <th>Tên tiêu đề</th>
                <th>Nội dung</th>
                <th>Hình ảnh</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($DSGTloiich as $DSGTloiichs)
              <tr>
                <td>{{ $DSGTloiichs->id }}</td>
                <td>{{ $DSGTloiichs->title }}
                </td>
                <td>{{ $DSGTloiichs->content }}</td>
                <td><img src="image/{{ $DSGTloiichs->image }}" alt="" width="50px" height="70px"></td>
                <td><a href="{{ route('deleteGSGTLI',['id'=>$DSGTloiichs->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                  <a href="{{ route('updateGSGTLI',['id'=>$DSGTloiichs->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $DSGTloiich->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop