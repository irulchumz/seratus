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
            <span class="text-16" style="font-style: italic">Your subcription ends in 3 days. <a href="">Click here</a> to extend</span>
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
                            Simpul approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                        <div class="single-cart text-12 text-roboto" style="border-bottom: solid 1px #d1d2d3;">
                            Simpul approved your photo
                        </div>                            
                    </div>
                    <!-- Cart Button -->
                    <div class="cart-bottom">
                        <a href="#">VIEW ALL NOTIFICATION</a>
                    </div>
                </div>
            </div>
            <div class="icon-corner">
                <i class="fa fa-envelope"></i>
            </div>

        </div>
    </div>
</div>
<div class="section pt-55" style="border-top: solid 1px #c4c4c4">
    <div class="container">
        <div class="col-md-12 pb-10" style="border-bottom: solid 1px #c4c4c4;padding-left: 0;padding-right: 0;">               
            <a href="{{URL::to('loved-product/collection')}}"><button type="button" class="lebar-15" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3">Manage Product</button></a>
            <a href="{{URL::to('loved-product/collection')}}"><button type="button" class="lebar-12 bg-putih text-15" style="border-radius: 15px;padding: 5px 10px;border: solid 1px #d1d2d3">Manage Credentials</button></a>
            <button class="no-border warnadasar text-roboto text-12" style="height: 40px;float: right;padding: 0 15px;">UPLOAD PRODUCT</button>
        </div>
        <div class="col-md-12 mt-45 pb-70" style="border-bottom: solid 1px #c4c4c4;padding-left: 0;padding-right: 0;">
            @for($i=0;$i<8;$i++)
            <div class="col-md-3 box-prod" style="">
                <!--<div>-->
                <div class="bg-pink box-product2" style="text-align: center">
                    <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                    <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                    <a class="add-compare hidden"><i class="fa fa-plus" style="position: relative;font-size: 10em;top: -160px;"></i></a>
                </div>
                <div class="bg-abuabu desc-product">
                    <div class="desc-left">
                        Name, Brands, Store
                    </div>
                    <div class="desc-right">
                        <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
<div class="section pt-10 pb-10">
    <div class="container">
        <span class="text-14 text-cabin">RELATED ARTICLES</span>
    </div>
</div>
<div class="blog-section section pb-20">
    <div class="container">
        <div class="row">
            <!-- blog-item start -->
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40">
                <div class="blog-item">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>                     
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40">
                <div class="blog-item">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>                     
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40">
                <div class="blog-item">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 20px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>                     
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40">
                <div class="blog-item">
                    <a class="image" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 20px;display: block">SPONSORED, 100+</span>
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
    .input1{
        background-color: #d1d2d3;
        width: 100%;
        border: none;
        height: 40px;
        padding-left: 10px;
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
    .lebar-12{
        width: 12%;
    }
    .lebar-15{
        width: 15%;
    }
    .box-prod {
        padding: 0 8px 0 0;
        margin: 3px 0 3px 0;
        /*        background-color: #d1d2d3;*/
    }
    .box-product2 {
        height: 177px;
        width: 100%;
        padding: 0 0 0 0;
        text-align: center;
    }
    .box-product2 > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -190px;
        margin-left: -13px;
        float: left;
    }
    .box-product2 > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -185px;
        margin-right: -4px;
        float: right;
    }
    .desc-product {
        height: 40px;
        padding: 10px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .gambar-full{
        width: 100%;
        height: 100%;
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