<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-12">
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">Trending Posts</h2>
                    <!-- tab nav -->
                    <ul class="tab-nav pull-right">
                        <li class="active"><a data-toggle="tab" href="#tab1">All</a></li>
                        @foreach($category as $c)
                            <li>
                                <a data-toggle="tab" href="#tab{{$c->id}}">{{$c->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /tab nav -->
                </div>
                <!-- /section title -->

                <!-- Tab content -->
                <div class="tab-content">
                @foreach($news as $n)
                    <!-- tab1 -->
                    <div id="tab{{$n->category->id}}" class="tab-pane fade in active">
                        <!-- row -->
                        <div class="row">
                            <!-- Column 1 -->

                            <div class="col-md-3 col-sm-6">

                                <article class="article">
                                    <div class="article-img">
                                        <a href="#">
                                            <img src="{{asset('assets/img/img-md-1.jpg')}}" alt="">
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

                            </div>

                        </div>

                    </div>
                    @endforeach()
                    <!-- /tab1 -->
                </div>
                <!-- /tab content -->
            </div>
            <!-- /Main Column -->
        </div>
        <!-- /ROW -->
    </div>
    <!-- /CONTAINER -->
</div>