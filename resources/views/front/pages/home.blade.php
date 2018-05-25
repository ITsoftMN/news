@extends('front.layouts.master')
@section('content')
    @include('front.partials.header')
    @include('front.partials.carousel')
    @include('front.pages.section-tab')
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-12">
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Шинэ мэдээ</h2>
                        <div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
                    </div>
                    <!-- /section title -->

                    <!-- owl carousel 2 -->
                    <div id="owl-carousel-2" class="owl-carousel owl-theme">

                        @foreach($new as $n)
                            <article class="article thumb-article">
                                <div class="article-img">
                                    <img src="/uploads/news/small/{{$n->image}}" alt="{{$n->title}}">
                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category"><a href="#">{{$n->category->name}}</a></li>
                                        <li class="article-type"><i class="fa fa-video-camera"></i></li>
                                    </ul>
                                    <h5 class="article-title"><a href="#">{{$n->title}}</a></h5>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> {{$n->created_at->diffForHumans()}}</li>
                                        <li><i class="fa fa-comments"> {{count($n->Commend)}}</i></li>
                                        <li><i class="fa fa-heart"> {{$n->seen}}</i></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <!-- /owl carousel 2 -->
                </div>
                <!-- /Main Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    @include('front.pages.section-news')
    <div class="visible-lg visible-md">
        <img class="center-block" src="./img/ad-3.jpg" alt="">
    </div>

    @include('front.partials.footer')
@endsection