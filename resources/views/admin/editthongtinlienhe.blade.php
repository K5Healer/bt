@extends('admin')
@section('abc')
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Chỉnh sửa thông tin liên hệ</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Địa chỉ</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="address" value="{{ $dsTTLH->address }}" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Số điện thoại</label>
				<input type="number" class="form-control" id="exampleInputEmail1" name="phonenumber" value="{{ $dsTTLH->phonenumber }}" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $dsTTLH->email }}" placeholder="dsadasda@gmail.com" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">Logo</label>
				<img src="image/{{ $dsTTLH->logo }}" alt="" height="200px" width="200px">
				<input type="file" id="image" name="image">
			</div>
		</div>
	<!-- /.box-body -->

	<div class="box-footer">
		<button type="submit" class="btn btn-primary">Thêm mới</button>
	</div>
</form>

</div>
@stop

