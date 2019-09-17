@extends('admin')
@section('abc')
<?php $i = 1; ?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Thêm mới tiêu đề</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="" enctype="multipart/form-data">
					@csrf
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Thêm tiêu đề</label>
							<input type="text" class="form-control" id="exampleInputEmail1" value="" name="title" required="" placeholder="ABCXYZ">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Thêm mới</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách tiêu đề</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Stt</th>
								<th>Tên tiêu đề</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($slTDCH as $slTDCHs)
							<tr>
								<td><?php echo $i ?></td>
								<td>{{ $slTDCHs->title }}</td>
								<?php $i++ ?>
								<td><a href="{{ route('deleteTDCH',['id'=>$slTDCHs->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
									<a href="{{ route('updateTDCH',['id'=>$slTDCHs->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $slTDCH->links() }}
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.row -->
		</div>
	</div>
</section>

@stop

