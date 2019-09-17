@extends('admin')
@section('abc')
<?php $i= 1 ?>
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
                <th>Tên tiêu đề căn hộ</th>
                <th>Tên tiêu đề chung</th>
                <th>Hình ảnh</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
               @foreach($dsch as $dschs)
              <tr>
                <td><?php echo $i ?></td>
                <td>{{ $dschs->name }}</td>
                <td>
                  {{ $dschs->titlecata->title }}
                </td>
                <td><img src="image/{{ $dschs->image }}" alt="" width="50px" height="70px"></td>
                <td><a href="{{ route('deletedschs',['id'=>$dschs->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                  <a href="{{ route('updatedschs',['id'=>$dschs->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                </td>
              </tr>
              <?php $i++ ?>
               @endforeach
            </tbody>
            {{ $dsch->links() }}
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop