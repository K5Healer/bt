@extends('admin')
@section('abc')
<?php $i= 1 ?>
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
                <th>Stt</th>
                <th>Tên tiêu đề</th>
                <th>Nội dung </th>
                <th>Số điện thoại</th>
                <th>Hình ảnh</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
               @foreach($hienthibanner as $hienthibanners)
              <tr>
                <td><?php echo $i ?></td>
                <td>{{ $hienthibanners->title }}</td>
                <td>
                  {{ $hienthibanners->content }}
                </td>
                <td>
                  {{ $hienthibanners->phone }}
                </td>
                <td><img src="image/{{ $hienthibanners->image }}" alt="" width="100px" height="50px"></td>
                <td><a href="{{ route('deletedBanner',['id'=>$hienthibanners->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                  <a href="{{ route('updateBanner',['id'=>$hienthibanners->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                </td>
              </tr>
              <?php $i++ ?>
               @endforeach
            </tbody>
          </table>
          {{ $hienthibanner->links() }}
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
@stop