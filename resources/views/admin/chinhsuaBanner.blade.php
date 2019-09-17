@extends('admin')
@section('abc')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm mới banner</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Tiêu đề banner</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{ $hienthiTTBN->title }}" required="">
			</div>
			<div class="form-group">
				<label for="asssss">Nội dung banner</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="content" value="{{ $hienthiTTBN->content }}"  placeholder="TIỆN ÍCH, GIÁ TRỊ" required="">
			</div>
			<div class="form-group">
				<label for="asssss">Số điện thoại liên hệ</label>
				<input type="number" class="form-control" id="exampleInputEmail1" name="phone" value="{{ $hienthiTTBN->phone }}"  placeholder="092312354123" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">Ảnh banner</label>
				<br>
				<img src="image/{{ $hienthiTTBN->image }}" alt="">
				<input type="file" id="image" name="image">
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Chỉnh sửa</button>
		</div>
	</form>

</div>

@stop