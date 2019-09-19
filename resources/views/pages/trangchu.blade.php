@extends('master-layout')

@section('title')
Chung cư Athena Complex Pháp Vân – Chủ đầu tư 379
@endsection
@section('content')


<main>
<base href="{{asset('')}}">

    <section id="banner">
            
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('images/banner1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item ">
                    <img src="{{asset('images/banner1.jpg')}}" alt="Secound slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
    </section>

    <section id="info">
        <div class="container">
            <div class="infoo">
                <p><strong style="font-size: 23px; color: red;">MỞ BÁN CHUNG CƯ ATHENA COMPLEX PHÁP VÂN</strong></p>
                <h5 style="color: blue;">Chỉ với <span> 490 triệu </span> sở hữu căn hộ 65,5m bàn giao Full nội thất
                    <span> - </span> Thiết kế hiện đại với 2 ban công/ căn hộ <span> - </span> Dự án có bể bơi ngoài
                    trời.</h5>
                <p style="font-size: 18px; color: red;"><strong>ĐẶT BIỆT:</strong> </p>
                <em>– Ngân hàng BIDV, MB hỗ trợ vay 70% giá trị căn hộ, thời gian tới 20 năm.</em><br>
                <em><img src=" {{asset('images/hot.gif')}}" alt="" width="60" height="13">Bốc thăm trúng SH125</em><br>
                <em><img src="{{asset('images/hot.gif ')}}" alt="" width="60" height="13">Tặng 10 triệu khi đặt cọc trong tháng
                    8/2019</em>
                <p></p>
                <p style="color: blue;"><strong>LIÊN HỆ PHÒNG BÁN HÀNG CHỦ ĐẦU TƯ</strong> </p>
                <p><img src="{{asset('images/hotline.jpg  ')}} " alt="" width="256" height="53"></p>
                <p><img title="Đăng ký nhận báo giá và thông tin dự án Chung cư Athena Complex Pháp Vân"
                        src="{{asset('images/dang-ky-tu-van.gif ')}}" alt="" width="346" height="150" style="cursor: pointer;"></p>
            </div>
            <p style="margin-top: 20px;"><img src=" {{asset('images/line-300x27.png')}}" alt="" width="300" height="27"></p>


        </div>
    </section>

    <section id="phoicanh">
        <div class="container">
            <div class="cap">
                <h3>Chung cư Athena Complex Pháp Vân – Nơi Cuộc Sống Trọn Vẹn</h3>
                <p class="text-justify">Chung cư Athena Complex – Pháp Vân sở hữu vị trí đắc địa, giao thông thuận lợi khi tiếp giáp trục
                    đường Pháp Vân Cầu Giẽ và trục quốc lộ 1A – Giải Phóng, kết nối Thủ đô. Bên cạnh đó, dự án nằm trong
                    vành đai không gian xanh, bao quanh là Công Viên Yên Sở và Khu đô thị Hồng Hà Eco City, một trong 5
                    không gian được đánh giá là đáng sống nhất Thủ đô Hà Nội.</p>
            </div>
            <div class="row">
                <div class="col-md-6 tt-content">
                    <p><span>Tên dự án: </span><a href="#"> Chung cư Athena Complex Pháp Vân</a></p>
                    <p><span>Chủ đầu tư:</span> Công ty TNHH phát triển đô thị và xây dựng 379</p>
                    <p><span>Địa chỉ:</span> 161 Ngọc Hồi, KĐT Pháp Vân, Hoàng Mai, Hà Nội</p>
                    <p><span>Quy mô:</span> Gồm 1 tòa chung cư cao 27 tầng: có 2 tầng hầm, 4 tầng trung tâm thương mại
                        dịch vụ, văn phòng, từ tầng 5 – 27 tầng căn hộ để ở.</p>
                    <p><span>Diện tích xây dựng chung cư:</span> 1.833 m2 </p>
                    <p><span>Diện tích xây dựng bể bơi và dịch vụ: </span> 400 m2</p>
                    <p><span>Diện tích khuôn viên, giao thông, cây xanh: </span> 3.855 m2</p>
                    <p><span>Tổng diện tích sàn xây dựng: </span>46.980 m2</p>
                    <p><span>Mật độ xây dựng: </span>36,7%</p>
                    <p><span>Diện tích sàn để xe: </span>10.050m2</p>
                    <p><span>Dự kiến bàn giao: </span>Quý I/2021</p>
                </div>
                <div class="col-md-6 content">
                    <figure class="plus-zoom"> <img src="images/phoicanh1.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div class="row " style="margin-top:3%;">
                <div class="col-md-6 content">
                    <figure class="plus-zoom"> <img src="images/map.jpg" alt="">
                    </figure>
                </div>
                <div class="col-md-6 cap">
                    <h3>Vị trí chung cư Athena Complex Pháp Vân</h3>
                    <p class="text-justify">Tọa lạc tại ví trí trung tâm của khu đô thị mới phía Nam, được xây dựng tại lô đất rộng 46.980m2
                        tại ngõ 161 đường Ngọc Hồi – Giải Phóng – một trong những trung tâm phát triển lớn của Thủ đô Hà
                        Nội. Dự án Athena Complex nằm tại vị trí cho kết nối giao thông đi lại thuận tiện, cơ sở hạ hầng
                        kỹ thuật được đầy tư đồng bộ. Kết nối giao thông đi tới các tỉnh với các trục đường chính như
                        Quốc lộ 1A, đường vành đai 3.</p>
                    <p><span>Chung cư Athena nằm ở vị trí thuận tiện giao thông:</span></p>
                    <p>Bến xe Nước Ngầm 1km (theo đường Giải phóng – Ngọc Hồi)</p>
                    <p>Bến xe Giáp Bát 3km (theo đường Giải phóng – Ngọc Hồi).</p>
                    <p>Hà Đông 5km (theo đường Quốc lộ 70)</p>
                    <p>Lĩnh Nam 5km (theo đường vành đai 3)</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tiendo">
        <div class="container">
            <div class="cap-main">
                <h3>TIẾN ĐỘ THANH TOÁN – VAY NGÂN HÀNG</h3>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="ct">
                        <img src="images/tiendo.png" alt="">

                    </div>
                </div>
                <div class="col-md-6 ct-tiendo">
                    <p><span>Tiến độ thanh toán linh hoạt</span></p>
                    <p class="text-justify">Tiến trình thanh toán linh hoạt, giúp cho khách hàng có thể tự chủ được khả năng tài chính của
                        mình và sắp xếp tài chính của gia đình một cách hợp lý nhất.</p>
                    <ul>
                        <li>Đợt 1: 25% tổng giá trị căn hộ khi ký hợp đồng mua bán.</li>
                        <li>Đợt 2: 15% tổng giá trị căn hộ sau khi xây lên tầng 5.</li>
                        <li>Đợt 3: 15% tổng giá trị căn hộ sau xây lên đến tầng 15.
                        </li>
                        <li>Đợt 4: 15% tổng giá trị căn hộ sau khi xây lên đến 25.
                        </li>
                        <li>Đợt 5: 15% tổng giá trị căn hộ sau khi hoàn thành cất nóc tầng 27.
                        </li>
                        <li>Đợt 6: 15% tổng giá trị căn hộ khi bàn giao căn hộ + 2% phí bảo trì.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="lienket">
        <div class="container">
            <div class="cap-main">
                <h3>LIÊN KẾ VÙNG VÀ NHỮNG ĐIỂM NỔI BẬT
                    ATHENA COMPLEX PHÁP VÂN</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/img1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div class="coll active " data-toggle="collapse" data-target="#d1">1. Vị trí trung tâm quận Hoàng
                        Mai</div>
                    <div id="d1" class="collapse active">
                        <p><span>Chung cư Athena Complex Pháp Vân </span> được biết đến như 1 viên ngọc sáng tại khu vực
                            phía Nam thành phố, nhận được nhiều sự quan tâm của khách hàng chính vì sự phát triển đô
                            thị, hạ tầng giao thông mạnh nhất khu vực phía Nam Hà Nội. Khu đô thị Pháp Vân là một khu đô
                            thị mới phát triển với hàng loạt những dự án bất động sản thu hút khách hàng.</p>
                        <p style="text-align: center">PHÒNG TƯ VẤN BÁN HÀNG LIÊN HỆ</p>
                        <p style="text-align: center"><img src="images/hotline.png" alt=""></p>
                    </div>

                    <div class="coll" data-toggle="collapse" data-target="#d2">2. Gần trung tâm và thuận tiện giao thông
                    </div>
                    <div id="d2" class="collapse ">
                        <p> Dự án Athena Complex nằm ở ngõ 161 Ngọc Hồi, nơi tiếp giáp với đường quốc lộ 1A, đường cao
                            tốc
                            Pháp Vân – Cầu Giẽ. Di chuyển dễ dàng tới các bến xe: Bến xe nước ngầm: 1km, Bến xe Giáp
                            Bát:
                            3km. Tại đây di chuyển vào thành phố hết sức dễ dàng với đường Giải Phóng và đi các tỉnh
                            phía
                            Nam với đường cáo tốc Pháp Vân Cầu Giẽ</p>
                    </div>

                    <div class="coll" data-toggle="collapse" data-target="#d3">3. Tiện ích nội khu</div>
                    <div id="d3" class="collapse">
                        <p> Cư dân tại Athena Complex được hưởng các dịch vụ Tiện ích tiêu chuẩn quốc tế như: Khu trung
                            tâm
                            thương mại và giải trí hiện đại, siêu thị, phòng khám, trường mầm non, spa, café, phòng Gym,
                            sảnh đón khách sang trọng, dịch vụ đi kèm theo tiêu chuẩn 4 sao, hệ thống camera giám sát
                            24/7
                            mang lại sự an toàn tuyệt đối.</p>
                    </div>

                    <div class="coll" data-toggle="collapse" data-target="#d4">4. Tính an toàn</div>
                    <div id="d4" class="collapse">
                        <p> Athena Complex Pháp Vân là dự án nhà ở dành cho các cán bộ chiến sĩ, Công an vậy nên khi
                            sinh
                            sống ở đây hoàn toàn có thể yên tâm về tính an toàn và được hưởng nền văn hóa văn mình của
                            các
                            cán bộ chiến sĩ.</p>
                    </div>

                    <div class="coll" data-toggle="collapse" data-target="#d5">5. Giá bán tốt nhất khu vực - Căn hộ đầy
                        đủ nội thất
                    </div>
                    <div id="d5" class="collapse">
                        <p> Giá bán suất ngoại giao chỉ với 19.5tr/m2 đã bao gồm VAT và nội thất hoàn thiện. Bạn có thể
                            tham
                            khảo hình ảnh bên dưới, giá bán của một số dự án trong khu vực quận Hoàng Mai, chưa bao gồm
                            nội
                            thất.</p>
                        <img src="images/gia-ban.jpg" alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tienich">
        <div class="container">
            <div class="cap-main">
                <h3>TIỆN ÍCH NỘI DUNG ATHENA PHÁP VÂN</h3>
            </div>
            <div>
                <img src="images/tienich.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="matbang">
        <div class="container">
            <div class="cap-main">
                <h3>MẶT BẰNG ĐIỂN HÌNH CHUNG CƯ ATHENA COMPLEX PHÁP VÂN
                </h3>
            </div>
            <p>
                Các căn hộ <span>Athena Complex Pháp Vân – Hoàng Mai</span> được thiết kế có diện tích từ <span>66 m2 –
                    92 m2 </span> có 2 – 3 phòng ngủ. Căn hộ thông thoáng, đón ánh sáng tự nhiên và được tối ưu diện
                tích sử dụng. Tòa nhà <span>chung cư Athena Complex</span> tọa lạc ngõ 161 Ngọc Hồi – Hoàng Mai bao gồm
                2 block A và B, cao 27 tầng, với mỗi block có 9 căn hộ/sàn, có tới 8 thang máy cao cấp và 4 thang thoát
                hiểm.
            </p>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="plus-zoom">
                        <img src="images/mat-bang1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="plus-zoom">
                        <img src="images/mat-bang2.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="plus">
                        <img src="images/anhduan/canho1.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 1</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 90.5m2 <br>
                            Loại căn hộ: A1a <br>
                            Hướng ban công: ĐN - ĐB 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <img src="images/anhduan/canho2.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 2</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 69m2 <br>
                            Loại căn hộ: B1 <br>
                            Hướng ban công: ĐN
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="plus">
                        <img src="images/anhduan/canho3.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 3</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 69m2 <br>
                            Loại căn hộ: B1 <br>
                            Hướng ban công: ĐN
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="plus">
                        <img src="images/anhduan/canho4.jpg" alt="">
                    </div>

                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 4</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 92m2 <br>
                            Loại căn hộ: A1b <br>
                            Hướng ban công: ĐN - TN 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <img src="images/anhduan/canho5.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 5</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 65.5m2 <br>
                            Loại căn hộ: B4 <br>
                            Hướng ban công: TN 
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="plus">
                        <img src="images/anhduan/canho6.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 6</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 67m2 <br>
                            Loại căn hộ: B5 <br>
                            Hướng ban công: TN
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="plus">
                        <img src="images/anhduan/canho7.jpg" alt="">
                    </div>

                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 7</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 66.5m2 <br>
                            Loại căn hộ: B6 <br>
                            Hướng ban công: ĐB 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plus">
                        <img src="images/anhduan/canho8.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 8</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 67m2 <br>
                            Loại căn hộ: B3 <br>
                            Hướng ban công: TB 
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="plus">
                        <img src="images/anhduan/canho9.jpg" alt="">
                    </div>
                    <div class="cap-mat">
                        <p style="margin-bottom: 5px;"><strong>Khu Căn Hộ 9</strong>
                        </p>
                        <p>
                            Diện tích thông thủy: 67.5m2 <br>
                            Loại căn hộ: B2 <br>
                            Hướng ban công: TB - ĐB 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tintuc">
        <div class="container">
            <div class="cap-main">
                <h3>CẬP NHẬT TIN TỨC
                </h3>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <a href="">
                        <div class="plus">
                            <img src="images/tt1.png" alt="">
                        </div>
                        <div class="cap-mat">
                            <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                            <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,...</p>
                        </div>
                        <div class="info">
                            <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                    class="far fa-comment"></i><span>Bình luận</span>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ">
                    <a href="">
                        <div class="plus">
                            <img src="images/tt2.jpg" alt="">

                        </div>
                        <div class="cap-mat">
                            <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                            <p>Dự án chung cư Athena Complex với tổng diện tích 6088 m2 sẽ được cất ...</p>
                        </div>
                        <div class="info">
                            <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                    class="far fa-comment"></i><span>Bình luận</span>
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('chi-tiet') }}">
                        <div class="plus">
                            <img src="images/tt1.png" alt="">

                        </div>
                        <div class="cap-mat">
                            <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                            <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,... </p>
                        </div>
                        <div class="info">
                            <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                    class="far fa-comment"></i><span>Bình luận</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div id="IntroMenu" style="right: 25px;">
        <a href=""><span class="icon1" title="Messenger"><i class="fab fa-facebook-messenger"></i></span></a>
        <a href=""><span class="icon2" title="Điện thoại"><i class="fas fa-phone"></i></span></a>
        <a href=""><span class="icon3" title="Tin nhắn"><i class="fas fa-envelope "></i></span></a>
    </div>

    <div id="Intro" style="bottom: 25px;">
        <a href=""><span class="icon5" title="Messenger"><img src="images/dang-ky-tu-van.gif" alt=""></span></a>
        <a href=""><span class="icon6" title="Điện thoại"><img src="images/hotline.jpg" alt=""></span></a>

    </div>

</main>
@endsection