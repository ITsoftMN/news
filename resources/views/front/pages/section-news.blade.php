<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-8">
                <!-- row -->
                <div class="row">

                    @foreach($category as $cat)
                    <div class="col-md-6 col-sm-6">
                        <!-- section title -->
                        <div class="section-title">
                            <h2 class="title">{{$cat->name}}</h2>
                        </div>

                        <!-- /section title -->

                        <!-- ARTICLE -->
                        @if($cat->news != null)
                        @foreach($cat->news as $n =>$item)
                            @if($n == 0)
                                <article class="article">
                                    <div class="article-img">
                                        <a href="#">
                                            <img src="/uploads/news/small/{{$item->image}}" alt="">
                                        </a>
                                        <ul class="article-info">
                                            <li class="article-type"><i class="fa fa-camera"></i></li>
                                        </ul>
                                    </div>
                                    <div class="article-body">
                                        <h5 class="article-title"><a href="{{url('news/desc',$item->id)}}">{{$item->title}}</a></h5>
                                        <ul class="article-meta">
                                            <li><i class="fa fa-clock-o"></i> {{$item->created_at->diffForHumans()}}</li>
                                            <li><i class="fa fa-comments"> {{count($item->Commend)}}</i></li>
                                            <li><i class="fa fa-heart"> {{$item->seen}}</i></li>
                                        </ul>
                                        <p>
                                            {!! substr($item->description,0,240) !!}...
                                        </p>
                                    </div>
                                </article>
                            @elseif($n >= 1 && $n <= 4)
                                <article class="article widget-article">
                                    <div class="article-img">
                                        <a href="#">
                                            <img src="/uploads/news/small/{{$item->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="article-body">
                                        <h5 class="article-title"><a href="{{url('news/desc',$item->id)}}">{{$item->title}}</a></h5>
                                        <ul class="article-meta">
                                            <li><i class="fa fa-clock-o"></i> {{$item->created_at->diffForHumans()}}</li>
                                            <li><i class="fa fa-comments"> {{count($item->Commend)}}</i></li>
                                            <li><i class="fa fa-heart"> {{$item->seen}}</i></li>
                                        </ul>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                        @else
                        @endif
                    </div>
                    @endforeach
                </div>

            </div>
            <!-- /Main Column -->

            <!-- Aside Column -->
            <div class="col-md-4">
                <div class="widget">

                    <div class="section-title">
                        <h2 class="title">Их уншсан</h2>
                    </div>

                    <!-- owl carousel 3 -->
                    <div id="owl-carousel-4" class="owl-carousel owl-theme">
                        <!-- ARTICLE -->

                        @foreach($max as $m)
                            <article class="article thumb-article">
                                <div class="article-img">
                                    <a href="#">
                                        <img src="/uploads/news/small/{{$m->image}}" alt="">
                                    </a>

                                </div>
                                <div class="article-body">
                                    <ul class="article-info">
                                        <li class="article-category"><a href="#">{{$m->category->name}}</a></li>
                                        <li class="article-type"><i class="fa fa-video-camera"></i></li>
                                    </ul>
                                    <h5 class="article-title"><a href="{{url('news/desc',$m->id)}}">{{$m->title}}</a></h5>
                                    <ul class="article-meta">
                                        <li title="{{$m->created_at}}"><i class="fa fa-clock-o"></i> {{$m->created_at->diffForHumans()}}</li>
                                        <li><i class="fa fa-comments"></i> {{count($m->Commend)}}</li>
                                        <li><i class="fa fa-heart"></i> {{$m->seen}}</li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    
                </div>
                <!-- Ad widget -->
                <div class="widget center-block hidden-xs">
                    <img class="center-block" src="assets/img/ad-1.jpg" alt="">
                </div>

                <div class="widget">
                    <div class="widget-title">
                        <h2 class="title">Most Read</h2>
                    </div>

                    <!-- owl carousel 3 -->
                    <div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">

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

                    </div>

                </div>
                <div class="widget subscribe-widget">
                    <div class="widget-title">
                        <h2 class="title">Subscribe to Newslatter</h2>
                    </div>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="input-btn">Subscribe</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>