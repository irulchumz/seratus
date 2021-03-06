@extends('layout')
@section('title')
<title>SeratusPlus || Brand Details</title>
@endsection
@section('content')
<div class="section pt-60">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">HOME</a></li>
        </ul>
        <span class="title">TOP 10 MOST LOVED PRODUCTS</span>
    </div>
</div>
<!--<div class="container pt-10">
    <span class="text-12">Author SIMPUL, DESEMBER 2016</span>
</div>-->
<div class="section pt-40">
    <div class="container">
        <span class="text-12">Here are the most loved products of the month</span>
    </div>
</div>
<div class="section pt-40 pb-10">
    <div class="container">
        @for($i=0;$i<8;$i++)
        <div class="col-md-3 col-sm-6 col-xs-6 box-prod" style="">
            <!--<div>-->
            <div class="bg-abuabu title-product">
                <div class="title-left">
                    {{$i+1}}
                </div>
                <div class="title-right">
                    <i class="fa fa-heart"></i>&nbsp;&nbsp;<span>250</span>
                </div>
            </div>
            <div class="bg-pink box-product1" style="">
                <img class="gambar-full" src="{{asset('front/img/product/1.jpg')}}" alt=""/>
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
<div class="section pt-20 pb-20">
    <div class="container">
        <h5>RELATED ARTICLES IN THE MAGAZINE</h5>
        <hr style="color: gray;height: 1px;display: block;background: black;border: 0">
    </div>
</div>
<div class="blog-section section pt-20 pb-20">
    <div class="container">
        <div class="row">
            <!-- blog-item start -->
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6 no-padding" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6 no-padding" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-md-12 col-sm-6 col-xs-6 no-padding" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<div class="section pt-30 pb-30" style="background-image: url('{{asset("front/img/bg-box-bottom1.png")}}');background-size:100%;">
    <div class="container text-center pt-30 pb-30">
        <p class="text-cabin" style="color: black">Designers, journalists and buyers, click here to find out how seratusplus.com benefits you!</p>
    </div>
</div>

@endsection
@section('css')
<style media="screen" type="text/css">
    @media (min-width: 992px) {
        .box-product1 {
            height: 220px;
            width: 100%;
            padding: 0 0 0 0;
        }
        .title-product {
            height: 70px;
            padding: 23px 20px 20px 20px;
            font-family: cabin;
            font-size: 50px;
        }
        .title-left{
            float: left;
            font-size: 50px;
            font-weight: bold;
        }
        .title-right{
            float: right;
            font-size: 15px;
            color: maroon;
        }
    }
    @media (min-width: 768px) and (max-width: 992px) {
        .box-product1 {
            height: 160px;
            width: 100%;
            padding: 0 0 0 0;
        }
        .title-product {
            height: 45px;
            padding: 10px 10px 20px 15px;
            font-family: cabin;
            font-size: 50px;
        }
        .title-left{
            float: left;
            font-size: 22px;
            font-weight: bold;
        }
        .title-right{
            float: right;
            font-size: 13px;
            color: maroon;
        }
        .mb-xs-5{
            margin-bottom: 5px!important;
        }
        .title{
            font-size: 14px!important;
        }
        .pt-xs-25{
            padding-top: 15px!important;
        }
    }
    @media (max-width: 768px) {
        .box-product1 {
            height: 160px;
            width: 100%;
            padding: 0 0 0 0;
        }
        .title-product {
            height: 45px;
            padding: 10px 10px 20px 15px;
            font-family: cabin;
            font-size: 50px;
        }
        .title-left{
            float: left;
            font-size: 22px;
            font-weight: bold;
        }
        .title-right{
            float: right;
            font-size: 13px;
            color: maroon;
        }
        .mb-xs-5{
            margin-bottom: 5px!important;
        }
        .title{
            font-size: 14px!important;
        }
        .pt-xs-25{
            padding-top: 15px!important;
        }
    }
    .gambar-full{
        width: 100%;
        height: 100%;
    }
    .box-prod {
        padding: 0 8px 0 0;
        margin: 3px 0 3px 0;
        /*height: 300px;*/
    }
    .box-product1 > .corner-left{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -210px;
        margin-left: -13px;
        float: left;
    }
    .box-product1 > .corner-right{
        height: 60px;
        width: 60px;
        position: relative;
        margin-top: -205px;
        margin-right: -4px;
        float: right;
    }
    .desc-product {
        height: 41px;
        padding: 8px 10px 20px 10px;
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