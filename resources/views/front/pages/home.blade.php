@extends('front.layouts.master')
@section('content')
    @include('front.partials.header')
    @include('front.partials.carousel')
    @include('front.pages.section-tab')
    @include('front.pages.section-news')
    <div class="visible-lg visible-md">
        <img class="center-block" src="./img/ad-3.jpg" alt="">
    </div>
    <!-- /AD SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-12">
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Popular Video</h2>
                        <div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
                    </div>
                    <!-- /section title -->

                    <!-- owl carousel 2 -->
                    <div id="owl-carousel-2" class="owl-carousel owl-theme">
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

                        <!-- ARTICLE -->
                        <article class="article thumb-article">
                            <div class="article-img">
                                <img src="./img/img-thumb-3.jpg" alt="">
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
                                <img src="./img/img-thumb-4.jpg" alt="">
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
                    <!-- /owl carousel 2 -->
                </div>
                <!-- /Main Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- CONTAINER -->
        <div class="container">
            <!-- ROW -->
            <div class="row">
                <!-- Main Column -->
                <div class="col-md-8">
                    <!-- section title -->
                    <div class="section-title">
                        <h2 class="title">Popular Posts</h2>
                    </div>
                    <!-- /section title -->

                    <!-- ARTICLE -->
                    <article class="article row-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="./img/img-md-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-file-text"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                            <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article row-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="./img/img-md-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-file-text"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                            <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article row-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="./img/img-md-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-file-text"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                            <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- ARTICLE -->
                    <article class="article row-article">
                        <div class="article-img">
                            <a href="#">
                                <img src="./img/img-md-4.jpg" alt="">
                            </a>
                        </div>
                        <div class="article-body">
                            <ul class="article-info">
                                <li class="article-category"><a href="#">News</a></li>
                                <li class="article-type"><i class="fa fa-file-text"></i></li>
                            </ul>
                            <h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
                            <ul class="article-meta">
                                <li><i class="fa fa-clock-o"></i> January 31, 2017</li>
                                <li><i class="fa fa-comments"></i> 33</li>
                            </ul>
                            <p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
                        </div>
                    </article>
                    <!-- /ARTICLE -->

                    <!-- pagination -->
                    <div class="article-pagination">
                        <ul>
                            <li class="active"><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /pagination -->
                </div>
                <!-- /Main Column -->

                <!-- Aside Column -->
                <div class="col-md-4">
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

                    <!-- galery widget -->
                    <div class="widget galery-widget">
                        <div class="widget-title">
                            <h2 class="title">Flickr Photos</h2>
                        </div>
                        <ul>
                            <li><a href="#"><img src="./img/img-widget-3.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-4.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-5.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-6.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-7.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-8.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-9.jpg" alt=""></a></li>
                            <li><a href="#"><img src="./img/img-widget-10.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <!-- /galery widget -->

                    <!-- tweets widget -->
                    <div class="widget tweets-widget">
                        <div class="widget-title">
                            <h2 class="title">Recent Tweets</h2>
                        </div>
                        <ul>
                            <li class="tweet">
                                <i class="fa fa-twitter"></i>
                                <div class="tweet-body">
                                    <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                                </div>
                            </li>
                            <li class="tweet">
                                <i class="fa fa-twitter"></i>
                                <div class="tweet-body">
                                    <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                                </div>
                            </li>
                            <li class="tweet">
                                <i class="fa fa-twitter"></i>
                                <div class="tweet-body">
                                    <p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /tweets widget -->
                </div>
                <!-- /Aside Column -->
            </div>
            <!-- /ROW -->
        </div>
        <!-- /CONTAINER -->
    </div>
    @include('front.partials.footer')
@endsection