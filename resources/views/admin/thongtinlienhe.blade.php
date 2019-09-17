@extends('admin')
@section('abc')
<?php $i= 1 ?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Thông tin liên hệ</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Link liên hệ</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                             @foreach($qwe as $qwes)
              <tr>
                <td>{{ $qwes->address }}</td>
                <td>
                    {{ $qwes->phonenumber }}
                </td>
                <td>
                    {{ $qwes->email }}
                </td>
                <td>
                  <img src="image/{{ $qwes->logo }}" alt="" width="50px" height="50px">
                </td>
                <td>
                  @foreach($qqq as $qqqs)
                  <div class="box">
                  <img src="image/{{ $qqqs->icon }}" alt="" width="25px" height="25px">
                  {{ $qqqs->link }}
                  <a href="{{ route('updateDHL',['id'=>$qqqs->id]) }}" class="btn btn-xs btn-primary" style="float:right" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                  @endforeach
                  </div>
                </td>
                <td>
                  <a href="{{ route('updateTTLH',['id'=>$qwes->id]) }}" class="btn btn-xs btn-primary" onclick="return confirm('Bạn có muốn chỉnh sửa?')">Chỉnh sửa</a>
                </td>
              </tr>
              <?php $i++ ?>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.row -->
    </section>
    @stop