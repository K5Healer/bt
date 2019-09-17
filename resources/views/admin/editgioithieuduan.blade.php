@extends('admin')
@section('abc')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa phần giới thiệu dự án</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Tiêu đề căn hộ</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $nnn->title }}" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Nội dung</label>
				<textarea id="editor1" name="content" rows="10" cols="80">
					{{ $nnn->content }}
				</textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="exampleInputFile">Ảnh căn hộ</label>
			<img src="image/{{ $nnn->image }}" alt="" height="200px" width="200px">
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
	$(function () {
    CKEDITOR.replace('editor1')
    $('.textarea').wysihtml5()
})
</script>
@stop

