@extends('admin')
@section('abc')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm mới giới thiệu lợi ích</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputEmail1">Tiêu đề căn hộ	</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="TIỆN ÍCH NỘI KHU" required="">
			</div>
			<div class="form-group">
				<label for="exampleInputFile">Ảnh căn hộ</label>
				<input type="file" id="image" name="image" required="">
			</div>
			<div class="form-group">
				<label for="asssss">Tiêu đề chính</label>
				<select name="titlecanho" class="form-control" id="asssss">
					@foreach($slTTCH as $slTTCHs)
						<option  value="{{ $slTTCHs->id }}">{{ $slTTCHs->title }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<!-- /.box-body -->

		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Thêm mới</button>
		</div>
	</form>

</div>

@stop