@extends('layout')
@section('title')
<title>SeratusPlus | Brand Account</title>
@endsection
@section('content')
<div class="section pt-40 pb-55">
    <div class="container">
        <div class="desc-left">
            <img class="" src="{{asset('front/img/icon/close.png')}}" style="width: 45px;margin-right: 20px;" height="45">
            <select class="select1" style="">
                <option value="1">KEKAYUAN INDONESIA</option>
                <option value="1">Manage Brand Page</option>
                <option value="1">Manage Account</option>
            </select>
            <span class="text-16" style="font-style: italic">Your subscription ends in 3 days. <a href="">Click here</a> to extend</span>
        </div> 
        <div class="desc-right" style="display: inline-flex">
            <div class="header-cart float-left">
                <!-- Cart Toggle -->
                <a class="cart-toggle" href="#" data-toggle="dropdown">
                    <i class="pe-7s-info"></i>
                    <span>2</span>
                </a>
                <!-- Mini Cart Brief -->
                <div class="mini-cart-brief dropdown-menu text-left">
                    <div class="cart-items">Notification</div>
                    <!-- Cart Products -->
                    <div class="all-cart-product clearfix">
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Seratusplus approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Seratusplus approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Seratusplus approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Seratusplus approved your photo
                        </div>                            
                    </div>
                    <!-- Cart Button -->
                    <div class="cart-bottom">
                        <a href="#">VIEW ALL NOTIFICATIONS</a>
                    </div>
                </div>
            </div>
            <div class="icon-corner">
                <i class="fa fa-envelope"></i>
            </div>

        </div>
    </div>
</div>
<div class="section pt-65 pb-40" style="border-top: solid 1px #c4c4c4">
    <div class="container">
        <div class="col-md-6" style="padding-left: 0">
            <div class="col-md-12 pt-20 pb-60" style="border: solid 1px #c4c4c4;">
                <div class="col-md-12" style="padding: 15px;">
                    <div class="desc-left">
                        <i class="fa fa-heart"></i>
                        <span class="" style="margin-left: 15px;font-size: 15px;">MOST LOVED PRODUCTS</span>
                    </div>
                    <div class="desc-right">
                        <span class="text-16" style="font-style: italic"><a style="color: #e5c773" href="">view details&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></span>
                    </div>
                    <br>
                    <hr style="color: #c4c4c4;height: 1px;display: block;background: #c4c4c4;border: 0">
                    <br>
                    <div class="product-slider product-slider-4">
                        <!-- product-item start -->
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 0">
            <div class="col-md-12 pt-20 pb-60" style="border: solid 1px #c4c4c4;">
                <div class="col-md-12" style="padding: 15px;">
                    <div class="desc-left">
                        <i class="fa fa-plus"></i>
                        <span class="" style="margin-left: 15px;font-size: 15px;">MOST COLLECTED PRODUCTS</span>
                    </div>
                    <div class="desc-right">
                        <span class="text-16" style="font-style: italic"><a style="color: #e5c773" href="">view details&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a></span>
                    </div>
                    <br>
                    <hr style="color: #c4c4c4;height: 1px;display: block;background: #c4c4c4;border: 0">
                    <br>
                    <div class="product-slider product-slider-4">
                        <!-- product-item start -->
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-6" style="padding-left: 5px;padding-right: 5px;">
                                    <div class="single-banner">
                                        <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-12" style="height: 33px;padding-left: 5px;padding-right: 5px;">
                                    <div class="bg-pink">
                                        <span class="text-11" style="margin-left: 10px;">1020 likes</span>
                                    </div>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<div class="section pt-30 pb-40" style="">
    <div class="container">
        <div class="col-md-12 pt-20 pb-60" style="border: solid 1px #c4c4c4;padding: 15px;">
            <div class="col-md-12 mb-30 text-18" style="">
                <div class="desc-left">
                    <i class="fa fa-map-marker"></i>
                    <span class="" style="margin-left: 15px;">TOP LOCATIONS</span>
                </div>
                <div class="desc-right">
                    <button class="no-border warnadasar" style="width: 177px;height: 35px;">CITIES</button>
                    <button class="bg-putih" style="border: solid 1px #d1d2d3;width: 177px;height: 35px;margin-left: -4px;">COUNTRIES</button>
                </div>
            </div>
            <div class="col-md-12 mb-30" style="">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td style="width: 20%">Jakarta</td>
                            <td style="width: 70%">
                                <div class="progress" style="margin-bottom: 0;">
                                    <div class="progress-bar bg-abuabu" role="progressbar" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 10%">90%</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Jakarta</td>
                            <td style="width: 70%">
                                <div class="progress" style="margin-bottom: 0;">
                                    <div class="progress-bar bg-abuabu" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 10%">20%</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Jakarta</td>
                            <td style="width: 70%">
                                <div class="progress" style="margin-bottom: 0;">
                                    <div class="progress-bar bg-abuabu" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 10%">50%</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Jakarta</td>
                            <td style="width: 70%">
                                <div class="progress" style="margin-bottom: 0;">
                                    <div class="progress-bar bg-abuabu" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 10%">70%</td>
                        </tr>
                        <tr>
                            <td style="width: 20%">Jakarta</td>
                            <td style="width: 70%">
                                <div class="progress" style="margin-bottom: 0;">
                                    <div class="progress-bar bg-abuabu" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    </div>
                                </div>
                            </td>
                            <td style="width: 10%">70%</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-12 mb-30 text-18" style="">
                <div class="desc-right">
                    <button class="no-border warnadasar" style="width: 177px;height: 35px;">DAY</button>
                    <button class="bg-putih" style="border: solid 1px #d1d2d3;width: 177px;height: 35px;margin-left: -4px;">WEEK</button>
                    <button class="bg-putih" style="border: solid 1px #d1d2d3;width: 177px;height: 35px;margin-left: -4px;">MONTH</button>
                    <button class="bg-putih" style="border: solid 1px #d1d2d3;width: 177px;height: 35px;margin-left: -4px;">YEAR</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section pt-30 pb-30 bg-abuabu">
    <div class="container pt-70 pb-70">
        <div class="desc-left">
            <span class="text-18">Request additional services. insights reports, articles, photography, etc.</span>
        </div>
        <div class="desc-right">
            <button class="no-border warnadasar text-14" style="height: 35px;width: 220px;color: black;">REQUEST</button>
        </div>
    </div>
</div>
<div class="section pt-10 pb-5">
    <div class="container">
        <h5>RELATED ARTICLES</h5>
    </div>
</div>
<div class="blog-section section pt-5 pb-20">
    <div class="container">
        <div class="row">
            <!-- blog-item start -->
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6 no-padding" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6 no-padding" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6 no-padding" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection
@section('css')
<style media="screen" type="text/css">
    @media (min-width: 992px) {
    }
    @media (min-width: 768px) and (max-width: 992px) {
        .brand-detail-img{
            height: 230px!important;
        }
        .text-10{
            font-size: 10px!important;
        }
        .deskripsi{
            padding-top: 20px!important;
        }
        .mb-xs-5{
            margin-bottom: 5px!important;
        }
    }
    @media (max-width: 768px) {
        .brand-detail-img{
            height: 230px!important;
        }
        .text-10{
            font-size: 10px!important;
        }
        .deskripsi{
            padding-top: 20px!important;
        }
        .mb-xs-5{
            margin-bottom: 5px!important;
        }
    }
    .select1 {
        -moz-appearance: none;
        background: white url("{{asset('front/img/icon/select-arrow-down.png')}}") no-repeat scroll right center;
        border: 1px solid #ddd;
        color: #666;
        font-size: 12px;
        height: 36px;
        padding: 0 30px 0 10px;
        height: 45px;
        margin-right: 25px;
    }
    .select1 option{
        border-bottom: solid 1px #d1d2d3;
        padding: 10px;
    }
    .icon-corner{
        padding-left: 20px;
        padding-right: 20px;
        border-left:solid 1px #b5b5b5;
        border-right:solid 1px #b5b5b5;
    }
    .desc-left{
        float: left;
    }
    .desc-right{
        float: right;
    }
    .header-cart{
        padding: 0 10px;

    }
    .mini-cart-brief .cart-items{
        font-size: 13px;
        background-color: #d1d2d3;
        margin: -20px -20px 0;
        padding: 15px 20px;
    } 
    .single-cart{
        margin-bottom: 0;
        line-height: 44px;
    }
    .cart-bottom{
        margin: -1px -20px -20px;
    }
    .cart-bottom a{
        background-color: gray;
    }
    .cart-bottom a:hover{
        background-color: #e5c773;
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('.expand').click(function () {
            for (var i = 0; i < 10; i++) {
                $('.brand-list').append('<li>CAHAYA</li>');
            }
        })
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection