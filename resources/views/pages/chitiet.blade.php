@extends('master-layout')

@section('title')
Tin chi tiết - Chung cư Athena Complex Pháp Vân – Chủ đầu tư 379
@endsection
@section('content')
<main>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 tt">
                    <h3>{{$news_detail->title}}</h3>
                    <img class="abc" src="  {{asset('images/chi.jpg')}}" alt="">
                    <p>Hiện nay mô hình chung cư đang là tầm nhìn chiến lược các nhà đầu tư bất động sản. Khi quỹ đất ở
                        thành phố ngày càng trở nên khan hiếm và không phải ai có đủ tài chính để sở hữu cho mình một
                        căn nhà đất thì chung cư căn hộ ra đời giải quyết vấn đề nhà ở cho hàng triệu người. Muốn tìm
                        một căn nhà tốt trước tiên phải tìm hiểu về chủ đầu tư. Dự án Athena Complex Pháp Vân có chủ đầu
                        tư là công ty phát triển đô thị và xây dựng 379. một chủ đầu tư vừa có tầm vừa có tâm.</p>
                    <p><strong>Tổng quan về Công ty trách nhiệm hữu hạn phát triển đô thị và xây dựng 379.</strong></p>
                    <p>Công ty được thành lập 04/02/2015. Địa chỉ hiện tại của công ty văn phòng Hà Nội là tầng 9 tầng
                        11 nhà D khách sạn thể thao 15 Lê Văn Thiêm, Nhân Chính, Thanh Xuân, Hà Nội.</p>
                    <img class="abc" src="{{asset('images/chi1.jpg ')}}" alt="">
                    <p><span>Địa chỉ Thái Bình đặt tại Lô 1,2 DV Khu đô thi 379 đường Phan Bá Vành – Phường Quang Trung- T.p
                            Thái Bình.</span></p>
                    <p>Văn Phòng tại đà nẵng nằm tại số 1 Huy Du- Phường An Hải Bắc- Sơn Trà – T.p Đà nẵng . Công ty chủ
                        yếu hoạt động trong lĩnh vực bất động sản và với thế mạnh và kinh nghiệm công ty đã cung cấp
                        nhiều dịch vụ và nhà ở lý tưởng cho khách hàng luôn nhận được sự hài lòng và tin tưởng từng bước
                        khẳng định vị thế của mình trong lĩnh vực bất động sản Việt Nam là cái tên uy tín ngày càng được
                        nhiều người lựa chọn bởi những dự án vô cùng chất lượng. ĐỂ có được thành công rực rỡ như ngày
                        hôm nay chính là nhờ đội ngũ nhân lực giàu kinh nghiệm chuyên môn cao yêu nghề luôn tận tâm tận
                        tình bộ máy công ty ngày càng được hoàn thiện tạo môi trường làm việc chuyên nghiệp đẳng cấp
                        cùng dự án có tầm nhìn chiến lược.</p>
                    <p><strong>Các dự án tiêu biểu của chủ đầu tư</strong></p>
                    <p>Khu đô thị 379 tại đường Phan Bá Vành- Quang Trung- T.p Thái Bình, tỉnh Thái Bình dự án gồm 3 tòa
                        chung cư và 51 lô nhà liền kề thương mại và các công trình công cộng dịch vụ chung cư. Nơi đây
                        kiến tạo một không gian xanh và một cuộc sống thịnh vượng an lành.</p>
                    <img class="abc" src="{{asset('images/chi2.jpg  ')}} " alt="">
                    <p><span">Khu đô thị 379 tại đường Phan Bá Vành TP Thái Bình</span></p>
                    <p>Dự án Athena Complex Xuân Phương được xây dựng tại khu đô thị mới phường Phương Canh- quận Nam Từ
                        Liêm- Hà Nội với thiết kế mang phong cách hiện đại trẻ trung vừa tiện ích vừa chan hòa với thiên
                        nhiên.</p>
                    <img class="abc" src=" {{asset('images/chi3.jpg  ')}} " alt="">
                    <p><span>Khu đô thị 379 tại đường Phan Bá Vành TP Thái Bình</span></p>
                    <p>Tiếp nối thành công của hai dự án Athena Complex Pháp Vân ra đời đã chứng tỏ công ty xây dựng 379
                        có tầm nhìn chiến lược và chỉ mai đây thôi tên tuổi của công ty sẽ có vị thế vô cùng to lớn
                        trong ngành bất động sản. </p>

                    <p></p>
                    <ul id="inf">
                        <li>
                            <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li> <a href="#" title="Messenger"><i class="fab fa-facebook-messenger fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Youtube"> <i class="fab fa-youtube-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Pinterest"> <i class="fab fa-pinterest-square fa-2x"></i></a>
                        </li>
                    </ul>
                    <div>
                        <div class="cap-main">
                            <h3>CÁC TIN KHÁC
                            </h3>
                        </div>
                        <div class="row">
                            @foreach($news as $rows)
                            <div class="col-md-4 ">
                                <a href="{{route('chitiet',['id'=>$rows->id])}}">
                                    <div class="plus">
                                        <img src=" images/banner/{{$rows->image}} " alt="">
                                    </div>
                                    <div class="cap-mat">
                                        <h3>{{$rows->content}}
                                        </h3>
                                        <p>{{$rows->title}}</p>
                                    </div>
                                    <div class="info">
                                        <p><i class="far fa-calendar-alt"></i> <span><?php $date=date_create($rows->updated_at);echo date_format($date,"Y/m/d");?></span>&emsp;&emsp;<i
                                                class="far fa-comment"></i><span>Bình luận</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3 " id="tinnew">
                    <div class="search">
                       <form action="{{route('Search')}}" method="post">
                            @csrf
                            <input id="searchbox" type="text" name="search" placeholder="Search..">
                        </form>
                    </div>
                    <div class="name">
                        <h2><span>Tin tức mới nhất</span></h2>
                    </div>
                    <div class="scroll">
                        @foreach($model as $rows)
                        <a href="{{route('chitiet',['id'=>$rows->id])}}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>{{$rows->title}}</p>
                        </a>

                         @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
