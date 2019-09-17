@extends('admin')
@section('abc')

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Thêm địa chỉ liên hệ</h3>
        </div>
        <form role="form" method="POST" action="" enctype="multipart/form-data">
          @csrf
          <div class="box-body">
             <div class="form-group">
              <input type="number" value="1" id="id_contact" name="id_contact" style="display: none !important;">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Icon</label>
              <img src="image/{{ $DHL->icon }}" alt="">
              <input type="file" id="image" name="icon" required="">
            </div>
            <div class="form-group">
              <label for="asssss">Link</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="link" value="{{ $DHL->link }}" placeholder="facebook.com" required="">
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


@stop