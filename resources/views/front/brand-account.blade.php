@extends('layout')
@section('title')
<title>SeratusPlus || Brand Details</title>
@endsection
@section('content')
<div class="section pt-40 pb-55">
    <div class="container">
        <div class="desc-left">
            <img class="" src="{{asset('front/img/icon/close.png')}}" style="width: 45px;margin-right: 20px;" height="45">
            <select class="select1" style="">
                <option value="1">KEKAYUAN INDONESIA</option>
            </select>
            <span class="text-16" style="font-style: italic">Your subcription ends in 3 days. <a href="">Click here</a> to extend</span>
        </div> 
        <div class="desc-right" style="display: inline-flex">
            <div class="icon-corner">
                <i class="fa fa-info-circle"></i>
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
    .icon-corner{
        padding-left: 20px;
        padding-right: 20px;
        border-left:solid 1px #b5b5b5;
        border-right:solid 1px #b5b5b5;
    }
    .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -260px;
        margin-left: -13px;
        float: left;
    }
    .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -255px;
        margin-right: -5px;
        float: right;
    }
    .lokasi > label{
        padding-left: 0;
        padding-right: 30px;
        font-weight: normal;
        font-size: 12px;
    }
    div.operational{
        padding-left: 0;
        padding-right: 0;
        border-top: solid 2px black;
        border-bottom: solid 2px black;
    }
    .operational > label{
        padding-left: 0;
        padding-right: 30px;
        font-weight: normal;
        font-size: 12px;
    }
    .deskripsi{
        padding-left: 0;
        padding-right: 0;
        padding-top: 30px;
        line-height: 20px;
    }
    .tags{
        padding-left: 0;
        padding-right: 0;
        padding-top: 80px;        
    }
    .corner-btn{
        position: absolute;
        top: 170px;
        bottom: 0;
        right: 0;
        background-color: white;
    }
    .desc-product {
        height: 30px;
        padding: 2px 10px 20px 10px;
        font-family: cabin;
        font-size: 10px;
    }
    .desc-left{
        float: left;
    }
    .desc-right{
        float: right;
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