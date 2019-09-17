@extends('admin')
@section('abc')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm mới giới thiệu lợi ích</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="{{ route('themmoiloiich') }}" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Tiêu đề</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Nội dung</label>
				<input type="text" class="form-control" id="exampleInputPassword1" name="content" placeholder="Khu trung tâm thương mại và giải trí hiện đại" required="">
			</div>
		{{-- 	<div class="form-group">
				<label for="exampleInputPassword1">Nội dung</label>
				<input type="text" class="form-control" id="exampleInputPassword1" name="image" placeholder="Khu trung tâm thương mại và giải trí hiện đại" required="">
			</div> --}}
			<div class="form-group">
				<label for="exampleInputFile">Thêm icon cho tiêu đề</label>
				<input type="file" id="image" name="image" required="">
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Thêm mới</button>
		</div>
	</form>

</div>

@stop