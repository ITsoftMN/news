<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
    <!-- ARTICLE -->
    @foreach($homeslider as $h)
    <article class="article thumb-article">
        <div class="article-img">
            <img src="/uploads/news/original/{{$h->image}}" alt="">
        </div>
        <div class="article-body">
            <ul class="article-info">
                <li class="article-category"><a href="#">{{$h->category->name}}</a></li>
                <li class="article-type"><i class="fa fa-camera"></i></li>
            </ul>
            <h2 class="article-title"><a href="#">{{$h->title}}</a></h2>
            <ul class="article-meta">
                <li title="{{$h->created_at}}"><i class="fa fa-clock-o"></i> {{$h->created_at->diffForHumans()}}</li>
                <li><i class="fa fa-comments"></i> 33</li>
            </ul>
        </div>
    </article>
    @endforeach
</div>