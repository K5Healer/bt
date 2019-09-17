@extends('admin')
@section('abc')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa banner tư vấn</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Tiêu đề </label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $BNH->title }}" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Nội dung</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="content" value="{{ $BNH->content }}" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">Ảnh</label>
			<img src="image/{{ $BNH->image }}" alt="" height="200px" width="200px">
			<input type="file" id="image" name="image">
		</div>

	</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Thêm mới</button>
	</div>
</form>

</div>
<script>
</script>
@stop

