@extends('layouts.app')

@section('content')


    <div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">

                    <div class="container-fluid">
                        {{--<div class="row page-title-row">--}}
                            {{--</div>--}}

                            {{--<div class="col-md-6 text-right">--}}
                                {{--<a href="/event/create" class="btn btn-primary btn-md">--}}
                                    {{--<i class="fa fa-plus-circle"></i> 新建活动--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <br>

                        <div class="row">
                            <div class="col-sm-12" >

                                <table id="price-table" class="table
                                table-striped
                    table-bordered">
                                    <thead>
                                    <tr>
                                        <th>承接方</th>
                                        <th >平台</th>
                                        <th >价格</th>
                                        <th >粉丝量</th>
                                        <th >简介</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

                <aside class="col-md-3 col-md-pull-9 sidebar shop-sidebar">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-category">
                                        Categories
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-filter-category" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Top &amp; Blouses</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Pants &amp; Denim</a></li>
                                        <li><a href="#">Dresses &amp; Skirts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-price">
                                        Price
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-filter-price" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <div class="filter-price">
                                        <div id="price-slider"></div>
                                        <div class="filter-price-details">
                                            <span>from</span>
                                            <input type="text" id="price-range-low" class="form-control" placeholder="Min">
                                            <span>to</span>
                                            <input type="text" id="price-range-high" class="form-control" placeholder="Max">
                                            <a href="#" class="btn btn-primary">FILTER</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-size">
                                        Size
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-filter-size" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <ul class="configurable-filter-list">
                                        <li>
                                            <a href="#">S</a>
                                        </li>
                                        <li>
                                            <a href="#">M</a>
                                        </li>
                                        <li>
                                            <a href="#">L</a>
                                        </li>
                                        <li>
                                            <a href="#">XL</a>
                                        </li>
                                        <li>
                                            <a href="#">2XL</a>
                                        </li>
                                        <li>
                                            <a href="#">3XL</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-brand">
                                        Brands
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-filter-brand" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Nike</a></li>
                                        <li><a href="#">Adidas</a></li>
                                        <li><a href="#">Puma</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" href="#panel-filter-color">
                                        color
                                    </a>
                                </h4>
                            </div>
                            <div id="panel-filter-color" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <ul class="configurable-filter-list filter-list-color">
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #000"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #21284f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #272725"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #006b20"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #68686a"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #1736a9"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #f6edd1"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #a69172"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #d8c7a7"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #fd9904"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #f56ab8"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #442937"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #bd1721"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #1226ad"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #cbcbcb"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #c7b89a"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span style="background-color: #fff"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4>Featured</h4>
                    <div class="owl-carousel owl-theme" data-plugin-options='{"items":1, "margin": 5, "dots": false, "nav": true}'>
                        <div>
                            <div class="product product-sm">
                                <figure class="product-image-area">
                                    <a href="demo-shop-1-product-details.html" title="Product Name" class="product-image">
                                        <img src="img/demos/shop/products/product13.jpg" alt="Product Name">
                                        <img src="img/demos/shop/products/product13-2.jpg" alt="Product Name" class="product-hover-image">
                                    </a>
                                </figure>
                                <div class="product-details-area">
                                    <h2 class="product-name"><a href="demo-shop-1-product-details.html" title="Product Name">Diamond Ring - S</a></h2>
                                    <div class="product-ratings">
                                        <div class="ratings-box">
                                            <div class="rating" style="width:0%"></div>
                                        </div>
                                    </div>

                                    <div class="product-price-box">
                                        <span class="product-price">$220.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="product product-sm">
                                <figure class="product-image-area">
                                    <a href="demo-shop-1-product-details.html" title="Product Name" class="product-image">
                                        <img src="img/demos/shop/products/product14.jpg" alt="Product Name">
                                    </a>
                                </figure>
                                <div class="product-details-area">
                                    <h2 class="product-name"><a href="demo-shop-1-product-details.html" title="Product Name">Diamond Ring - XL</a></h2>
                                    <div class="product-ratings">
                                        <div class="ratings-box">
                                            <div class="rating" style="width:80%"></div>
                                        </div>
                                    </div>

                                    <div class="product-price-box">
                                        <span class="product-price">$180.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="product product-sm">
                                <figure class="product-image-area">
                                    <a href="demo-shop-1-product-details.html" title="Product Name" class="product-image">
                                        <img src="img/demos/shop/products/product15.jpg" alt="Product Name">
                                    </a>
                                </figure>
                                <div class="product-details-area">
                                    <h2 class="product-name"><a href="demo-shop-1-product-details.html" title="Product Name">Diamond Ring - 2XL</a></h2>
                                    <div class="product-ratings">
                                        <div class="ratings-box">
                                            <div class="rating" style="width:0%"></div>
                                        </div>
                                    </div>

                                    <div class="product-price-box">
                                        <span class="product-price">$240.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product product-sm">
                                <figure class="product-image-area">
                                    <a href="demo-shop-1-product-details.html" title="Product Name" class="product-image">
                                        <img src="img/demos/shop/products/product16.jpg" alt="Product Name">
                                        <img src="img/demos/shop/products/product16-2.jpg" alt="Product Name" class="product-hover-image">
                                    </a>
                                </figure>
                                <div class="product-details-area">
                                    <h2 class="product-name"><a href="demo-shop-1-product-details.html" title="Product Name">Diamond Ring - 3XL</a></h2>
                                    <div class="product-ratings">
                                        <div class="ratings-box">
                                            <div class="rating" style="width:60%"></div>
                                        </div>
                                    </div>

                                    <div class="product-price-box">
                                        <span class="product-price">$220.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="product product-sm">
                                <figure class="product-image-area">
                                    <a href="demo-shop-1-product-details.html" title="Product Name" class="product-image">
                                        <img src="img/demos/shop/products/product17.jpg" alt="Product Name">
                                    </a>
                                </figure>
                                <div class="product-details-area">
                                    <h2 class="product-name"><a href="demo-shop-1-product-details.html" title="Product Name">Diamond Ring - M</a></h2>
                                    <div class="product-ratings">
                                        <div class="ratings-box">
                                            <div class="rating" style="width:0%"></div>
                                        </div>
                                    </div>

                                    <div class="product-price-box">
                                        <span class="product-price">$180.00</span>
                                    </div>
                                </div>
                            </div>

                            <div class="product product-sm">
                                <figure class="product-image-area">
                                    <a href="demo-shop-1-product-details.html" title="Product Name" class="product-image">
                                        <img src="img/demos/shop/products/product13.jpg" alt="Product Name">
                                    </a>
                                </figure>
                                <div class="product-details-area">
                                    <h2 class="product-name"><a href="demo-shop-1-product-details.html" title="Product Name">Diamond Ring - XL</a></h2>
                                    <div class="product-ratings">
                                        <div class="ratings-box">
                                            <div class="rating" style="width:80%"></div>
                                        </div>
                                    </div>

                                    <div class="product-price-box">
                                        <span class="product-price">$240.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>

    </div>


@endsection

@section('scripts')

@section('scripts')
    <script>

        function trim(str) {
            return str.replace(/(^\s+)|(\s+$)/g, "");
        }

        $(function() {
            $("#price-table").DataTable( {
//                initComplete : function() {
//                    var input = $('.dataTables_filter input').unbind()
//                    self = this.api()
//                    $space = $('<span> </span>')
//                    $searchButton = $('<button type="submit" class="btn ' +
//                        'btn-primary btn-sm btn-info">')
//                        .text('搜索')
//                        .click(function () {
//                            self.search(input.val()).draw();
//                        })
//                    $space2 = $('<span> </span>')
//                    $clearButton = $('<button  type="submit" class="btn btn-sm btn-sm btn-info">')
//                        .text('重置')
//                        .click(function () {
//                            input.val('');
//                            $searchButton.click();
//                        })
//                    $('.dataTables_filter').append($space, $searchButton,
//                        $space2)
////                        $clearButton)
//                    $(".dataTables_filter input").on('keydown', function (e) {
//                        if (e.which == 13) {
//                            self.search(input.val()).draw();
//                        }
//                    })
//                },
//                "order": [[ 2, "desc" ]],
                "pageLength": 10,
                processing: true,
                serverSide: true,
                ajax: '/api/suppliers',
//                columnDefs: [ {
//                    targets: 4,
//                    render: function ( data, type, row ) {
//                        if (trim(data).length > 10) {
//                            return data.substr( 0, 10 ) + "...";
//                        }
//
//                        return data;
//                    }
//                } ],
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'platform', name: 'platform'},
                    {data: 'price', name: 'price',searchable: false},
                    {data: 'subscriber_amount', name: 'subscriber_amount',
                        orderable: true,
                        searchable: false},
                    {data: 'intro', name: 'intro', orderable: false,
                        searchable: false},
                ],
                language: {
                    "searchPlaceholder": "名称 或 平台",
                    "sProcessing": "处理中...",
                    "sLengthMenu": "显示 _MENU_ 项结果",
                    "sZeroRecords": "没有匹配结果",
                    "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                    "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                    "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                    "sInfoPostFix": "",
                    "sSearch": "搜索:",
                    "sUrl": "",
                    "sEmptyTable": "表中数据为空",
                    "sLoadingRecords": "载入中...",
                    "sInfoThousands": ",",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "上页",
                        "sNext": "下页",
                        "sLast": "末页"
                    },
                    "oAria": {
                        "sSortAscending": ": 以升序排列此列",
                        "sSortDescending": ": 以降序排列此列"
                    }
                }
            } );
        });
    </script>
@endsection