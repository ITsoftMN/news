@extends('front.layouts.master')
@section('content')
    @include('front.partials.header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-8">

                    <!-- breadcrumb -->
                    <ul class="article-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>{{$news->category->name}}</li>
                        <li>{{$news->title}}</li>
                    </ul>
                    <!-- /breadcrumb -->

                    <!-- ARTICLE POST -->
                    <article class="article article-post">
                        <div class="article-share">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="article-main-img">
                            <img src="/uploads/news/original/{{$news->image}}" alt="">
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">{{$news->category->name}}</a></li>
                                <li class="article-type"><i class="fa fa-file-text"></i></li>
                            </ul>
                            <h3 class="article-title">{!! $news->title !!}</h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i>{{$news->created_at}}</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                            <p>
                                {!! $news->description !!}
                            </p>

                        </div>
                    </article>
                    <!-- /ARTICLE POST -->

                    <!-- widget tags -->
                    <div class="widget-tags">
                        <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>
                    <!-- /widget tags -->

                    <!-- article comments -->
                    <div class="article-comments">
                        <div class="section-title">
                            <h2 class="title">Нийт сэтгэгдэл <span style="color: red">{{count($commend)}}</span></h2>
                        </div>

                        <!-- comment -->
                        @foreach($commend as $c)
                        <div class="media" id="commend-media{{$c->id}}">
                            <div class="media-left">
                                <img src="{{asset('assets/img/av-1.jpg')}}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h5>{{$c->user_name}}<span class="reply-time">{{$c->created_at->diffForHumans()}}</span></h5>
                                </div>
                                <p>{!! $c->commend_text !!}</p>
                                <span id="commend-replay" onclick="replayCommend({{$c->id}})"  class="reply-btn"> хариулах</span>
                            </div>

                            @foreach($c->CommendReplay as $item)
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{asset('assets/img/av-1.jpg')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h5>{{$item->user_name}}<span class="reply-time">April 04, 2017 At 9:30 AM</span></h5>
                                        </div>
                                        <p>{{$item->commend_text }}</p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>

                    <div class="article-reply-form">
                        <div class="section-title">
                            <h2 class="title">Cэтгэгдэл бичих</h2>
                        </div>

                        {{Form::open(['action'=>'CommendController@commendAdd'])}}


                            <input type="hidden" name="commend_news_id" value="{{$news->id}}">
                            <input class="input" name="commend_user" placeholder="Нэрээ бичнэ үү" type="text">
                            <textarea class="input" name="commend_body" placeholder="Сэтгэгдэл оруулна уу"></textarea>
                            <button type="button" onclick="commendAdd(this)" class="input-btn">Илгээх</button>

                            
                        {{Form::close()}}
                    </div>
                    <!-- /reply form -->

                    <div class="widget-tags">
                        <ul>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Sport</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Business</a></li>
                        </ul>
                    </div>

                </div>
                <!-- /Main Column -->

                <!-- Aside Column -->
                <div class="col-md-4">
                    <!-- Ad widget -->
                    <div class="widget center-block hidden-xs">
                        <img class="center-block" src="./img/ad-1.jpg" alt="">
                    </div>
                    <!-- /Ad widget -->

                    <!-- social widget -->
                    <div class="widget social-widget">
                        <div class="widget-title">
                            <h2 class="title">Stay Connected</h2>
                        </div>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
                            <li><a href="#" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
                            <li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
                        </ul>
                    </div>
                    <!-- /social widget -->

                    <!-- subscribe widget -->
                    <div class="widget subscribe-widget">
                        <div class="widget-title">
                            <h2 class="title">Subscribe to Newslatter</h2>
                        </div>
                        <form>
                            <input class="input" type="email" placeholder="Enter Your Email">
                            <button class="input-btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- /subscribe widget -->

                    <!-- article widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h2 class="title">Most Read</h2>
                        </div>

                        <!-- owl carousel 3 -->
                        <div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="./img/img-md-3.jpg" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa fa-file-text"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->

                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="./img/img-md-4.jpg" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa fa-file-text"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- /owl carousel 3 -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="./img/img-widget-1.jpg" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="./img/img-widget-2.jpg" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->

                        <!-- ARTICLE -->
                        <article class="article widget-article">
                            <div class="article-img">
                                <a href="#">
                                    <img src="./img/img-widget-3.jpg" alt="">
                                </a>
                            </div>
                            <div class="article-body">
                                <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                <ul class="article-meta">
                                    <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                    <li><i class="fa fa-comments"></i> 33</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /ARTICLE -->
                    </div>
                    <!-- /article widget -->

                    <!-- article widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h2 class="title">Featured Posts</h2>
                        </div>

                        <!-- owl carousel 4 -->
                        <div id="owl-carousel-4" class="owl-carousel owl-theme">
                            <!-- ARTICLE -->
                            <article class="article thumb-article">
                                <div class="article-img">
                                    <img src="./img/img-thumb-1.jpg" alt="">
                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category"><a href="#">News</a></li>
                                        <li class="article-type"><i class="fa fa-video-camera"></i></li>
                                    </ul>
                                    <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->

                            <!-- ARTICLE -->
                            <article class="article thumb-article">
                                <div class="article-img">
                                    <img src="./img/img-thumb-2.jpg" alt="">
                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category"><a href="#">News</a></li>
                                        <li class="article-type"><i class="fa fa-video-camera"></i></li>
                                    </ul>
                                    <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- /owl carousel 4 -->
                    </div>
                    <!-- /article widget -->
                </div>
                <!-- /Aside Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-12">
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Related Post</h2>
                    </div>
                    <!-- /section title -->

                    <!-- row -->
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="./img/img-md-1.jpg" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa fa-camera"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- /Column 1 -->

                        <!-- Column 2 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="./img/img-md-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- /Column 2 -->

                        <!-- Column 3 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="./img/img-md-3.jpg" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa fa-file-text"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- /Column 3 -->

                        <!-- Column 4 -->
                        <div class="col-md-3 col-sm-6">
                            <!-- ARTICLE -->
                            <article class="article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="./img/img-md-4.jpg" alt="">
                                    </a>
                                    <ul class="article-info">
                                        <li class="article-type"><i class="fa fa-file-text"></i></li>
                                    </ul>
                                </div>
                                <div class="article-body">
                                    <h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
                                    <ul class="article-meta">
                                        <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                        <li><i class="fa fa-comments"></i> 33</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /ARTICLE -->
                        </div>
                        <!-- Column 4 -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /Main Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    @include('front.partials.footer')
@endsection