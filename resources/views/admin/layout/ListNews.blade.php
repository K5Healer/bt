@extends('admin.layout.index')
@section('content')
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
                <th>Nội Dung </th>
                <th>Hình ảnh</th>
                <th>title</th>
               
                <th>ngày cập nhật</th>
                <th>Ngày sửa</th>
                <th class="text-center">sua va xoa</th>
              </tr>
            </thead>
            <tbody>
              @foreach($news as $rows)
              <tr>
                <td>{{$rows->content}}</td>
                <td><img style="width: 150px;height:100px;object-fit: cover" src="images/banner/{{$rows->image}}"> </td>
                <td>{{$rows->title}}</td>
                
                <td><?php $date=date_create($rows->created_at);echo date_format($date,"Y/m/d");?></td>
                <td><?php $date=date_create($rows->updated_at);echo date_format($date,"Y/m/d");?></td>
                
                <td style="width: 150px;"><a href="{{route('news_delete',['id'=>$rows->id])}}"  onclick="return confirm('Bạn chắc chắn muốn xóa?')"><i class="fas fa-trash-alt"></i>Xóa</a>&nbsp;
                  <a href="{{route('get_news_edit',['id'=>$rows->id])}}"  onclick="return confirm('Bạn có muốn chỉnh sửa?')"><i class="fas fa-pencil-alt"></i>Chỉnh sửa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $news->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@endsection