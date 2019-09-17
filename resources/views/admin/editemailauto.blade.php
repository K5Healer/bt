@extends('admin')
@section('abc')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa mẫu email</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Nội dung</label>
				<textarea id="editor1" name="email" rows="10" cols="80">
					{{ $editemailauto->email }}
				</textarea>
			</div>
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


