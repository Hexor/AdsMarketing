@extends('layouts.app')

@section('content')

    <div role="main" class="main">
        {{--滑动大图--}}
        <div class="slider-container rev_slider_wrapper" style="height: 500px;">
            <div id="revolutionSlider" class="slider rev_slider manual">
                <ul>
                    {{--<li data-transition="fade">--}}
                    {{--背景1315 480--}}
                    {{--<img src="img/demos/shop/slides/shop5/slide1.png"--}}
                    {{--alt="slide bg"--}}
                    {{--data-bgposition="center center"--}}
                    {{--data-bgfit="cover"--}}
                    {{--data-bgrepeat="no-repeat"--}}
                    {{--class="rev-slidebg">--}}

                    {{--<div class="tp-caption text-primary"--}}
                    {{--data-x="left" data-hoffset="125"--}}
                    {{--data-y="center" data-voffset="-60"--}}
                    {{--data-start="500"--}}
                    {{--data-whitespace="nowrap"--}}
                    {{--data-transform_in="y:[100%];s:500;"--}}
                    {{--data-transform_out="opacity:0;s:500;"--}}
                    {{--style="z-index: 5; font-size: 60px; text-transform: uppercase; font-weight:600; line-height:1;"--}}
                    {{--data-mask_in="x:0px;y:0px;">Huge <span style="font-weight: 800;">Sale</span></div>--}}

                    {{--<div class="tp-caption"--}}
                    {{--data-x="left" data-hoffset="235"--}}
                    {{--data-y="center" data-voffset="-10"--}}
                    {{--data-start="1000"--}}
                    {{--style="z-index: 5; font-size: 25px; font-weight: 300; line-height:1;"--}}
                    {{--data-transform_in="y:[100%];opacity:0;s:500;">Now starting at <span style="font-weight:400;">$99</span></div>--}}

                    {{--<div class="tp-caption"--}}
                    {{--data-x="left" data-hoffset="366"--}}
                    {{--data-y="center" data-voffset="40"--}}
                    {{--data-start="1500"--}}
                    {{--style="z-index: 5; font-size: 16px; font-weight: 300; line-height:1;"--}}
                    {{--data-transform_in="y:[100%];opacity:0;s:500;"><a href="#" class="btn btn-default btn-primary text-uppercase">Shop now</a></div>--}}
                    {{--背景上的图1140 * 500--}}
                    {{--<div class="tp-caption"--}}
                    {{--data-x="30"--}}
                    {{--data-y="top"--}}
                    {{--data-start="1200"--}}
                    {{--data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;" style="z-index: 4;"><img src="img/demos/shop/slides/shop5/item1.png" alt="Item"></div>--}}
                    {{--</li>--}}
                    {{--<li data-transition="fade">--}}
                    {{--1920 503--}}
                    {{--<img src="img/demos/shop/slides/shop5/slide2.jpg"--}}
                    {{--alt="slide bg"--}}
                    {{--data-bgposition="center center"--}}
                    {{--data-bgfit="cover"--}}
                    {{--data-bgrepeat="no-repeat"--}}
                    {{--class="rev-slidebg">--}}

                    {{--<div class="tp-caption"--}}
                    {{--data-x="177"--}}
                    {{--data-y="188"--}}
                    {{--data-start="1000"--}}
                    {{--data-transform_in="x:[-300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt="Border"></div>--}}

                    {{--<div class="tp-caption top-label"--}}
                    {{--data-x="227"--}}
                    {{--data-y="180"--}}
                    {{--data-start="500"--}}
                    {{--data-transform_in="y:[-300%];opacity:0;s:500;">DO YOU NEED A NEW</div>--}}

                    {{--<div class="tp-caption"--}}
                    {{--data-x="480"--}}
                    {{--data-y="188"--}}
                    {{--data-start="1000"--}}
                    {{--data-transform_in="x:[300%];opacity:0;s:500;"><img src="img/slides/slide-title-border.png" alt="Border"></div>--}}

                    {{--<div class="tp-caption main-label"--}}
                    {{--data-x="140"--}}
                    {{--data-y="210"--}}
                    {{--data-start="1500"--}}
                    {{--data-whitespace="nowrap"--}}
                    {{--data-transform_in="y:[100%];s:500;"--}}
                    {{--data-transform_out="opacity:0;s:500;"--}}
                    {{--data-mask_in="x:0px;y:0px;">eCOMMERCE?</div>--}}

                    {{--<div class="tp-caption bottom-label"--}}
                    {{--data-x="185"--}}
                    {{--data-y="280"--}}
                    {{--data-start="2000"--}}
                    {{--data-transform_in="y:[100%];opacity:0;s:500;">Check out our options and features.</div>--}}
                    {{--</li>--}}
                    <li data-transition="fade">
                        {{--1920 500--}}
                        <img src="i/img/slide1.jpg"
                             alt="slide bg"
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">
                    </li>
                </ul>
            </div>
        </div>

        <div class="homepage-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-comments-o bar-icon"></i>
                        <div class="bar-textarea">
                            <h3>免费咨询 随时获取报价</h3>
                            <p>注册之后, 即可获取所有信息</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-dollar bar-icon"></i>
                        <div class="bar-textarea">
                            <h3>更多独家资源</h3>
                            <p>更好的广告效果 让您占得先机</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-support bar-icon"></i>
                        <div class="bar-textarea">
                            <h3>在线客服支持 24/7</h3>
                            <p>全天候为您提供服务.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-lg col-md-7">
                <div class="col-md-12 center">
                    <h2 class="mb-xl"><strong>我们的优势</strong></h2>
                </div>
                <div class="row pt-xl clearfix">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="icon-user-following icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">优质的客户服务</h4>
                                <p class="mb-lg">24小时客服在线, 网站直接报价, 无中间利润</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="icon-layers icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">最全的二次元取到</h4>
                                <p class="mb-lg">Acfun, Bilibili,
                                    新浪微博等主流二次元平台热门资源</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="icon-calculator icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">众多Up签约合作</h4>
                                <p class="mb-lg">咬人猫, NLT 工厂, 敖厂长等知名up长期合作</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="icon-star icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">不强制策划捆绑</h4>
                                <p class="mb-lg">如不需要策划, 可单纯提供取到资源</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="icon-drop icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">全平台覆盖</h4>
                                <p class="mb-lg">新浪微博, 微信公众号, 映客, 一直播主流视频播放网站, 社会新闻娱乐网站</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
                            <div class="feature-box-icon">
                                <i class="icon-mouse icons text-color-quaternary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">执行速度快</h4>
                                <p class="mb-lg">签约后最迟24小时内提供专业备选方案</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{--<div class="col-md-12 center mt-xl mb-sm">--}}
                {{--<a class="btn btn-secondary mr-xs mb-sm appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900">了解更多</a>--}}
                {{--</div>--}}
            </div>
        </div>

        <section class="section section-tertiary pb-none mb-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-7" data-appear-animation="fadeInLeft">
                        <h2 class="text-light"><strong></strong>我们是谁</h2>
                        <p class="text-light" style="font-size: medium" >一年内合作策划超过500起
                            <br>
                            国内首家致力于二次元及手游推广的企业<br>
                            众多签约合作up, 网络红人<br>
                            国内首家可一键查询报价的策划服务网站</p>
                        <a class="btn btn-secondary ">了解更多</a>
                    </div>


                    <div class="col-md-4 col-md-offset-1">
                        <img style="
                        float: right;
                        overflow: visible;
                        margin: -430px 13px 0px 0px;
                        display: inline"
                             class="img-responsive
                     appear-animation"  src="i/img/labu_renwu.png" alt=""  data-appear-animation="fadeInRight">
                    </div>
                </div>
            </div>
        </section>


        <section class="section mt-none section-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                        <h2><strong> 案例介绍</strong></h2>
                    </div>
                </div>
                <div class="row mt-lg">
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-1.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-2.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-3.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem dolor sit amet, consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-4.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dot, consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-1.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-2.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-3.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem dolor sit amet, consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive" src="img/blog/blog-vintage-4.jpg" alt="Blog">
                        <div class="recent-posts mt-md mb-lg">
                            <article class="post">
                                <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dot, consectetur adipiscing elit.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                <div class="post-meta">
                                    <span><i class="fa fa-calendar"></i> January 10, 2016 </span>
                                    <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">


            <hr class="tall">

            <div class="row center">
                <div class="col-md-12">
                    <h2 class="mb-sm word-rotator-title">
                        We're not the only ones
                        <strong>
									<span class="word-rotate" data-plugin-options='{"delay": 3500, "animDelay": 400}'>
										<span class="word-rotate-items">
											<span>excited</span>
											<span>happy</span>
										</span>
									</span>
                        </strong>
                        about Porto Template...
                    </h2>
                    <h4 class="heading-primary lead tall">25,000 customers in 100 countries use Porto Template. Meet our customers.</h4>
                </div>
            </div>

            <div class="row center">
                <div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-2.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-3.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-5.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-6.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-4.png" alt="">
                    </div>
                    <div>
                        <img class="img-responsive" src="img/logos/logo-2.png" alt="">
                    </div>
                </div>
            </div>

        </div>

        <section class="section section-custom-map">
            <section class="section section-default section-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="recent-posts mb-xl">
                                <h2>公司最新 <strong>动态</strong> </h2>
                                <div class="row">
                                    <div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
                                        <div>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day">15</span>
                                                        <span class="month">Jan</span>
                                                    </div>
                                                    <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                                </article>
                                            </div>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day">15</span>
                                                        <span class="month">Jan</span>
                                                    </div>
                                                    <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                                </article>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day">12</span>
                                                        <span class="month">Jan</span>
                                                    </div>
                                                    <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                                </article>
                                            </div>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day">11</span>
                                                        <span class="month">Jan</span>
                                                    </div>
                                                    <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                                </article>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day">15</span>
                                                        <span class="month">Jan</span>
                                                    </div>
                                                    <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                                </article>
                                            </div>
                                            <div class="col-md-6">
                                                <article>
                                                    <div class="date">
                                                        <span class="day">15</span>
                                                        <span class="month">Jan</span>
                                                    </div>
                                                    <h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2><strong>客户</strong>  怎么说</h2>
                            <div class="row">
                                <div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
                                    <div>
                                        <div class="col-md-12">
                                            <div class="testimonial testimonial-primary">
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail img-thumbnail">
                                                        <img src="img/clients/client-1.jpg" alt="">
                                                    </div>
                                                    <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-12">
                                            <div class="testimonial testimonial-primary">
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                                </blockquote>
                                                <div class="testimonial-arrow-down"></div>
                                                <div class="testimonial-author">
                                                    <div class="testimonial-author-thumbnail img-thumbnail">
                                                        <img src="img/clients/client-1.jpg" alt="">
                                                    </div>
                                                    <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- 隐藏弹窗
        <div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(img/demos/shop/newsletter_popup_bg.jpg)">
            <div class="newsletter-popup-content">
                <img src="img/demos/shop/logo-shop.png" alt="Logo" class="img-responsive center-block">
                <h2>BE THE FIRST TO KNOW</h2>
                <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
                <form action="#">
                    <div class="input-group">
                        <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                        <span class="input-group-btn">
                                <input type="submit" class="btn btn-default" value="Go!">
                            </span>
                    </div>


        </form>
        隐藏弹窗 -->
        <div class="newsletter-subscribe">
            <div class="checkbox mb-none">
                <label>
                    <input type="checkbox" value="1">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div><!-- End .newsletter-popup-content -->

@endsection



