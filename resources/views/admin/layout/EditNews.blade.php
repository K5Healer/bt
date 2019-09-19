@extends('admin.layout.index')
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
							<label>image</label>
						
							<input type="file" id="File" name="image" onchange="fileValidation(this)" value="">
                  			<div id="imagePreviewFile" style="padding:10px;"><img src="images/banner/{{$data->image}}" style="width: 150px;height:100px;object-fit: cover" alt=""></div>
                  			
						</div>
						<div></div>
						<div class="form-group">
							<label>content</label>
							<input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->content}}" name="content" required="">
						</div>
						<div class="form-group">
							<label>title</label>
							<input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->title}}" name="title" required="">
						</div>
						<div class="form-group">
							<label>Detail</label>
							<textarea name="detail" id="detail">
								{{$data->Detail}}
							</textarea>
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
<script type="text/javascript">
  function fileValidation(obj) {
                    var filePath = obj.value;
                    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                  
                    if (!allowedExtensions.exec(filePath)) {
                        alert('You can only select files with .jpeg/.jpg/.png/.gif extension.');
                        obj.value = '';
                        return false;
                    } else {
                       
                        if (obj.files && obj.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('imagePreview'+obj.id).innerHTML = '<img style="width:200px;" src="' + e.target.result + '"/>';
                            };
                            reader.readAsDataURL(obj.files[0]);
                        }
                    }
                }
</script>
@endsection

