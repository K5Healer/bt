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
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Nội dung</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($slKHTV as $slKHTV1)
              <tr>
                <td>{{ $slKHTV1->id }}</td>
                <td>{{ $slKHTV1->name }}
                </td>
                <td>{{ $slKHTV1->phone_number }}</td>
                <td>{{ $slKHTV1->comment }}</td>
                <td><a href="{{ route('delete',['id'=>$slKHTV1->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $slKHTV->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop