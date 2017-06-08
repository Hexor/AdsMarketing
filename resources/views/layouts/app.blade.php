<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>拉布创意</title>

    <meta name="keywords" content="二次元广告 策划 推广" />
    <meta name="description" content="拉布创意官方网站">
    <meta name="author" content="Labu Creative">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/OpenSans.css">
    <link href="/css/my.css" rel="stylesheet">
    @yield('styles')

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .form-group.required .control-label:after {
            content:"*";
            color:red;
        }
    </style>



    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="/css/skins/skin-shop-5.css">
    <link rel="stylesheet" href="/css/skins/skin-corporate-7.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-shop-5.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": false, "stickyStartAt": 155, "stickySetTop": "-155px", "stickyChangeLogo": false}'>
        <div class="header-body">
            <div class="header-top">
                <div class="container">
                    <div class="dropdowns-container">
                        {{--<div class="header-dropdown cur-dropdown">--}}
                        {{--<a href="#">USD <i class="fa fa-caret-down"></i></a>--}}

                        {{--<ul class="header-dropdownmenu">--}}
                        {{--<li><a href="#">EUR</a></li>--}}
                        {{--<li><a href="#">USD</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="header-dropdown lang-dropdown">--}}
                        {{--<a href="#"><img src="img/demos/shop/en.png" alt="English">English <i class="fa fa-caret-down"></i></a>--}}

                        {{--<ul class="header-dropdownmenu">--}}
                        {{--<li><a href="#"><img src="img/demos/shop/en.png" alt="English">English</a></li>--}}
                        {{--<li><a href="#"><img src="img/demos/shop/fr.png" alt="French">French</a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="compare-dropdown">--}}
                        {{--<a href="#"><i class="fa fa-retweet"></i> Compare (2)</a>--}}

                        {{--<div class="compare-dropdownmenu">--}}
                        {{--<div class="dropdownmenu-wrapper">--}}
                        {{--<ul class="compare-products">--}}
                        {{--<li class="product">--}}
                        {{--<a href="#" class="btn-remove" title="Remove Product"><i class="fa fa-times"></i></a>--}}
                        {{--<h4 class="product-name"><a href="demo-shop-5-product-details.html">White top</a></h4>--}}
                        {{--</li>--}}
                        {{--<li class="product">--}}
                        {{--<a href="#" class="btn-remove" title="Remove Product"><i class="fa fa-times"></i></a>--}}
                        {{--<h4 class="product-name"><a href="demo-shop-5-product-details.html">Blue Women Shirt</a></h4>--}}
                        {{--</li>--}}
                        {{--</ul>--}}

                        {{--<div class="compare-actions">--}}
                        {{--<a href="#" class="action-link">Clear All</a>--}}
                        {{--<a href="#" class="btn btn-primary">Compare</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>

                    <div class="top-menu-area">
                        <a href="#">Links <i class="fa fa-caret-down"></i></a>
                        <ul class="top-menu">
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @if (Auth::check())
                                        <li><a href="demo-shop-5-myaccount
                            .html">我的账号</a></li>
                                        <li>

                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                              登出
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>

                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}">登录</a></li>
                                        <li><a href="{{ route('register') }}">注册</a></li>
                                    @endif
                                </div>
                            @endif

                            {{--<li><a href="#">Daily Deal</a></li>--}}
                            {{--<li><a href="#">心愿单</a></li>--}}
                            {{--<li><a href="demo-shop-5-blog.html">Blog</a></li>--}}
                            {{--<li><a href="demo-shop-5-login.html">Log in</a></li>--}}
                        </ul>
                    </div>
                    <p class="welcome-msg">欢迎来到拉布创意!</p>
                </div>
            </div>
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Porto" width="111" height="51" src="i/img/logo-shop.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-column">
                        <div class="row">
                            <div class="cart-area">
                                <div class="custom-block">
                                    <i class="fa fa-phone"></i>
                                    <span>(+86) 185 7032 6964</span>
                                    <span class="split"></span>
                                    <a href="#">我的收藏</a>
                                </div>

                                <div class="cart-dropdown">
                                    <a href="#" class="cart-dropdown-icon">
                                        <i class="minicart-icon"></i>
                                        <span class="cart-info">
													<span class="cart-qty">2</span>
													<span class="cart-text">item(s)</span>
												</span>
                                    </a>

                                    <div class="cart-dropdownmenu right">
                                        <div class="dropdownmenu-wrapper">
                                            <div class="cart-products">
                                                <div class="product product-sm">
                                                    <a href="#" class="btn-remove" title="Remove Product">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <figure class="product-image-area">
                                                        <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                                                            <img src="img/demos/shop/products/thumbs/cart-product1.jpg" alt="Product Name">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details-area">
                                                        <h2 class="product-name"><a href="demo-shop-5-product-details.html" title="Product Name">Blue Women Top</a></h2>

                                                        <div class="cart-qty-price">
                                                            1 X
                                                            <span class="product-price">$65.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-sm">
                                                    <a href="#" class="btn-remove" title="Remove Product">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <figure class="product-image-area">
                                                        <a href="demo-shop-5-product-details.html" title="Product Name" class="product-image">
                                                            <img src="img/demos/shop/products/thumbs/cart-product2.jpg" alt="Product Name">
                                                        </a>
                                                    </figure>
                                                    <div class="product-details-area">
                                                        <h2 class="product-name"><a href="demo-shop-5-product-details.html" title="Product Name">Black Utility Top</a></h2>

                                                        <div class="cart-qty-price">
                                                            1 X
                                                            <span class="product-price">$39.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-totals">
                                                Total: <span>$104.00</span>
                                            </div>

                                            <div class="cart-actions">
                                                <a href="demo-shop-5-cart.html" class="btn btn-primary">View Cart</a>
                                                <a href="demo-shop-5-checkout.html" class="btn btn-primary">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="header-search">
                                <a href="#" class="search-toggle"><i class="fa fa-search"></i></a>
                                <form action="/price_list" method="get">
                                    <div class="header-search-wrapper">
                                        <input type="text" class="form-control" name="q" id="q" placeholder="搜索你想要的广告资源..." >
                                        <select id="cat" name="cat">
                                            <option value="">- 所有类别</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <a href="#" class="mmenu-toggle-btn" title="Toggle menu">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container header-nav">
                <div class="container">
                    <div class="header-nav-main">
                        <nav>
                            <ul class="nav nav-pills" id="mainNav">
                                <li class="dropdown active">
                                    <a class="dropdown-toggle" href="demo-shop-5.html">
                                        主页
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="demo-shop-1.html">Shop Demos</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-1.html" data-thumb-preview="img/demos/shop/previews/home1.jpg">Shop - Demo 1</a></li>
                                                <li><a href="demo-shop-2.html" data-thumb-preview="img/demos/shop/previews/home2.jpg">Shop - Demo 2</a></li>
                                                <li><a href="demo-shop-3.html" data-thumb-preview="img/demos/shop/previews/home3.jpg">Shop - Demo 3</a></li>
                                                <li><a href="demo-shop-4.html" data-thumb-preview="img/demos/shop/previews/home4.jpg">Shop - Demo 4</a></li>
                                                <li><a href="demo-shop-5.html" data-thumb-preview="img/demos/shop/previews/home5.jpg">Shop - Demo 5</a></li>
                                                <li><a href="demo-shop-6.html" data-thumb-preview="img/demos/shop/previews/home6.jpg">Shop - Demo 6</a></li>
                                                <li><a href="demo-shop-7.html" data-thumb-preview="img/demos/shop/previews/home7.jpg">Shop - Demo 7</a></li>
                                                <li><a href="demo-shop-8.html" data-thumb-preview="img/demos/shop/previews/home8.jpg">Shop - Demo 8</a></li>
                                                <li><a href="demo-shop-9.html" data-thumb-preview="img/demos/shop/previews/home9.jpg">Shop - Demo 9</a></li>
                                                <li><a href="demo-shop-10.html" data-thumb-preview="img/demos/shop/previews/home10.jpg">Shop - Demo 10</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="demo-shop-1.html">Shop Demos <span class="tip tip-hot">Hot!</span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-11.html" data-thumb-preview="img/demos/shop/previews/home11.jpg">Shop - Demo 11</a></li>
                                                <li><a href="demo-shop-12.html" data-thumb-preview="img/demos/shop/previews/home12.jpg">Shop - Demo 12</a></li>
                                                <li><a href="demo-shop-13.html" data-thumb-preview="img/demos/shop/previews/home13.jpg">Shop - Demo 13</a></li>
                                                <li><a href="demo-shop-14.html" data-thumb-preview="img/demos/shop/previews/home14.jpg">Shop - Demo 14</a></li>
                                                <li><a href="demo-shop-15.html" data-thumb-preview="img/demos/shop/previews/home15.jpg">Shop - Demo 15</a></li>
                                                <li><a href="demo-shop-16.html" data-thumb-preview="img/demos/shop/previews/home16.jpg">Shop - Demo 16</a></li>
                                                <li><a href="demo-shop-17.html" data-thumb-preview="img/demos/shop/previews/home17.jpg">Shop - Demo 17</a></li>
                                                <li><a href="demo-shop-18.html" data-thumb-preview="img/demos/shop/previews/home18.jpg">Shop - Demo 18</a></li>
                                                <li><a href="demo-shop-19.html" data-thumb-preview="img/demos/shop/previews/home19.jpg">Shop - Demo 19</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-mega-small">
                                    <a href="demo-shop-5-category-4col.html" class="dropdown-toggle">
                                        二次元渠道推广 <span class="tip
                                        tip-new">New</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown-mega-content dropdown-mega-content-small">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="#" class="dropdown-mega-sub-title">Women</a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">Top &amp; Blouses</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Accessories</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Dresses &amp; Skirts</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Shoes &amp; Boots</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="demo-shop-5-category-4col.html" class="dropdown-mega-sub-title">Men</a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">Accessories</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Watch Fashion<span class="tip tip-new">New</span></a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Tees, Knits &amp; Polos</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Pants &amp; Denim</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="demo-shop-5-category-4col.html" class="dropdown-mega-sub-title">Jewellery<span class="tip tip-hot">Hot!</span></a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">Sweaters</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Heels &amp; Sandals</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Jeans &amp; Shorts</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="demo-shop-5-category-4col.html" class="dropdown-mega-sub-title">Kids Fashion</a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">Casual Shoes</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Spring Autumn</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Winter Sneakers</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-5 mega-banner-bg">
                                                        <img src="img/demos/shop/menu-bg.png" alt="Banner bg">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-mega">
                                    <a href="demo-shop-5-category-4col.html" class="dropdown-toggle">
                                       微博推广
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="dropdown-mega-content">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="dropdown-mega-top">
                                                            <span>Suggestions:</span>
                                                            <a href="demo-shop-5-category-4col.html">3D</a>
                                                            <a href="demo-shop-5-category-4col.html">Mobile</a>
                                                            <a href="demo-shop-5-category-4col.html">Camera</a>
                                                            <a href="demo-shop-5-category-4col.html">Headsets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <a href="#" class="cat-img"><img src="img/demos/shop/cat-tv.png" alt="Category Name"></a>

                                                                <a href="#" class="dropdown-mega-sub-title">Smart Tvs</a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">TV, Audio</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Computers &amp; Tablets</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Home Office Equipments</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">GPS Navigation</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Car Video, Audio &amp; GPS</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Radios &amp; Clock Radios</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#" class="cat-img"><img src="img/demos/shop/cat-camera.png" alt="Category Name"></a>
                                                                <a href="#" class="dropdown-mega-sub-title">Cameras</a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">Cell Phones &amp; Accessories</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Cameras &amp; Photo</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Photo Accessories</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">IP Phones</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Samsung Galaxy Phones</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">iPad &amp; Android Tablets</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="#" class="cat-img"><img src="img/demos/shop/cat-game.png" alt="Category Name"></a>
                                                                <a href="#" class="dropdown-mega-sub-title">Games</a>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a href="demo-shop-5-category-4col.html">e-Book Readers</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Video Games &amp; Consolers</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Printers &amp; Scanners</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Digital Picture Frames</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">3D Fashion Games</a></li>
                                                                    <li><a href="demo-shop-5-category-4col.html">Game Machine &amp; Devices</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="menu-banner-area">
                                                            <img src="img/demos/shop/menu-cat.png" alt="Menu Banner">
                                                            <div class="menu-banner-header">
                                                                <h3>Shop Now <span class="font-weight-bold">3D</span> <span class="font-weight-extra-bold">Tv's</span></h3>
                                                                <a href="#" class="btn btn-primary">View now <i class="fa fa-caret-right"></i></a>
                                                            </div>
                                                            <p>This is a custom block. You can add any images or links here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#">
                                        视频播客推广
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#">Category</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-5-category-2col.html">Category - 2 Columns</a></li>
                                                <li><a href="demo-shop-5-category-3col.html">Category - 3 Columns</a></li>
                                                <li><a href="demo-shop-5-category-4col.html">Category - 4 Columns</a></li>
                                                <li><a href="demo-shop-5-category-5col.html">Category - 5 Columns</a></li>
                                                <li><a href="demo-shop-5-category-6col.html">Category - 6 Columns</a></li>
                                                <li><a href="demo-shop-5-category-7col.html">Category - 7 Columns</a></li>
                                                <li><a href="demo-shop-5-category-8col.html">Category - 8 Columns</a></li>
                                                <li><a href="demo-shop-5-category-list.html">Category - List</a></li>
                                                <li><a href="demo-shop-5-category-right-sidebar.html">Rigt Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Category Banners</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-5-category-banner-boxed-slider.html">Boxed Slider</a></li>
                                                <li><a href="demo-shop-5-category-banner-boxed-image.html">Boxed Image</a></li>
                                                <li><a href="demo-shop-5-category-banner-fullwidth.html">Fullwidth Image</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Product Details</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-5-product-details.html">Product Details</a></li>
                                                <li><a href="demo-shop-5-product-details2.html">Product Details 2</a></li>
                                                <li><a href="demo-shop-5-product-details3.html">Product Details 3</a></li>
                                                <li><a href="demo-shop-5-product-details4.html">Product Details 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="demo-shop-5-cart.html">Shopping Cart</a></li>
                                        <li><a href="demo-shop-5-checkout.html">Checkout</a></li>
                                        <li><a href="demo-shop-5-about-us.html">About Us</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Dashboard</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-5-dashboard.html">Dashboard</a></li>
                                                <li><a href="demo-shop-5-myaccount.html">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Login &amp; Register</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="demo-shop-5-login.html">Login</a></li>
                                                <li><a href="demo-shop-5-register.html">Register</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">
                                        门户头条推广
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="demo-shop-5-blog.html">Blog</a></li>
                                        <li><a href="demo-shop-5-blog-post.html">Blog Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle">
                                        微信公众号推广
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="demo-shop-5-blog.html">Blog</a></li>
                                        <li><a href="demo-shop-5-blog-post.html">Blog Post</a></li>
                                    </ul>
                                </li>
                                <li class="pull-right">
                                    <a href="demo-shop-5-contact-us.html">
                                        联系我们 <span class="tip
                                        tip-hot">Hot!</span>
                                    </a>
                                </li>
                                {{--<li class="pull-right ">--}}
                                    {{--<a href="#">--}}
                                        {{--Buy Porto!--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-nav">
        <div class="mobile-nav-wrapper">
            <ul class="mobile-side-menu">
                <li><a href="demo-shop-5.html">Home</a></li>
                <li>
                    <span class="mmenu-toggle"></span>
                    <a href="#">Fashion <span class="tip tip-new">New</span></a>

                    <ul>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Women</a>
                            <ul>
                                <li>
                                    <a href="#">Tops &amp; Blouses</a>
                                </li>
                                <li>
                                    <a href="#">Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Dresses &amp; Skirts</a>
                                </li>
                                <li>
                                    <a href="#">Shoes &amp; Boots</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Men</a>

                            <ul>
                                <li>
                                    <a href="#">Accessories</a>
                                </li>
                                <li>
                                    <a href="#">Watch &amp; Fashion <span class="tip tip-new">New</span></a>
                                </li>
                                <li>
                                    <a href="#">Tees, Knits &amp; Polos</a>
                                </li>
                                <li>
                                    <a href="#">Pants &amp; Denim</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Jewellery <span class="tip tip-hot">Hot</span></a>

                            <ul>
                                <li>
                                    <a href="#">Sweaters</a>
                                </li>
                                <li>
                                    <a href="#">Heels &amp; Sandals</a>
                                </li>
                                <li>
                                    <a href="#">Jeans &amp; Shorts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Kids Fashion</a>

                            <ul>
                                <li>
                                    <a href="#">Casual Shoes</a>
                                </li>
                                <li>
                                    <a href="#">Spring &amp; Autumn</a>
                                </li>
                                <li>
                                    <a href="#">Winter Sneakers</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <span class="mmenu-toggle"></span>
                    <a href="#">Pages <span class="tip tip-hot">Hot!</span></a>

                    <ul>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Category</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-category-2col.html">2 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-3col.html">3 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-4col.html">4 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-5col.html">5 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-6col.html">6 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-7col.html">7 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-8col.html">8 Columns</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-right-sidebar.html">Right Sidebar</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-list.html">Category List</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Category Banners</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-category-banner-boxed-slider.html">Boxed slider</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-banner-boxed-image.html">Boxed Image</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-category-banner-fullwidth.html">Fullwidth</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Product Details</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-product-details.html">Product Details 1</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-product-details2.html">Product Details 2</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-product-details3.html">Product Details 3</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-product-details4.html">Product Details 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="demo-shop-5-cart.html">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="demo-shop-5-checkout.html">Checkout</a>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Loign &amp; Register</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-login.html">Login</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-register.html">Register</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="mmenu-toggle"></span>
                            <a href="#">Dashboard</a>
                            <ul>
                                <li>
                                    <a href="demo-shop-5-dashboard.html">Dashboard</a>
                                </li>
                                <li>
                                    <a href="demo-shop-5-myaccount.html">My Account</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="demo-shop-5-about-us.html">About Us</a>
                </li>
                <li>
                    <span class="mmenu-toggle"></span>
                    <a href="#">Blog</a>
                    <ul>
                        <li><a href="demo-shop-5-blog.html">Blog</a></li>
                        <li><a href="demo-shop-5-blog-post.html">Blog Post</a></li>
                    </ul>
                </li>
                <li>
                    <a href="demo-shop-5-contact-us.html">Contact Us</a>
                </li>
                <li>
                    <a href="#">Buy Porto!</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="mobile-menu-overlay"></div>

    @yield('content')
</div><!-- End .newsletter-popup -->

</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="footer-ribbon">
                <span>Get in Touch</span>
            </div>

            <div class="col-md-3">
                <h4>My Account</h4>
                <ul class="links">
                    <li>
                        <i class="fa fa-caret-right text-color-primary"></i>
                        <a href="demo-shop-5-about-us.html">About Us</a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right text-color-primary"></i>
                        <a href="demo-shop-5-contact-us.html">Contact Us</a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right text-color-primary"></i>
                        <a href="demo-shop-5-myaccount.html">My account</a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right text-color-primary"></i>
                        <a href="#">Orders history</a>
                    </li>
                    <li>
                        <i class="fa fa-caret-right text-color-primary"></i>
                        <a href="#">Advanced search</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="contact-details">
                    <h4>Contact Information</h4>
                    <ul class="contact">
                        <li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><br> 1234 Street Name, City, US</p></li>
                        <li><p><i class="fa fa-phone"></i> <strong>Phone:</strong><br> (123) 456-7890</p></li>
                        <li><p><i class="fa fa-envelope-o"></i> <strong>Email:</strong><br> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
                        <li><p><i class="fa fa-clock-o"></i> <strong>Working Days/Hours:</strong><br> Mon - Sun / 9:00AM - 8:00PM</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Main Features</h4>
                <ul class="features">
                    <li>
                        <i class="fa fa-check text-color-primary"></i>
                        <a href="#">Super Fast Template</a>
                    </li>
                    <li>
                        <i class="fa fa-check text-color-primary"></i>
                        <a href="#">1st Seller Template</a>
                    </li>
                    <li>
                        <i class="fa fa-check text-color-primary"></i>
                        <a href="#">19 Unique Shop Layouts</a>
                    </li>
                    <li>
                        <i class="fa fa-check text-color-primary"></i>
                        <a href="#">Powerful Template Features</a>
                    </li>
                    <li>
                        <i class="fa fa-check text-color-primary"></i>
                        <a href="#">Mobile &amp; Retina Optimized</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="newsletter">
                    <h4>Be the First to Know</h4>
                    <p class="newsletter-info">Get all the latest information on Events,<br> Sales and Offers. Sign up for newsletter today.</p>

                    <div class="alert alert-success hidden" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>

                    <div class="alert alert-danger hidden" id="newsletterError"></div>


                    <p>Enter your e-mail Address:</p>
                    <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
                        <div class="input-group">
                            <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                            <span class="input-group-btn">
											<button class="btn btn-primary" type="submit">Submit</button>
										</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a href="index.html" class="logo">
                <img alt="Porto Website Template" class="img-responsive" src="img/demos/shop/logo-footer.png">
            </a>
            <ul class="social-icons">
                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <img alt="Payments" src="img/demos/shop/payments.png" class="footer-payment">
            <p class="copyright-text">© Copyright 2016. All Rights Reserved.</p>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>


<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>



<!-- Demo -->
<script src="js/demos/demo-shop-5.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<script src="/js/my.js"></script>

<script>
    function jump(target)
    {
        window.location.href = target;
    }
</script>

@yield('scripts')



<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->


</body>
</html>
