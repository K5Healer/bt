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
                    <div>{!!$news_detail->Detail!!}</div>
                    
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
                       <form action="{{route('search_new')}}" method="post">
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
