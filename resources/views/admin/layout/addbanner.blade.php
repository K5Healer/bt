@extends('admin.layout.index')
@section('content')

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Thêm mới banner</h3>
	</div>
	<!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="POST" action="{{route('thembanner')}}" enctype="multipart/form-data">
		@csrf
		<div class="box-body">
			<div class="form-group">
				<label for="exampleInputFile">Ảnh banner</label>
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