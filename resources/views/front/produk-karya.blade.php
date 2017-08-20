@extends('layout')
@section('title')
<title>SeratusPlus || Produk & Karya</title>
@endsection
@section('content')
<div class="section pt-60 pb-20">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">HOME</a></li>
        </ul>
        <span class="title">Products & Works</span>
    </div>
</div>
<!-- PRODUCT SECTION START -->
<div class="container pt-20">
    <h5>Highlight</h5>
</div>
<div class="product-section section pt-20 pb-20 bg-abuabu" style="height: 150px;">
    <div class="container">
        <div class="row">
            <div class="product-slider product-slider-4">
                <!-- product-item start -->
                <div class="col-xs-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-banner">
                                <a href="#"><img src="{{asset('front/img/banner/1.jpg')}}" height="110" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xs-6 pt-20 slidermini">
                            <p class="text-cabin" style="color: black;font-size: 9px;line-height: normal;margin-bottom: 20px;" >FEATURED PRODUCT</p>       
                            <p class="text-cabin" style="color: black;font-size: 11px;line-height: normal;" >BIKA LIVING<br>FURNITURE</p>       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SECTION END --> 

<div class="section pt-40 pb-10">
    <div class="container">
        <div class="single-sidebar">
            <form action="#" class="sidebar-search">
                <input type="text" name="query" placeholder="Search: seating,desk,kids" style="border-color: #e0c4cc;color: #e0c4cc">                
            </form>
        </div>
    </div>
</div>
<div class="section pt-10 pb-20">
    <div class="container">
        <h5 style="margin-bottom: 15px;">Filter</h5>
        <ul class="menu-bawah">
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">Ruang</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">Jenis Produk</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">Material</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">Store Location</option>
                    </select>
                </div>
            </li>
            <li>
                <div class="item-per-page" style="float: left">
                    <select>
                        <option value="1">Range Harga</option>
                    </select>
                </div>
            </li>
        </ul>
        <div class="item-per-page hidden-sm hidden-xs" style="float: right">
            <button class="warnadasar no-border" style="font-size: 10px;font-family: Roboto;">Suprise Me/Randomize</button>
        </div>
    </div>
</div>
<div class="section pt-50 pb-10">
    <div class="container">
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product1 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product1 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product1 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
            </div>
            <div class="bg-abuabu desc-product">
                <div class="desc-left">
                    Name, Brands, Store 5
                </div>
                <div class="desc-right">
                    <a href="#"><i class="fa fa-plus"></i></a>&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">           
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <div class="bg-pink box-product2 box-product1-sm" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
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
    </div>
</div>
<div class="section pt-10 pb-100">
    <!--<div class="container">-->
    <a href="#"><img class="expand expand-sm" src="{{asset('front/image/va-slide-down.png')}}"></a>
    <!--</div>-->
</div>
<div class="section pt-30 pb-30 bg-abuabu">
    <div class="container text-center pt-30 pb-30">
        <p class="text-cabin" style="color: black">Designers, journalists and buyers, click here to find out how seratusplus.com benefits you!</p>
    </div>
</div>

<!--Modal-->
<div class="modal fade" style="padding-top: 10%" id="modalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="tutup" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i>
            </button>
            <div class="modal-body">
                <div class="row" style="margin-left: 10px;margin-right: 0">
                    <div class="col-md-12 box-prod-modal">
                        <!--<div>-->
                        <div class="bg-pink box-product-modal" style="">
                            <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                        </div>                        
                    </div>
                    <div class="col-md-6 pt-20" style="padding-left: 0">
                        <label class="text-cabin text-16" style="font-weight: bold">Name of Product,</label><br>
                        <label class="text-cabin text-16" style="font-weight: bold">Brand,</label><br>
                        <label class="text-cabin text-16" style="font-weight: bold">Store.</label><br>
                        <p class="pt-30 text-12" style="margin: 0">
                            Spesification#1,<br>
                            Spesification#2,<br>
                            Spesification#3,<br>
                            Spesification#4
                        <p class="pt-20 text-12" style="margin: 0">
                            Price Range<br><br>
                        </p>
                    </div>
                    <div class="col-md-6 pt-20" style="padding-right: 0">
                        <span style="float: right;color: lightgray">
                            <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-pinterest"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </span>
                    </div>
                    <div class="col-md-12" style="padding-left: 0;padding-right: 0">
                        <span class="text-cabin" style="float: left;font-size: 10px">
                            Indonesia, Jakarta, Resor, Furnitur, Aksesori, Tag 6, Tag 7
                        </span>
                        <span style="float: right;">
                            <a href="#"><i class="fa fa-plus fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="#"><i class="fa fa-heart fa-2x"></i></a>
                        </span>
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
        .box-product1-sm {
            height: 140px!important;
            width: 100%;
            padding: 0 0 0 0;
        }
        .box-product1-sm > .corner-left{
            height: 40px!important;
            width: 40px!important;
            position: relative;
            margin-top: -150px!important;
            margin-left: -8px!important;
            float: left;
        }
        .box-product1-sm > .corner-right{
            height: 40px!important;
            width: 40px!important;
            position: relative;
            margin-top: -145px!important;
            margin-right: -4px!important;
            float: right;
        }
        img.expand-sm {
            margin-top: -110px!important;
            position: absolute;
        }
    }
    @media (max-width: 768px) {
        .box-product1-sm {
            height: 140px!important;
            width: 100%;
            padding: 0 0 0 0;
        }
        .box-product1-sm > .corner-left{
            height: 40px!important;
            width: 40px!important;
            position: relative;
            margin-top: -150px!important;
            margin-left: -8px!important;
            float: left;
        }
        .box-product1-sm > .corner-right{
            height: 40px!important;
            width: 40px!important;
            position: relative;
            margin-top: -145px!important;
            margin-right: -4px!important;
            float: right;
        }
        img.expand-sm {
            margin-top: -110px!important;
            position: absolute;
        }
    }
    .gambar-full{
        width: 100%;
        height: 100%;
    }
    .product-slider .slick-arrow {
        margin-top: -20px;
    }
    img.expand {
        margin-top: -230px;
        position: absolute;
    }
    .modal.fade {
        z-index: 10000000 !important;
    }
    .box-prod-modal {
        padding: 0 0 0 0;
        margin: 3px 0 3px 0;
    }
    .box-product-modal {
        height: 300px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .box-product-modal > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -310px;
        /*margin-left: -10px;*/
        float: left;
    }
    .box-product-modal > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -305px;
        /*margin-left: -10px;*/
        float: right;
    }
    .desc-product-modal {
        /*        height: 30px;*/
        padding: 2px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .box-prod {
        padding: 0 8px 0 0;
        margin: 3px 0 3px 0;
    }
    .box-product1 {
        height: 250px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .box-product1 > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -260px;
        margin-left: -13px;
        float: left;
    }
    .box-product1 > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -255px;
        margin-right: -4px;
        float: right;
    }
    .box-product2 {
        height: 102px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .box-product2 > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -120px;
        margin-left: -13px;
        float: left;
    }
    .box-product2 > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -115px;
        margin-right: -4px;
        float: right;
    }
    .box-product3 {
        height: 45px;
        width: 100%;
        padding: 0 0 0 0;
    }
    .desc-product {
        height: 40px;
        padding: 10px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .desc-left{
        float: left;
    }
    .desc-right{
        float: right;
    }
    //modal  
    .modal-content {
        background-color: whitesmoke;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        margin-top: 10%;
        position: relative;
        -webkit-box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.1);
        box-shadow: 0px 4px 6px 0px rgba(0,0,0,0.1);
    }
    button.tutup{
        transition: all 0.5s ease;
        position: absolute;
        background-color: #e5c773;
        right: 0;
        margin-right: -13px;
        margin-top: -13px;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        border: none;
        color: white;
        -webkit-box-shadow: -4px -2px 6px 0px rgba(0,0,0,0.1);
        -moz-box-shadow: -4px -2px 6px 0px rgba(0,0,0,0.1);
        box-shadow: -3px 1px 6px 0px rgba(0,0,0,0.1);
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('.box-prod').click(function () {
            $('#modalView').modal('show');
        })
    });
    function open() {
        $('#modalView').modal('show');
    }
</script>
@endsection