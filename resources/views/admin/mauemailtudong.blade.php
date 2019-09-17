@extends('admin')
@section('abc')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h2 class="box-title">Mẫu email tự động</h2>
			</div>
			<div class="box-body">
				@foreach($abc as $abcs)
				<div class="col-xs-12 col-sm-12 col-md-12">
					<p><h4>Nội dung: {!! $abcs->email !!}</h4></p>
					<p><a href="{{ route('editemailauto',['id'=>$abcs->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')"><span style="font-size: 20px">Chỉnh sửa</span></a></p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@stop

