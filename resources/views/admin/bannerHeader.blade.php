@extends('admin')
@section('abc')

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h2 class="box-title">Banner tư vấn</h2>
			</div>
			<div class="box-body">
				@foreach($qss as $qsss)
				<div class="col-xs-4 col-sm-4 col-md-4">
					
					<h2>Tiêu đề: {{ $qsss->title }}</h2>
					<p><h4>Nội dung: {!! $qsss->content !!} </h4></p>
					<p><a href="{{ route('editheader',['id'=>$qsss->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')"><span style="font-size: 20px">Chỉnh sửa</span></a></p>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<img src="image/{{ $qsss->image }}" alt="" width="100%" height="300px">
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop