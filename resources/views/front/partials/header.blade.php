<header id="header">
    <!-- Top Header -->
    <div id="top-header">
        <div class="container">
            <div class="header-links">
                <ul>
                    {{--<li><a href="#">{{$date}}, +{{$temp}}, {{$pNight}}</a></li>--}}
                    {{--<li><a href="#">{{$cityname}}</a></li>--}}
                    {{--<li><a href="#">{{$dollarN}}</a></li>--}}
                    {{--<li><a href="#">{{$dollarC}} ₮</a></li>--}}
                    {{--<li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>--}}

                </ul>
            </div>
            <div class="header-social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- /Top Header -->

    <!-- Center Header -->
    <div id="center-header">
        <div class="container">
            <div class="header-logo">
                <a href="{{url('/')}}" class="logo"><img src="/uploads/settings/logo/{{$setting->logo}}" alt=""></a>
            </div>
            <div class="header-ads">
                <img class="center-block" src="{{asset('assets/img/ad-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- /Center Header -->

    <!-- Nav Header -->
    <div id="nav-header">
        <div class="container">
            <nav id="main-nav">
                <div class="nav-logo">
                    <a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
                </div>
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    @foreach($category as $c)
                        <li><a href="{{$c->links}}">{{$c->name}}</a></li>
                    @endforeach

                </ul>
            </nav>
            <div class="button-nav">
                <button class="search-collapse-btn"><i class="fa fa-search"></i></button>
                <button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
                <div class="search-form">
                    <form>
                        <input class="input" type="text" name="search" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Nav Header -->
</header>