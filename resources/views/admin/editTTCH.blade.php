@extends('admin')
@section('abc')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Chỉnh sửa tiêu đề</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tên tiêu đề</label>
							<input type="text" class="form-control" id="exampleInputEmail1" value="{{ $editTDCH->title }}" name="title" required="">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Chỉnh sửa</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

@stop

