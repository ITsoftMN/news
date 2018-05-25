<div class="section">
    <!-- CONTAINER -->
    <div class="container">
        <!-- ROW -->
        <div class="row">
            <!-- Main Column -->
            <div class="col-md-12">
                <!-- section title -->
                <div class="section-title">
                    <h2 class="title">Онцлох мэдээ</h2>
                    <!-- tab nav -->
                    <div class="row">
                        @foreach($featured as $n)
                            <div class="col-md-3 col-sm-6">
                                <article class="article">
                                    <div class="article-img">
                                        <a href="#">
                                            <img src="/uploads/news/small/{{$n->image}}" alt="">
                                        </a>
                                        <ul class="article-info">
                                            <li class="article-type"><i class="fa fa-camera"></i></li>
                                        </ul>
                                    </div>
                                    <div class="article-body">
                                        <h5 class="article-title"><a href="{{url('news/desc',$n->id)}}">{{$n->title}}</a></h5>
                                        <ul class="article-meta">
                                            <li><i class="fa fa-clock-o"></i> {{$n->created_at->diffForHumans()}}</li>
                                            <li><i class="fa fa-comments"> {{count($n->Commend)}}</i></li>
                                            <li><i class="fa fa-heart"> {{$n->seen}}</i></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>