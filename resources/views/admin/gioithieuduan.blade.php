@extends('admin')
@section('abc')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h2 class="box-title">Giới thiệu dự án</h2>
			</div>
			<div class="box-body">
				@foreach($GTDU as $GTDUs)
				<div class="col-xs-8 col-sm-8 col-md-8">
					
					<h2>Tên giới thiệu: {{ $GTDUs->title }}</h2>
					<p><h4>Nội dung: {!! $GTDUs->content !!} </h4></p>
					<p><a href="{{ route('chinhsuaGTDA',['id'=>$GTDUs->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')"><span style="font-size: 20px">Chỉnh sửa</span></a></p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<img src="image/{{ $GTDUs->image }}" alt="" width="100%" height="300px">
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop