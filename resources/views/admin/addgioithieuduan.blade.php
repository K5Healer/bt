@extends('admin')
@section('abc')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm mới banner</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
<form role="form" method="POST" action="{{route('addgioithieuduan')}}" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Giới thiệu dự án</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Giới thiệu dự án" required="">
			</div>
			<div class="form-group">
				<label for="asssss">Nội dung dự án</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="content" placeholder="Nội dung của dự án" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">Ảnh của dự án</label>
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