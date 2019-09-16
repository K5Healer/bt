@extends('master-layout')

@section('title')
Tin tức-Chung cư Athena Complex Pháp Vân – Chủ đầu tư 379
@endsection

@section('content')
<main>

    <section id="tintuc">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cap-main">
                        <h3> TIN TỨC TỔNG HỢP</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ">
                            <a href="{{ route('chi-tiet') }}">
                                <div class="plus">
                                    <img src="{{asset('images/tt1.png')}}" alt="">
                                </div>
                                <div class="cap-mat">
                                    <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                                    <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,...</p>
                                </div>


                            </a>
                            <div class="info">
                                <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                        class="far fa-comment"></i><span>Bình luận</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <a href="{{ route('chi-tiet') }}">
                                <div class="plus">
                                    <img src="{{asset('images/tt1.png')}}" alt="">

                                </div>
                                <div class="cap-mat">
                                    <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                                    <p>Dự án chung cư Athena Complex với tổng diện tích 6088 m2 sẽ được cất ...</p>
                                </div>
                            </a>

                            <div class="info">
                                <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                        class="far fa-comment"></i><span>Bình luận</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ route('chi-tiet') }}">
                                <div class="plus">
                                    <img src="{{asset('images/tt1.png')}}" alt="">

                                </div>
                                <div class="cap-mat">
                                    <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                                    <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,... </p>
                                </div>
                            </a>
                            <div class="info">
                                <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                        class="far fa-comment"></i><span>Bình luận</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 5%;" class="row">
                        <div class="col-md-4">
                            <a href="{{ route('chi-tiet') }}">
                                <div class="plus">
                                    <img src="{{asset('images/tt1.png')}}" alt="">

                                </div>
                                <div class="cap-mat">
                                    <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                                    <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,... </p>
                                </div>
                            </a>
                            <div class="info">
                                <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                        class="far fa-comment"></i><span>Bình luận</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ route('chi-tiet') }}">
                                <div class="plus">
                                    <img src="{{asset('images/tt1.png')}}" alt="">

                                </div>
                                <div class="cap-mat">
                                    <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                                    <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,... </p>
                                </div>
                            </a>
                            <div class="info">
                                <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                        class="far fa-comment"></i><span>Bình luận</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ route('chi-tiet') }}">
                                <div class="plus">
                                    <img src=" {{asset('images/tt1.png')}}" alt="">

                                </div>
                                <div class="cap-mat">
                                    <h3>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – LỰA CHỌN VÀNG CHO KHÁCH HÀNG TẦM TRUNG</h3>
                                    <p>Chung cư Athena Complex Pháp Vân được khởi công vào tháng 9/2018,... </p>
                                </div>
                            </a>
                            <div class="info">
                                <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                        class="far fa-comment"></i><span>Bình luận</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 " id="tinnew">
                    <div class="search">
                        <form>
                            <input id="searchbox" type="text" name="search" placeholder="Search..">
                        </form>
                    </div>
                    <div class="name">
                        <h2><span>Tin tức mới nhất</span></h2>
                    </div>
                    <div class="scroll">
                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>VÌ SAO KHÁCH HÀNG ĐẶT MUA ATHENA COMPLEX PHÁP VÂN</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>TIẾN ĐỘ ĐÓNG TIỀN DỰ ÁN ATHENA COMPLEX HOÀNG MAI NHƯ THẾ NÀO?</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – TIỆN ÍCH ĐẲNG CẤP VƯỢT TRỘI</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – TIỆN ÍCH ĐẲNG CẤP VƯỢT TRỘI</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – TIỆN ÍCH ĐẲNG CẤP VƯỢT TRỘI</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – TIỆN ÍCH ĐẲNG CẤP VƯỢT TRỘI</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – TIỆN ÍCH ĐẲNG CẤP VƯỢT TRỘI</p>
                        </a>

                        <a href="{{ route('chi-tiet') }}">
                            <i class="far fa-arrow-alt-circle-right"></i>
                            <p>CHUNG CƯ ATHENA COMPLEX PHÁP VÂN – TIỆN ÍCH ĐẲNG CẤP VƯỢT TRỘI</p>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container phan">
        <ul class="pagination">
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item "><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </div>

</main>
@endsection