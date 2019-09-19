@extends('admin.layout.index')
@section('content')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách khách hàng muốn tư vấn</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>STT</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                
                
              </tr>
            </thead>
            <tbody>
              @foreach($thongtinkhachhang as $key=>$us)
              <tr>
              <td>{{$key+1}}</td>   
                <td>{{ $us->hoten }}</td>
                <td>{{ $us->sdt }}</td>
                <td>{{ $us->email }}</td>
               
               
              
              </tr>
              
               @endforeach
               {{ $thongtinkhachhang->links() }}
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop