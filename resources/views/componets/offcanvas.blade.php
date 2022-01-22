<!--offcanvas menu area start-->
<div class="body_overlay"></div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div id="menu" class="text-left">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('service')}}">Service</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('portfolio')}}">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li>
                                        <a href="single-portfolio.html">Single Portfolio</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('blog')}}">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->