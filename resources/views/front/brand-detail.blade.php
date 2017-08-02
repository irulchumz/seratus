@extends('layout')
@section('title')
<title>SeratusPlus || Brand Details</title>
@endsection
@section('content')
<div class="section pt-60 pb-20">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{URL::to('brand')}}"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;BRANDS & SHOWROOM</a></li>
            <li><a href="#">A</a></li>
            <li><a href="#">AEDI</a></li>
        </ul>        
    </div>
</div>
<div class="section pt-15 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 hidden-md hidden-lg text-cabin" style="font-weight: bold;font-size: 20px;">AEDI</div>
            <div class="col-xs-6 col-sm-6 hidden-md hidden-lg text-cabin text-right" style="font-weight: bold;font-size: 12px;">www.aediinterior.com</div>
            <div class="col-md-6">
                <img class="brand-detail-img" src="{{asset('front/img/product/1.jpg')}}" style="width: 100%" height="500">
            </div>
            <div class="col-md-6" style="">
                <h2 class="text-cabin hidden-sm hidden-xs" style="font-weight: bold">AEDI</h2>
                <h5 class="text-cabin hidden-sm hidden-xs" style="font-weight: bold">www.aediinterior.com</h5>
                <div class="lokasi col-md-12 col-sm-12 col-xs-12" style="width: 100%;padding-left: 0;padding-right: 0;">
                    <label class="control-label text-roboto text-10 col-md-3 hidden-sm hidden-xs" style="font-weight: bold">LOKASI</label>
                    <label class="control-label text-roboto text-10 col-md-3 col-sm-4 col-xs-4" style="line-height: 20px;">
                        Jl Rambai 1 No. 3<br>
                        Jakarta Selatan<br>
                        +6221 8228244
                    </label>
                    <label class="control-label text-roboto text-10 col-md-3 col-sm-4 col-xs-4" style="line-height: 20px;">
                        Jl Rambai 1 No. 3<br>
                        Jakarta Selatan<br>
                        +6221 8228244
                    </label>
                    <label class="control-label text-roboto text-10 col-md-3 col-sm-4 col-xs-4" style="line-height: 20px;">
                        Jl Rambai 1 No. 3<br>
                        Jakarta Selatan<br>
                        +6221 8228244
                    </label>
                </div>
                <div class="operational col-md-12 col-sm-12 col-xs-12">
                    <label class="control-label text-roboto text-10 col-md-3" style="font-weight: bold">JAM BUKA</label>
                    <label class="control-label text-roboto text-10 col-md-3" style="line-height: 20px;">
                        Setiap Hari<br>
                        10.00 - 17.00
                    </label>
                </div>
                <div class="deskripsi text-14 col-md-12 col-sm-12 col-xs-12">
                    Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.
                    Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat. Bermula dari tindakan berolak dari amerika Serikat.
                </div>
                <div class="tags col-md-12 text-roboto text-12" style="font-weight: lighter;">
                    Indonesia, Jakarta, Resor, Furnitur, Aksesori
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pt-40 pb-20 bg-smoke" style="height: 368px">
    <div class="container">
        <div class="row">
            <div class="product-slider product-slider-4">
                <!-- product-item start -->
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>         
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>         
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12" >
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>         
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>       
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>      
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>     
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>     
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="product-item text-center">
                        <div class="single-banner" style="position: relative">
                            <a class="image" href="product-details.html">
                                <img src="{{asset('front/img/product/1.jpg')}}" height="250" alt=""/>
                            </a>   
                            <img class="corner-left" src="{{asset('front/image/va-drop.png')}}">
                            <img class="corner-right" src="{{asset('front/image/va-dollar.png')}}">
<!--                            <button class="corner-btn"><i class="fa fa-plus"></i></button>-->
                            <div class="bg-abuabu desc-product">
                                <div class="desc-left">
                                    Name, Brands, Store
                                </div>
                                <div class="desc-right">
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;
                                    <i class="fa fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section pt-40 pb-20">
    <div class="container">
        <div class="bg-smoke" style="height: 500px;">
            <div class="col-md-6 col-sm-12 col-xs-12" style="padding-left: 0;padding-right: 0">
                <iframe style="width: 100%;" height="500" src="https://www.youtube.com/embed/FM7MFYoylVs"></iframe>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" style="padding: 20px">
                <div class="bg-hitam" style="padding-top: 20px;padding-left: 20%;padding-right: 20%;">
                    <h3 style="color: white;text-align: center">INQUIRE</h3><br>
                    <form id="contact-form" class="" action="mail.php" method="post" style="color: white">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 mb-15" style="padding-left: 0;padding-right: 0;border-bottom: solid 1px white">
                                <input type="checkbox"/>
                                <label class="pull-right" for="ship_form">ASK FOR CATALOG</label>
                            </div>
                            <div class="col-sm-12 col-xs-12 mb-15" style="padding-left: 0;padding-right: 0;border-bottom: solid 1px white">
                                <input type="checkbox"/>
                                <label class="pull-right" for="ship_form">FULL PRICELIST</label>
                            </div>
                            <div class="col-sm-12 col-xs-12 mb-15" style="padding-left: 0;padding-right: 0;border-bottom: solid 1px white">
                                <input type="checkbox"/>
                                <label class="pull-right" for="ship_form">OTHER INQUIRIES/GENERAL</label>
                            </div>
                            <textarea class="mb-15" style="width: 100%;height: 150px;color: gray" id="order_note" placeholder="Your message here" ></textarea>	

                            <input class="col-md-12 mb-35 warnadasar no-border text-cabin" style="color: white;font-weight: bold" type="submit" value="SUBMIT" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                    <a class="image col-sm-6 col-xs-6" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-sm-6 col-xs-6" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-sm-6 col-xs-6" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
                    <div class="blog-dsc">
                        <span class="text-18" style="display: block">Out, of the Box<br>In Comfort.</span>
                        <span class="text-14" style="margin-top: 24px;display: block">SPONSORED, 100+</span>
                        <span class="text-12 text-roboto" style="font-weight: lighter;margin-top: 60px;display: block">SPONSORED, 100+</span>
                    </div>
                </div>
            </div>            
            <div class="col-md-3 col-sm-6 col-xs-12 mb-40 mb-xs-5">
                <div class="blog-item">
                    <a class="image col-sm-6 col-xs-6" href="blog-details.html"><img src="{{asset('front/img/blog/1.jpg')}}" alt=""></a>
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
<div class="section pt-30 pb-30 bg-abuabu">
    <div class="container text-center pt-30 pb-30">
        <p class="text-cabin" style="color: black">INGIN MEMASTIKAN KONSUMEN TAU DIMANA BISA MENDAPATKAN PRODUK ANDA?<br>TEMUKAN CARANYA DISINI</p>
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